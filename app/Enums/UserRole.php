<?php
namespace App\Enums;
use App\Traits\Enums\Values;

enum UserRole:string
{
    case ADMIN = 'admin';
    case SUPER = 'super';
}

