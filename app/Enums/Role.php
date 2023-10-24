<?php

namespace App\Enums;

enum Role: string
{
    case Free = 'free';
    case Pro = 'pro';
    case Ulama = 'ulama';
    case Admin = 'admin';

}
