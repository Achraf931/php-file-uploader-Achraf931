<?php

namespace App\Models;
class FileUploader
{
    public $filename;

    function upload()
    {
        $uploads_dir = 'assets/img';
        $tmp_name = $_FILES['image']["tmp_name"];
        $name = $this->filename;
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }

    function setFileData($image)
    {
        $allowed_extensions = ['jpg', 'jpeg', 'png'];
        $ext = $this->getFileExtension();
        if ($image['size'] > 23456789876) {
            return "Image trop lourde";
        } else if (!in_array($ext, $allowed_extensions)) {
            return "Ce nest pas une image";
        }
    }


    function getFileExtension()
    {
        $path = $_FILES['image']['name'];
        return $ext = pathinfo($path, PATHINFO_EXTENSION);
    }

    function setStoreName($name)
    {
        if (!empty($_POST['filename'])) {
            $this->filename = $name;
        }
    }
}
