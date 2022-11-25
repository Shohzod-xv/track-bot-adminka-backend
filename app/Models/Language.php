<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'icon', 'description_uz', 'description_ru', 'description_en'];
}
