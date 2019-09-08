<?php

$target_dir = "Resources/Views/Uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file( $_FILES['fileToUpload']['name'], $target_file );
$uploadOk = 1;





?><?php /**PATH C:\xampp\htdocs\Laravel\blog\ps1919\resources\views/upload.blade.php ENDPATH**/ ?>