<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students_records';
    protected $primaryKey = 'std_id';
}
