<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrantResource\Pages;
use App\Filament\Resources\RegistrantResource\RelationManagers;
use App\Models\Registrant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Exports\RegistrantExporter;
use Filament\Tables\Actions\ExportAction;

class RegistrantResource extends Resource
{
    protected static ?string $model = Registrant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('mobile')
                    ->required(),
                Forms\Components\TextInput::make('workplace')
                    ->required(),
                Forms\Components\TextInput::make('speciality')
                    ->required(),
                // Forms\Components\TextInput::make('scfhs_card'),
                // Forms\Components\TextInput::make('feedback'),
                Forms\Components\TextInput::make('event_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mobile')
                    ->searchable(),
                Tables\Columns\TextColumn::make('workplace')
                    ->searchable(),
                Tables\Columns\TextColumn::make('speciality')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event.name')
                    ->searchable(),

                // Tables\Columns\TextColumn::make('scfhs_card')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('feedback')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('event_id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->headerActions([
                ExportAction::make()
                    ->exporter(RegistrantExporter::class)
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
            'index' => Pages\ListRegistrants::route('/'),
            // 'create' => Pages\CreateRegistrant::route('/create'),
            'edit' => Pages\EditRegistrant::route('/{record}/edit'),
        ];
    }


}
