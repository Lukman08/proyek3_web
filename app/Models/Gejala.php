<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejalas';
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        date_default_timezone_set("Asia/Jakarta");
        // Create a new post
        static::creating(function ($post) {
            // $post->created_by = auth()->user()->id ?? null;
            $post->created_at = DATE("Y-m-d H:i:s");
            // $post->updated_by = auth()->user()->id ?? null;
            $post->updated_at = DATE("Y-m-d H:i:s");
        });

        // Update an existing post
        static::updating(function ($post) {
            // $post->updated_by = auth()->user()->id ?? null;
            $post->updated_at = DATE("Y-m-d H:i:s");
        });
    }

    public function aturans()
    {
        return $this->belongsToMany(Gejala::class, 'kodegejala', 'kodegejala');
    }

    public function penyakits()
    {
        return $this->belongsTo(Penyakit::class, 'kodepenyakit', 'kodepenyakit');
    }
}