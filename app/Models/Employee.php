<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Employee extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'card_no',
        'gender',
        'marital_status',
        'date_of_birth',
        'salary',
        'is_ot_enable',
        'present_address',
        'permanent_address',
        'photo',
    ];
}