<?php 

namespace Modules\Student\Repository;

class ImageRepository
{

    public function uploadImage($request, $filename, $path)
    {
        if($image = $request->file($filename)){
            $image_ext = strtolower($image->getClientOriginalName());
            $image_name = hexdec(uniqid()).'_'.$image_ext;
            $uploadPath = $path; 
            $imageUrl = $uploadPath.$image_name;
            $image->move(public_path($uploadPath), $image_name);    
        }
        return $imageUrl;

    }

    public function deleteImage($imageUrl)
    {
        if($imageUrl){
            unlink(public_path($imageUrl));
        }
    }
}


?>