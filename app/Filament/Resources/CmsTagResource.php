<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsTagResource\Pages;
use App\Filament\Resources\CmsTagResource\RelationManagers;
use App\Models\CmsTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CmsTagResource extends \SolutionForest\FilamentCms\Filament\Resources\CmsTagResource
{
    use \Filament\Resources\Concerns\Translatable;

    protected static ?string $model = CmsTag::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(fn (string $operation, $state, Forms\Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),

            Forms\Components\TextInput::make('slug')
                ->disabled()
                ->dehydrated()
                ->required()
                ->maxLength(255)
                ->unique(Category::class, 'slug', ignoreRecord: true),
            Forms\Components\TextInput::make('category_id')
                ->maxLength(255)
                ->required(),
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCmsTags::route('/'),
            'create' => Pages\CreateCmsTag::route('/create'),
            'edit' => Pages\EditCmsTag::route('/{record}/edit'),
        ];
    }
}
