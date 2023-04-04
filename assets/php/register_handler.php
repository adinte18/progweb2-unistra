<?php
include (__DIR__ . '/ORM.php');

$orm = new ORM();

$username = $_POST['username'];
$password = $_POST['password'];
$nom = $_POST['nom'];
$prenom =$_POST['prenom'];
$email    = $_POST['email'];

$orm->__construct();

$orm->createUsersTable();

$errors = array(
    'user_exists' => "Username already exists",
    'email_exists' => "Email already exists"
);

if ($orm->checkExistingUser($username) == true)
{
    header("location: ../../register.php?error=user_exists");
    exit();
}
else
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $orm->insertToTable(strip_tags($username), $nom, $prenom, $email, $hashed_password);

    if ($_SESSION['lang'] == "en")
    {
        header("location: /login.php?lang=en");
    }
    else header("location: /login.php?lang=fr");
    exit();
}