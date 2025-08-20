<?php
echo "Superglobals in PHP";
 var_dump($_SERVER);

echo "<br>";
print_r($_SERVER);
echo "<br>";
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br><br>";

// we will send data through url or form using $_GET / $_POST
// http://localhost:8080/superglobals.php?name=tuong&age=18
// echo $_GET['name'];
// echo $_GET['age'];

if (isset($_GET['name'])) {
    echo $_GET['name'];
}
if (isset($_GET['age'])) {
    echo $_GET['age'];
}

$name = $_GET['name'] ?? ''; // coalescing
$age = $_GET['age'] ?? '';
echo $name;
echo $age;

$email = $_POST['email'] ?? ''; // coalescing
$password = $_POST['password'] ?? '';
echo $email;
echo $password;

// Nếu trường hợp hacker cố tình chèn đoạn script: <script>alert('haha')</script>
// Hệ thống sẽ thực thi đoạn script đó => rất nguy hiểm => phải dùng htmlspecialchars()
$name = htmlspecialchars($_GET['name'] ?? ''); // coalescing
$age = htmlspecialchars($_GET['age'] ?? '');
echo $name;
echo $age;

$email = htmlspecialchars($_POST['email'] ?? ''); // coalescing
$password = htmlspecialchars($_POST['password'] ?? '');
echo $email;
echo $password;

// Có thể thay thế bằng filter_var()
$name = filter_var($_GET['name'] ?? '',FILTER_SANITIZE_SPECIAL_CHARS); // coalescing
$age = filter_var($_GET['age'] ?? '',FILTER_SANITIZE_SPECIAL_CHARS);
echo $name;
echo $age;

$email = filter_var($_POST['email'] ?? '',FILTER_SANITIZE_SPECIAL_CHARS); // coalescing
$password = filter_var($_POST['password'] ?? '',FILTER_SANITIZE_SPECIAL_CHARS);
echo $email;
echo $password;
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
        <button type="submit">submit</button>
    </form>
</body>

</html>