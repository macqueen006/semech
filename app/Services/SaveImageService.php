<?php
namespace App\Services;


use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class SaveImageService
{
    public static function uploadImage($image, $model, $folder)
    {
        $path = Storage::putFile('public/'. $folder, new File($image));
        $targetStorage = storage_path('app/'. $path);
        Image::make($image)->resize(1200, 630)->save($targetStorage);

        $model->image = $path;
        $model->save();

    }
}
