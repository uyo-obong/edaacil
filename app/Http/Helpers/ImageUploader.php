<?php

namespace Edaacil\Http\Helpers;

use Edaacil\Modules\Manager\Http\Models\Manager;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

function imageBuilder($image){

    # Get Auth user
    $profile = Manager::where("id",auth()->user()->id)->first();

    #Get column in the database
    $oldProfileImage = $profile->profile_image;

    $fileName = Str::random(5). time().'.'.$image->getClientOriginalExtension();# change photo name
    Storage::disk('public')->put($fileName, File::get($image),'public');# storage directory

    $file = public_path('userImages/'.$fileName);

    if (file_exists($file)){
        $image = Image::make($file);
        $image->resize(100,100, Static function ($constraints){
            $constraints->aspectRatio();
        });
        $image->save();
    }

    # Delete old profile photo file
    if ($profile->save() && file_exists(public_path('userImages/' . $oldProfileImage))) {
        File::delete(public_path('userImages/' . $oldProfileImage));
    }

    return $fileName;

}
