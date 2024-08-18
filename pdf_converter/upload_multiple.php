<?php
// Check if files are uploaded
if (isset($_FILES['files'])) {
    // Set the folder where the files will be uploaded
    $folder = "uploads/";

    $names = $_FILES['files']['name'];
    $tmp_names = $_FILES['files']['tmp_name'];

    $upload_data = array_combine($tmp_names, $names);

    foreach ($upload_data as $temp_folder => $file) {
        move_uploaded_file($temp_folder, $folder . $file);
    }

    header("location: convert.html");
    exit(); 
}
?>

