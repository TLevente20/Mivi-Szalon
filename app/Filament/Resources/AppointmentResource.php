<?php

namespace App\Filament\Resources;
use App\Filament\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use App\Models\Service;
use App\Enums\AppointmentStatus;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;

use function PHPUnit\Framework\matches;

class AppointmentResource extends Resource
{
    protected static ?string $label = 'Időpont Foglalás';

    protected static ?string $navigationLabel = 'Időpont Foglalások';

    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([  
                
                TextInput::make('name')->label('Név')->required()->maxLength(200),
                TextInput::make('dog_name')->label('Kutya neve')->maxLength(200),
                TextInput::make('dog_type')->label('Kutya fajtája')->maxLength(200),
                TextInput::make('phone')->label('Telefonszám')->tel()->default('+36')->required()->maxLength(50),
                Select::make('service_id')
                    ->label('Szolgáltatás')
                    ->options(Service::all()->pluck('name','id'))
                    ->searchable()->required(),
                DateTimePicker::make('start_time')->label('Időpont kezdete')->seconds(false)->required(),
                DateTimePicker::make('end_time')->label('Időpont vége')->seconds(false)->required()->after('start_time'),
                ToggleButtons::make('status')
                    ->options(AppointmentStatus::class)->inline()
                    ->label('Foglalás Státusza')->default('ACTIVE')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Név'),
                TextColumn::make('service.name')->label('Szolgáltatás'),
                TextColumn::make('phone')->label('Telefonszám'),
                TextColumn::make('start_time')->label('Időpont kezdete')->dateTime('Y-m-d H:i'),
                TextColumn::make('end_time')->label('Időpont vége')->dateTime('Y-m-d H:i'),
                TextColumn::make('status')
                    ->badge()->label('Foglalás státusza')
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
           
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}