<?php

    if (isset($_POST['submit']))
    {

        $imgname = $_FILES["file"]["name"];
    	$img_basename = substr($imgname, 0, strripos($imgname, '.')); // get file extention
    	$img_ext = substr($imgname, strripos($imgname, '.')); // get file name
    	$imgsize = $_FILES["file"]["size"];
    	$allowed_img_types = array('.png','.jpg',);

    	if (in_array($img_ext,$allowed_img_types) && ($imgsize < 40000000))
    	{
    		$newimgname = md5($img_basename) . $img_ext;
    		if (file_exists("uploaded_imgs/" . $newimgname))
    		{
    			echo "This image has been uploaded before.";
    		}
    		else
    		{
    			move_uploaded_file($_FILES["file"]["tmp_name"], "uploaded_imgs/" . $newimgname);
    			echo "Image upload was successfull.";
    		}
    	}
    	elseif (empty($img_basename))
    	{
    		echo "Please select an image to upload.";
    	}
      //image size limit
    	elseif ($imgsize > 40000000)
    	{
    		echo "The image you are trying to upload is too large.";
    	}
    	else
    	{
    		echo "Only these file types are allowed for upload: " . implode(', ',$allowed_img_types);
    		unlink($_FILES["file"]["tmp_name"]);
        }

}

?>
