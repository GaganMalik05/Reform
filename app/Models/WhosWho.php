<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhosWho extends Model
{
    protected $table = 'who_is_who';
    public $timestamps = false;
    protected $fillable = [
    'name',
    'designation',
    'contact_no',
    'email',
    'photo_link',
];
}
