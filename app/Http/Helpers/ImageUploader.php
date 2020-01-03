<?php

namespace Edaacil\Http\Helpers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Image;

function imageUploader($file)
{
    $image = $file->file('profile_image');# column in the database

    $filename = Str::random(3) . time(). '-' .$image->getClientOriginalExtension();
    Storage::disk('public')->put($filename, File::get($image), 'public');


    $file = public_path('profile_image/'.$filename);

    # Resize the image, width = 100, height = 100
    if (file_exists($file)){
        $image = Image::make($file);
        $image->resize(100,100,function($constraint){
            $constraint->aspectRatio();
        });

        $image->save();
    }
    return $filename;
}
