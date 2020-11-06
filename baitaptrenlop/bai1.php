<form method="post">
    <div class="Login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="passwork">
        <input type="submit" value="Sign in">
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin" && $password === "admin") {
        echo "<h2>Hello " .$username. "</span> ban den voi website</h2>";
    } else{
        echo "<h2>Login Error</span></h2>";
    }
}
?>