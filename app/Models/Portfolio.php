<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'description', 'thumbnail', 'website', 'type', 'skills_id', 'finished_at'];

    protected $casts  = ['skills_id' => 'array'];
}
