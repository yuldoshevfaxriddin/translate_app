<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{
    use HasFactory;
    
    public $fillable = ['lang_type','lang_1','lang_2','description'];
    public $table = 'translates';
}
