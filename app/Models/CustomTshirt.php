<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomTshirt extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'tshirt_id',
        'title',
        'text'
    ];

    public function Tshirt(){
        return $this->belongsTo(Tshirt::class, 'tshirt_id');  
    }  
}
