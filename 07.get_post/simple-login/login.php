<?php
// Melakukan pengecekan apakah button sudah ditekan
if (isset($_POST["submit"])){
    // Melakukan pengecekan terhadap username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "rahasia"){
        // Jika benar akan di redirect ke halaman admin
        header("Location: admin.php");
        exit();
    // Jika salah, menampilkan pesan kesalahan
    } else {
        $salah = true;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Page</h1>

<?php if (isset($salah)): ?>
    <p style="color: red; font-style: italic;"> username dan password salah! </p>
<?php endif; ?>

<ul>
    <form action="admin.php" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </li>
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
</ul>

</body>
</html>
