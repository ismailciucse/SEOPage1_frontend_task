<?php
    //Connection
    define('LOCALHOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'frontend_task');
    $conn = mysqli_connect(LOCALHOST,USERNAME,PASSWORD) or die(mysqli_error());
    $db_select = mysqli_select_db($conn,DATABASE) or die(mysqli_error());
    
// Count total files
$countfiles = count($_FILES['files']['name']);

// Upload Location
$upload_location = "uploads/";

// To store uploaded files path
$files_arr = array();

// Loop all files
for($index = 0;$index < $countfiles;$index++){

     if(isset($_FILES['files']['name'][$index]) && $_FILES['files']['name'][$index] != ''){
           // File name
           $filename = $_FILES['files']['name'][$index];

            // File path
            $path = $upload_location.$filename;

            // Upload file
            if(move_uploaded_file($_FILES['files']['tmp_name'][$index],$path)){
                $files_arr[] = $path;
            }
            
            $sql = "UPDATE `upfiles` SET `total_files` = '$countfiles' WHERE `id`=1";
            mysqli_query($conn, $sql);
     }
}

echo json_encode($files_arr);
die;