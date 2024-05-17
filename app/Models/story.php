<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    use HasFactory;
    protected $table='story';
    protected $fillable = ['user_id','category_id','title','description','is_paid','avg_rating','total_rating','total_rating','criteria','linked_by'];


    public function story_user(){
        
        return $this->belongsTo(user::class,'user_id');    
    }
  
}
