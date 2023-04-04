<?php
include('assets/php/ORM.php');

$orm = new ORM();

session_start();

if (!isset($_SESSION['username'])) {
    header("location: /login.php");
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css" type="text/css">
    <script src="https://kit.fontawesome.com/fc27174e98.js" crossorigin="anonymous"></script>
    <title>Blogs</title>
</head>
<body>

<?php include "header.php" ?>

<div id="myModal2" class="modal">
    <span class="close2">&times;</span>
    <div class="modal-content">
        <form action="/assets/php/blog-handler.php" method="post" id="post">

            <div class="form-field">
                <label for="blog_title"></label>
                <input id = "blog_title" type="text" placeholder="Blog Title" name="title">
            </div>

            <div class = "form-field">
                <label for = "content"></label>
                <textarea  id = "content" name="content" placeholder = "Your content here"></textarea>
            </div>

            <div class = "form-field">
                <label for = "option">
                    <select name = "categorie" id = "categories">
                        <option value = "General info">General info</option>
                        <option value = "Offtop">Offtop</option>
                        <option value = "Important">Important</option>
                    </select>
                </label>
            </div>

            <input class="button" type="submit" value="Post" name="new_post">
        </form>
    </div>
</div>


<div class="blog-page">
    <div class="content">

        <?php
        if (isset($_GET['info']) && $_GET['info'] == "added") {
            echo "<h3 id='success'> 
                    <span id='closebtn'>&times;</span> 
                    <strong>Success.</strong> Post added successfully 
                   </h3>";
        }

        if (isset($_GET['error']) && $_GET['error'] == "vide")
        {
            echo "<h3 id = 'error'>
                    <span id='closebtn2'>&times;</span> 
                    <strong>Oops</strong>, seems like you did submit an empty form. Please be kind enough to fill it up.
                   </h3>";
        }
        ?>

        <h3>Blogs</h3>
        <button class="button" id="myBtn2"> + Create a new post</button>
    </div>

    <div class="blogs" id="blog_div"></div>
</div>

<script src="assets/js/blogAjax.js"></script>
<script src = "assets/js/header.js"></script>
</body>
</html>
