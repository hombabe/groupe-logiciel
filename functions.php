<?php

/**
 * l'image uploader est stoker dans le dossier productsPics il sera surment lourd si on cree trop de produits 
 * @param array $file 
 * @return string|false 
 */
function storeUploadedImage($file) {
    $targetDir = $_SERVER['DOCUMENT_ROOT'] . "/groupe logiciel/public/productsPics/";
    
 
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($file["name"]);
    $targetFile = $targetDir . $fileName;
    
 
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Seuls les fichiers JPG, JPEG, PNG & GIF sont autorisés.";
        return false;
    }

  
    if (move_uploaded_file($file["tmp_name"], $targetFile)) {
        return "public/productsPics/" . $fileName;
    } else {
        echo "Désolé, une erreur est survenue lors de l'upload de votre fichier.";
        return false;
    }
}

/**
 * 
 * @param string $fileName 
 * @return string 
 */
function getImagePath($fileName) {
    return "public/productsPics/" . $fileName;
}