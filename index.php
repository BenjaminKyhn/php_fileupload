<!DOCTYPE html>
<html>
<body>

<form action="fileupload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <input type="submit" value="Upload Image" name="submit">
</form>

<h4>List of files uploaded to the server:</h4>
<?php

$fileList = glob('uploads/*');
foreach($fileList as $filename){
    if(is_file($filename)){
        echo $filename, '<br>';
    }
}
?>

</body>
</html>