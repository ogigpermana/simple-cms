<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function  getImageUrlAttribute($value)
    {
    // Definisikan variable $imageUrl
    $imageUrl = "";
    $directory = config('cms.image.directory');
    // Pastikan post memiliki gambar dalam artian tidak null
        if(! is_null($this->image)){
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            // Cek file di server
            if (file_exists($imagePath)){
            // Jika file gambar ada di server 
            // maka kita tampung url gambar dalam
            // variable image url
            $imageUrl = asset("{$directory}/" . $this->image);
            }
            return $imageUrl;

        }
    }

    public function getDateAttribute($value)
    {
        return $this->created_at->toFormattedDateString();
    }

    public function scopeLatestFirst($value)
    {
        return $this->orderBy('created_at', 'desc');
    }
}
