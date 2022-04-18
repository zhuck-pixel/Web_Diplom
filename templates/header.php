<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet"  href="styles/bootstrap.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/main.css">

  <link rel="stylesheet" type="text/css" href="authorization/css/main.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap" rel="stylesheet"> 


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Creepster&family=Rubik+Beastly&display=swap" rel="stylesheet">

  <title>Hello, rock!</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php?page=index"><i class="fas fa-bahai"></i>Rock-Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0 top-menu">

          <li class="nav-item">
            <a class="nav-link" href="index.php?page=index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=catalog">Catalog</a>
          </li>
          

        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"><i class="far fa-user"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.php?page=success">Профиль</a></li>
              <li><a class="dropdown-item" href="index.php?page=register">Регистрация</a></li>
              <li><a class="dropdown-item" href="index.php?page=login">Авторизация</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#modal-cart">
              <i class="fas fa-shopping-cart"></i>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>