<?php
namespace App\Enums;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;


enum AppointmentStatus: string implements HasLabel, HasColor, HasIcon
{
    case ACTIVE = 'ACTIVE';
    case CANCELLED = 'CANCELLED';
    case INTIME = 'INTIME';
    case MISSED = 'MISSED';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'Aktív',
            self::CANCELLED => 'Lemondva',
            self::INTIME => '24 Órán belül lemondva',
            self::MISSED => 'Nem jelent meg',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::ACTIVE => 'info',
            self::CANCELLED => 'info',
            self::INTIME => 'warning',
            self::MISSED => 'danger',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'heroicon-o-calendar',
            self::CANCELLED => 'heroicon-o-x-mark',
            self::INTIME => 'heroicon-o-exclamation-triangle',
            self::MISSED => 'heroicon-o-face-frown',
        };
    }
}