<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'categoryID ';
    protected $fillable = [
        'category_name'  //CategoryControler ekeeta gaththa data tika data base ekee save kara gannawa
    ];
}
