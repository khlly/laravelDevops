<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TerrainImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'terrain_id',
        'image_path',
        'uploaded_at',
    ];

    public $timestamps = false; // Pas de created_at/updated_at pour cette table si uploaded_at est suffisant
}