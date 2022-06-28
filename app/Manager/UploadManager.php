<?php

namespace App\Manager;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadManager
{
    private $upload;
    public function __construct(Upload $upload)
    {
        $this->upload=$upload;
    }




    public function upload($request,$id){
        $images=$request->file('images');
        $destinationPath = 'images/portfolio';
        foreach ($images as $files) {
            $upload=new Upload();
            $file_name =$files->store($destinationPath.'/'.$id, 'public');
            $upload->portfolio_id=$id;
            $upload->image=$file_name;
            $upload->save();
        }
    }

    public function update($request,$id){
        $images=$request->file('images');
        $destinationPath = 'images/portfolio';
        foreach ($images as $files) {
            $image=Upload::where('portfolio_id',$id)->where('image','$files')->get();
            if ($image&&file_exists(storage_path($destinationPath.'/'.$id.'/'.$files))) {
                continue;
            }
            elseif($image&&!file_exists(storage_path($destinationPath.'/'.$id.'/'.$files)))
                {
                 $file_name =$files->store($destinationPath.'/'.$id, 'public');
                 continue;
                }
            elseif (!$image&&file_exists(storage_path($destinationPath.'/'.$id.'/'.$files))){
                \Storage::delete('public/' .$destinationPath.'/'.$id.'/'.$files );
                }
            $upload=new Upload();
            $file_name =$files->store($destinationPath.'/'.$id, 'public');
            $upload->portfolio_id=$id;
            $upload->image=$file_name;
            $upload->save();

        }

    }



}
