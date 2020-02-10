<?php

namespace App\helpers;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class FileUpload
{
    public static function deleteImage($image)
    {
        if(null != $image) {
            $image_path = public_path("uploads/$image");
            if(file_exists($image_path)) unlink($image_path);
        }
    }

    public static function upload($path, $file, $image = null)
    {
        $folder = "uploads/";
        if(!is_dir(public_path($folder.$path))) {
            mkdir(public_path($folder.$path), 0777);
        }
        return $file = Storage::putFile($path, new File($file), 'public');
    }
}
