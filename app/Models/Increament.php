<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Increament extends Model
{
    use HasFactory;

    protected $fillable=[
        'company_id','employee_id','department_id','percent','inc_date'
    ];

    protected $dates   = [
        'created_at',
        'updated_at',
        'date'
    ];

}
