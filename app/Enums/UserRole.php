<?php
namespace App\Enums;
use App\Traits\Enums\Values;

enum UserRole:string
{
    use Values;

    case ADMIN = 'admin';
    case CUSTOMER = 'customer';
}

