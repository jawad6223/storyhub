<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story_image extends Model
{
    use HasFactory;
    protected $table='story_image';
    protected $fillable = ['story_id','file'];

}
