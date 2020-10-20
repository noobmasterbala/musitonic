<?php
        $filename = array();
        foreach ($_FILES as $filename){
            // echo $filename['name'];echo "\n";
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($filename["name"]);
            $uploadOk = 1;
            //$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = $filename["tmp_name"];
            $ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed = array('wav');
            if(in_array($ext,$allowed)) {
                $uploadOk = 1;
                if (move_uploaded_file($filename["tmp_name"], $target_file)) {
                    echo "1";
                    echo "The file ". basename( $filename["name"]). " has been uploaded.\n";
                } else {
                    echo "0\n";
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "0";
                echo "This File Format is not Accepted for the following File:<b>";
                echo $filename["name"];
                echo "</b> Please convert and upload the file as WAV format\n";
                $uploadOk = 0;
            }
        }

?>