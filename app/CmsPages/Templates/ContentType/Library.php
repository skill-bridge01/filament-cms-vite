<?php

namespace App\CmsPages\Templates\ContentType;

use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextInput\Mask;
use Filament\Forms\Components\Textarea;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use SolutionForest\FilamentCms\CmsPages\Templates\ContentTypeTemplate as BaseTemplate;
use Filament\Forms\Components\RichEditor;

class Library extends BaseTemplate implements CmsPageTemplate
{
    public static function schema(): array
    {
        // return [];
        return [
            // RichEditor::make('content')->label("Content")
            Forms\Components\Card::make()
                ->schema([
                    Textarea::make('content')
                        ->label('Content')
                        ->rows(3),
                    FileUpload::make('image')
                        ->columns(1)
                        ->label('Image')
                        ->image()
                        ->enableReordering()
                        ->enableDownload()
                        ->enableOpen()
                        ->directory('library'),
                        // ->directory('certificate_images')
                        // ->storeFileNamesIn('original_filename'),


                        // ->preserveFilenames(),
                    // FileUpload::make('img_url')
                    //     ->label('Image')
                    //     ->image()
                    //     ->directory('logo')
                    //     ->preserveFilenames(),
                    // SpatieMediaLibraryFileUpload::make('cover')
                    //     ->label('Cover')
                    //     ->required()
                    //     ->image()
                    //     ->collection('default'),
                    // SpatieMediaLibraryFileUpload::make('avatar')
                    //     ->collection('avatars'),
                    // FileUpload::make('attachment')
                    //     ->disk('s3')
                    //     ->directory('form-attachments')
                    //     ->visibility('private')

                    // Forms\Components\Section::make('Images')
                    //     ->schema([
                    //         SpatieMediaLibraryFileUpload::make('media')
                    //             ->collection('product-images')
                    //             ->multiple()
                    //             ->maxFiles(5)
                    //             ->hiddenLabel(),
                    //     ])
                    //     ->collapsible(),

                ])->columns(2)
        ];
    }

    public static function title(): string
    {
        return 'Library';
    }
}

