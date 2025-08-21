<?php
/*
            session are stored in the server
            so it can used across multiple pages
            */
session_start();

// Khi echo thì echo chạy → PHP gửi dữ liệu ra trình duyệt → headers bị khoá → session_start() không thể khởi tạo được nữa.
// Bắt buộc phải session_start() trước khi echo (dữ liệu ra)
// Trong PHP, cookie và header và session phải được gửi trước bất kỳ dữ liệu nào ra trình duyệt.
//echo "Sessions in PHP";


if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS); // coalescing
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    if ($email == 'admin@gmail.com' && $password == '123') {
        $_SESSION['email']=$email;
        // redirect to another page
        header('Location: ./dashboard.php');
    }else{
        echo "Incorrect email/password";
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
    <!-- $_SERVER['PHP_SELF'] = superglobals.php -->
    <h1>Phương thức GET</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <div>
            <label for="name">Your name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="text" name="age">
        </div>
        <button type="submit">submit</button>
    </form>

    <h1>Phương thức POST</h1>
    <h3>Login to your account</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" value="submit" name="submit">submit</button>
    </form>
</body>

</html>