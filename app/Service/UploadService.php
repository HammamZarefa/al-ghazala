<?php

namespace App\Service;



use App\Manager\UploadManager;
use Illuminate\Http\Request;

class UploadService
{
    private $uploadManager;
    public function __construct( UploadManager $uploadManager)
    {
        $this->uploadManager = $uploadManager;
    }

    public function upload($requset,$id ){

         UploadManager::upload($requset,$id);
    }

    public function update($requset,$id){
        return  UploadManager::update($requset,$id);
    }
}
