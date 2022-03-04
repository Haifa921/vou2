<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileLibrary {


    //uploading public file

    public function upload_public_file($request,$request_file_name,$folder_name){

        $file =  $request->file($request_file_name)->store('public/'.$folder_name);
        $file = 'storage/'.substr($file, strlen('public/'));

        return $file;
    }



    // updating public file 

    public function update_file($request,$request_file_name,$old_file_path,$folder_name){

        $file = $request->file($request_file_name);

        if($file){
          
            $file =  $request->file($request_file_name)->store('public/'.$folder_name);
            $file = 'storage/'.substr($file, strlen('public/'));

            $this->delete_file($old_file_path);

            return $file;

        }

        
        return $file = $old_file_path;
        
    }


    // delete public file 

    public function delete_file($path){

        $file = substr($path, strlen('storage/'));
        
        Storage::delete('public/'.$file);
    }


}