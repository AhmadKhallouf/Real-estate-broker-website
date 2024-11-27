<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage as FacadesStorage;
use Image;
use Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageProcessingTrait{

    //this function use to save image in a specific place that is determined by admin
    public function saveImage($image,$extension,$width,$hight){
        $manager = ImageManager::gd();
        $img = $manager->read($image);
        $img->resize($width,$hight);
        $str_random = Str::random(8);
        $imagePath = $str_random.time().".".$extension;
        $img->save(public_path('/images/PostsPhoto').'/'.$imagePath);
        
        return $imagePath;

    } 


    //delete a specific image
    public function deleteImage($image){
        if(is_file(public_path('/images/PostsPhoto').'/'.$image)){
            if(file_exists(public_path('/images/PostsPhoto').'/'.$image)){
                unlink(public_path('/images/PostsPhoto').'/'.$image);
            }
        }
    }

}