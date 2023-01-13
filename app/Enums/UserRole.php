<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const EMPLOYEE =   1;
    const ADMIN =   2;
    const SUPER_ADMIN = 3;
}
