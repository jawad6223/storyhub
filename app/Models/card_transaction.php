<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_transaction extends Model
{
    use HasFactory;

    
    protected $table='card_transaction';
    protected $fillable = ['card_number','transaction_id','created_at','amount','user_email' ];
}
