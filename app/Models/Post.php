<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        $directory = config('cms.image.directory');

        if (!is_null($this->image)) {
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            if (file_exists($imagePath)) {
                $imageUrl = asset("{$directory}/" . $this->image);
            }
        }

        return $imageUrl;
    }
}
