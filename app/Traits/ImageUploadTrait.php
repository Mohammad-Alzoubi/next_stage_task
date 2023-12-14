<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait {

    public function uploadImage(Request $request, $inputName, $directory)
    {
        if($request->hasFile($inputName)){

            $image = $request->{$inputName};
            $ext   = $image->getClientOriginalExtension();
            $base_path = "public/uploads/" . $directory;
            $filename  = 'logo_'.uniqid() . "." . $ext;
            $image->storePubliclyAs($base_path, $filename);

            return "storage/uploads/" . $directory . "/" . $filename;
        }
    }

    public function updateImage(Request $request, $inputName, $directory, $oldPath=null)
    {
        if($request->hasFile($inputName)){

            $this->deleteImage($oldPath);

            $image = $request->{$inputName};
            $ext   = $image->getClientOriginalExtension();
            $base_path = "public/uploads/" . $directory;
            $filename  = 'logo_'.uniqid() . "." . $ext;
            $image->storePubliclyAs($base_path, $filename);

            return "storage/uploads/" . $directory . "/" . $filename;

        }
    }

    /** Handle Delete File */
    public function deleteImage(string $path=null)
    {
        if(File::exists($path)){
            File::delete($path);
        }
    }


}
