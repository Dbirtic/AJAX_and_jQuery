<?php

echo 'Processing...';

// Check for GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '. $_GET['name'];
}
if(isset($_POST['name'])){
    echo 'Post: Your name is: '. $_POST['name'];
}