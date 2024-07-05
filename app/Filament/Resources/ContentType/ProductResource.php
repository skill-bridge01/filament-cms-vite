<?php

namespace App\Filament\Resources\ContentType;

use App\Filament\Resources\ContentType\ProductResource\Pages;
use App\CmsPages\Templates\ContentType\Product as Template;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use SolutionForest\FilamentCms\Enums\PageType;
use Filament\Resources\Concerns\Translatable;
use Filament\Forms\Components\FileUpload;
use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;

class ProductResource extends BaseResource
{
    // use \Filament\Resources\Concerns\Translatable;
    use Translatable;
    // protected static ?string $model = Product::class;

    protected static ?int $navigationSort = null;

    protected static $parentPageKey = '2';

    protected static string $subSlug = 'products';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(Product::class, 'slug', ignoreRecord: true),

                Forms\Components\MarkdownEditor::make('data')
                    ->columnSpan('full'),
                FileUpload::make('image')
                    ->columns(1)
                    ->label('Image')
                    // ->image()
                    ->enableReordering()
                    ->enableDownload()
                    ->enableOpen()
                    ->directory('library'),
                    

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->groupedBulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->action(function () {
                        Notification::make()
                            ->title('Now, now, don\'t be cheeky, leave some records for others to play with!')
                            ->warning()
                            ->send();
                    }),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('title'),
                TextEntry::make('slug'),
                TextEntry::make('data'),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ])
            ->columns(1)
            ->inlineLabel();
    }

    public static function getModelLabel(): string
    {
        return 'Product';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'edit' => Pages\EditProduct::route('/{record:id}/edit'),
            'create' => Pages\CreateProduct::route('/create'),
        ];
    }

    public static function getTemplate(): string
    {
        return Template::class;
    }

    // public static function getTranslatableLocales(): array
    // {
    //     return ['en', 'es'];
    // }
}
