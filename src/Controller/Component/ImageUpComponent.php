<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\Email;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

class ImageUpComponent extends Component
{
	public $targetWidth =200;
	public $targetHeight =200;
	public function resizeUpload($file,$folderPath,$fileNewName,$targetWidth=200,$targetHeight =200)
	{
		$this->targetHeight=$targetHeight;
		$this->targetWidth=$targetWidth;

		if(is_array($file)) 
		{
			// pr($file);
			$file2=$file;
	        $file = $file['file']['tmp_name']; 
	        $sourceProperties = getimagesize($file);
	        $ext = pathinfo($file2['file']['name'], PATHINFO_EXTENSION);
	        $imageType = $sourceProperties[2];
	        switch ($imageType) {

	            case IMAGETYPE_PNG:
	                $imageResourceId = imagecreatefrompng($file); 
	                $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
	                imagepng($targetLayer,$folderPath. "thump_".$fileNewName.'.'. $ext);
	                break;

	            case IMAGETYPE_GIF:
	                $imageResourceId = imagecreatefromgif($file); 
	                $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
	                imagegif($targetLayer,$folderPath. "thump_".$fileNewName.'.'. $ext);
	                break;

	            case IMAGETYPE_JPEG:
	                $imageResourceId = imagecreatefromjpeg($file); 
	                $targetLayer = $this->imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
	                imagejpeg($targetLayer,$folderPath. "thump_".$fileNewName.'.'. $ext);
	                break;

	            default:
	                // echo "Invalid Image type.";
	                exit;
	                break;
	        }
	        move_uploaded_file($file, $folderPath. $fileNewName. ".". $ext);
	        return $fileNewName. ".". $ext;
	        // echo "Image Resize Successfully.";
    	}
	}
	public function imageResize($imageResourceId,$width,$height)
	{
	    $targetLayer=imagecreatetruecolor($this->targetWidth,$this->targetHeight);
	    imagecopyresampled($targetLayer,$imageResourceId,0,0,0,0,$this->targetWidth,$this->targetHeight, $width,$height);
	    return $targetLayer;
	}
}