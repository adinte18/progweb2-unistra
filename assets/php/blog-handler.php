<?php
include (__DIR__ . '/ORM.php');

$orm = new ORM();

session_start();

$orm->createBlogsTable();

echo json_encode($orm->getBlogs());

if (isset($_POST['new_post']))
{
    if (empty($_POST['title']) || empty($_POST['content'])) {
        header("location: /blog.php?error=vide");
    }
    else{
        $nom = $_SESSION['nom'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $categorie = $_POST['categorie'];
        $orm->insertToBlogsTable($nom, $title, $content, $categorie);
        header("location: /blog.php?info=added");
    }
    exit();
}

?>