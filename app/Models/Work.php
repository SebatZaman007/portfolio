<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable=[
        'work_year',
        'work_post',
        'work_company_link',
        'work_company_name',
        'work_description'
    ];
}
