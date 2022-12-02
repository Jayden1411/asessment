<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClickRecord extends Model
{
    use HasFactory;
     protected $fillable=['vacancy_ref','click_date'];
}
