<?php
include (__DIR__ . '/ORM.php');

session_start();

$orm = new ORM();

$orm->createAppointmentsTable();

$date = $_POST['date'];
$service = $_POST['coupures'];
$nom = $_SESSION['nom'];
$email = $_SESSION['email'];

$orm->insertToAppointmentsTable($nom, $email, $service, $date);

if (isset($_POST['edit']))
{
    $id = $_POST['id'];
    $new_date = $_POST['new_date'];
    $new_service = $_POST['new_service'];
    $edit = $_POST['edit'];

    if (!isset($new_date))
    {
        header("location: /profile.php?error=date_not_set");
        exit();
    }

    $orm->editAppointment($id ,$new_date, $new_service);
}

if (isset($_POST['delete']))
{
    $id = $_POST['id'];
    $orm->deleteAppointment($id);
}

header("location: /profile.php");

?>