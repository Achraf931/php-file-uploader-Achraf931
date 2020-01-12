<?php
if (!empty($_FILES)){
    $uploader = new App\Models\FileUploader();
    $uploader->setFileData($_FILES['image']);
    $uploader->setStoreName($_POST['filename'] . '.' . $uploader->getFileExtension());
    $uploader->upload();

    echo $twig->render('index.html',['filename'=>$uploader->filename, 'pageName' => 'sending', 'img' => $_POST['filename'] . '.' . $uploader->getFileExtension()]);
} else{
    echo $twig->render('index.html', ['pageName' => 'form']);
}
