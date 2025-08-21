<?php
echo "File upload in PHP";

if (isset($_POST['submit'])) {
    $permitted_extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        print_r($_FILES);
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $generated_file_name=time().'-'.$file_name;
        $destination_path = "uploads/{$generated_file_name}";
        $file_extention = explode('.', $file_name);
        $file_extention = strtolower(end($file_extention));
        echo "$file_name, $file_tmp_name, $destination_path, $file_extention";

        // validate file extension permitted
        if (in_array($file_extention, $permitted_extensions)) {
            if ($file_size < 1000000) {
                // ok, move from temp folder to /uploads
                // original file name and uploaded file name
                // must be DIFFERENT !, WHY?
                move_uploaded_file($file_tmp_name, $destination_path);
                $error_message = '<p style="color:green;">File upload successfully</p>';
            } else {
                $error_message = '<p style="color:red;">File too big</p>';
            }
        } else {
            $error_message = '<p style="color:red;">Invalid file type</p>';
        }
    } else {
        $error_message = '<p style="color:red;">No file selected, please try again</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Choose your image to upload
        <input type="file" name="upload">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php echo $error_message ?? '' ?>
</body>

</html>