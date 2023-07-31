<?php

namespace App\Enums;

enum Statuses: string
{
    case Active   = 'active';
    case Expired  = 'expired';
    case Finished  = 'finished';
    case Inactive = 'inactive';
}
