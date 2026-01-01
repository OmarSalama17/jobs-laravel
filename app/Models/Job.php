<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job
{
    public static function all()
    {
        return [
            ['title' => 'program', 'salary' => '5000'],
            ['title' => 'program', 'salary' => '5000'],
        ];
    }
}
