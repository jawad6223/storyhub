<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story_category extends Model
{
    use HasFactory;
    protected $table='story_category';
    protected $fillable = ['name'];
    
    
}
