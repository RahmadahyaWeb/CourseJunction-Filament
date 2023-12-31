<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaterialResource\Pages;
use App\Filament\Resources\MaterialResource\RelationManagers;
use App\Models\Material;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\App;

class MaterialResource extends Resource
{
    protected static ?string $model = Material::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $pluralModelLabel = 'Course Materials';
    protected static ?string $modelLabel = 'Course Material';
    protected static ?string $navigationLabel = 'Course Materials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        Select::make('course_id')
                            ->label('Course')
                            ->placeholder('Select the course')
                            ->relationship('course', 'title')
                            ->required()
                            ->searchable()
                            ->preload(),
                        TextInput::make('title')
                            ->required()
                            ->placeholder('Enter the title for the course material'),
                        RichEditor::make('description')
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->placeholder('Enter the course material description'),
                        TextInput::make('duration')
                            ->required()
                            ->placeholder('Enter the course material duration'),
                        TextInput::make('embed_link')
                            ->label('Embed Link')
                            ->required()
                            ->placeholder('Enter the course material link'),

                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('course.title')
                    ->label('Course')
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMaterials::route('/'),
            'create' => Pages\CreateMaterial::route('/create'),
            'edit' => Pages\EditMaterial::route('/{record}/edit'),
            'view' => Pages\ViewMaterial::route('/{record}'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            MaterialResource\Widgets\StatsOverviewMaterial::class
        ];
    }
}
