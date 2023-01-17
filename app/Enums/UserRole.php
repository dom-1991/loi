<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const EMPLOYEE = 1;
    const ADMIN = 2;
    const SUPER_ADMIN = 3;
    const POLICE = 4;
    const RENT_BUILDING = 5;

    public static function getLabel()
    {
        return [
            self::EMPLOYEE => 'Nhân viên',
            self::ADMIN => 'Quản lý',
            self::SUPER_ADMIN => 'Siêu quản lý',
            self::POLICE => 'Công An',
            self::RENT_BUILDING => 'Thuê quán',
        ];
    }

    public static function getColor()
    {
        return [
            self::EMPLOYEE => 'bg-primary',
            self::ADMIN => 'bg-success',
            self::SUPER_ADMIN => 'bg-success',
            self::POLICE => 'bg-secondary',
            self::RENT_BUILDING => 'bg-secondary',
        ];
    }
}
