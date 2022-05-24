<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'telegram',
        'instagram',
        'email',
        'github',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
