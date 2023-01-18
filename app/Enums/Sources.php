<?php

namespace App\Enums;

enum Sources : string
{
    case Db = 'db';
    case Cache = 'cache';
    case Json = 'json';
    case Xlsx = 'xlsx';

}
