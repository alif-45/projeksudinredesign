<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul Acara')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description_below_title')
                    ->label('Keterangan Singkat di Bawah Judul')
                    ->nullable()
                    ->rows(3)
                    ->maxLength(65535),

                Forms\Components\TextInput::make('short_note')
                    ->label('Keterangan Pendek (e.g., Wakil Walikota, Sekda)')
                    ->nullable()
                    ->maxLength(255),

                Forms\Components\DatePicker::make('date')
                    ->label('Tanggal Acara')
                    ->native(false)
                    ->displayFormat('d M Y')
                    ->required(),

                Forms\Components\TextInput::make('day_of_week')
                    ->label('Hari')
                    ->nullable()
                    ->maxLength(50),

                Forms\Components\TimePicker::make('time')
                    ->label('Jam (WIB)')
                    ->displayFormat('H:i')
                    ->required(),

                Forms\Components\TextInput::make('location')
                    ->label('Tempat Acara')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('short_note')
                    ->label('Keterangan Pendek')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal')
                    ->date('d M Y') // Format date for display
                    ->sortable(),

                Tables\Columns\TextColumn::make('day_of_week')
                    ->label('Hari')
                    ->sortable(),

                Tables\Columns\TextColumn::make('time')
                    ->label('Jam (WIB)')
                    ->time('H:i') // Format time for display
                    ->sortable(),

                Tables\Columns\TextColumn::make('location')
                    ->label('Tempat')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                // You can add filters here, e.g., for date range
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(), // Add direct delete action for convenience
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}

