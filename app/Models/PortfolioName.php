<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioName extends Model
{
    use HasFactory;
     protected $fillable=[
         'your_name',
         'your_position'
     ];
}
