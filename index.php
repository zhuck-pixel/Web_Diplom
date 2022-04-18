<?php 
	session_start();
	require("templates/header.php");
 ?>

  <?php
 	require('connect.php');

if(!isset($_SESSION['sql'])){
    $_SESSION['sql'] = "SELECT * from `products`";
}
$sql_text = $_SESSION['sql'];

$sql= $link->query($sql_text);

$page = $_GET['page'];
if (!isset($page)) {
    require('templates/main.php');
}elseif ($page == 'index') {
    require('templates/main.php');
}elseif($page == 'catalog'){
    require('templates/catalog.php'); 
}
	elseif ($page == 'tovar_card') {
    $idg = $_GET['id'];
    $good = [];
    foreach ($sql as $product) {
        if ($product['id'] == $idg) {
            $good = $product;
            break;
        }
    }
    require('templates/tovar_card.php');
} 


elseif ($page == 'model_cat') {
    $idg = $_GET['id_cat'];
    if ($idg == 0) {
        $_SESSION['sql'] = "SELECT * FROM `products`";
    } else {
        $_SESSION['sql'] = "SELECT * FROM `products` WHERE `category` = $idg ";
    }

    $sql_text = $_SESSION['sql'];
    $sql = $link->query($sql_text);
    require('templates/catalog.php');
} 
elseif ($page == 'sort') {
    $idg = $_GET['id_sort'];
    if ($idg == 1) {
        $sql_text .= " ORDER BY `name`";
    }
    if ($idg == 2) {
        $sql_text .= " ORDER BY `name` DESC";
    }
    if ($idg == 3) {
        $sql_text .= " ORDER BY `price` ASC";
    }
    if ($idg == 4) {
        $sql_text .= " ORDER BY `price` DESC";
    }
    $sql = $link->query($sql_text);



    require('templates/catalog.php');
    }
    elseif ($page == 'login') {
    require('authorization/index.php');
} elseif ($page == 'register') {
    require('authorization/register.php');
}elseif ($page == 'success') {
    require('authorization/profile.php');
}

 ?>

 <?php 
	require("templates/footer.php");
 ?>