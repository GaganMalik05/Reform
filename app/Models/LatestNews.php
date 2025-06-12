<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    protected $table = 'latest_news';

    protected $fillable = [
        'content',
        'pdf_path',
    ];

    public $timestamps = false;
}