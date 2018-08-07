<?php

namespace App\Services;

use Image;
use Storage;

class ImageResize {

  /**
   * Save images and resize
   * 
   * @param Request->image image send through th form 
   * @return string image name
   */
  public function imageStore($image){
    $imageName = $image->store('','imgProjet');
    $crop = Image::make(Storage::disk('imgProjet')->path($imageName))->resize(1000,null, function($param){
      $param->aspectRatio();
      $param->upsize();
    });;
    $crop->save();
    return $imageName;
  }
}