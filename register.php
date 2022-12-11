<?php
    require_once 'dbConfig.php';
    $statusMsg = '';
    if (isset($_POST["submit"])) {
        $status = 'error';
        if (!empty($_FILES["image"]["name"])) {
            // Get file info 
            // $fileName = basename($_FILES["image"]["name"]);
            // $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            $file = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "./Storage/";
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $path_filename_ext = $folder . $filename . "." . $ext;

            // Allow certain file formats 
            // $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            // if (in_array($fileType, $allowTypes)) {

            if(move_uploaded_file($tempname, $path_filename_ext)){
                $name = $_POST["name"];
                $birthdate = $_POST["birthdate"];
                // var_dump($folder);
                $address = $_POST["address"];
                $credit_card = $_POST["credit_card"];
                $expiration = $_POST["expiration"];
                $cvv = password_hash($_POST["cvv"], PASSWORD_DEFAULT);


                $imgContent = $path_filename_ext;
                $insert = "INSERT INTO user (name,birthdate,address,profile_picture,credit_card,expiration_date,cvv,created_at) VALUES ('$name', '$birthdate', '$address','$imgContent','$credit_card','$expiration','$cvv',NOW())";
                // $prepare = mysqli_query($db, $insert);
                $prepare = $db->query($insert);

                // var_dump($prepare);
                if ($prepare) {
                    $status = 'success';
                    $statusMsg = "Registration Complete";
                } else {
                    $statusMsg = "Details was not saved, please try again.";
                }
            }else{
                $statusMsg = 'Image upload failed';
            }
                
            // Insert image content into database 

           
            
        } else {
            $statusMsg = 'Please select an image file to upload.';
        }
    }



?>