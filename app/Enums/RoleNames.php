<?php

namespace App\Enums;

enum RoleNames: string
{
    case Creator = 'CREATOR';
    case Basic   = 'BASIC';
    case Admin   = 'ADMIN';
}
