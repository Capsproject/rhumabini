<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['sturecmsaid'] == 0)) {
    header('location:logout.php');
} else {
    if (isset($_POST['submit'])) {
        $stuid=$_POST['stuid']; // Get the patient ID
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        // Define the directory where uploaded files will be stored
        $upload_dir = 'uploads/';

        // Generate a unique file name to prevent overwriting
        $new_file_name = uniqid() . '.' . $file_ext;

        // Move the file to the upload directory
        move_uploaded_file($file_tmp, $upload_dir . $new_file_name);

        // Insert file information into a database table (you need to create this table)
        $query = "INSERT INTO files (StuID, file_name, uploaded_date) VALUES ('$StuID', '$new_file_name', NOW())";
        $result = mysqli_query($con, $query);

        if ($result) {
            // File uploaded and information saved in the database
            echo "File uploaded successfully!";
        } else {
            // Handle the case where the file upload or database insert failed
            echo "File upload failed!";
        }
    }
}