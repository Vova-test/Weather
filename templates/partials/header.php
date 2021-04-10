<!DOCTYPE html>
<html lang="<?php echo $lang['name']; ?>">
<head>
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/weather.css">
    <link rel="stylesheet" href="/css/weather_.css">

    <title><?php echo $lang['project']; ?></title>
</head>
<body>
<div class="overlay" id="app">
    <div class="fixed-top">
        <nav class="navbar navbar-expand-sm navbar-dark bg-nav1">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <a class="navbar-brand" href="/">
                        <?php echo $lang['project']; ?>
                    </a>
                </div>
                <div class="mx-auto order-0">
                    <div class="input-group search-group">
                        <input type="search" id="Search" class="form-control rounded" placeholder="<?php echo $lang['search']; ?>"/>
                        <span class="input-group-text border-0 bg-nav1 text-light" id="search-addon">
                                    <i class="fa fa-search"></i>
                        </span>
                        <div class="dropdown-menu city-menu" aria-labelledby="search" id="cityCase">
                            <a class="dropdown-item city-item  disabled" href="#" id="not-city"><?php echo $lang['searchMessage']; ?></a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <?php echo $lang['title']; ?>
                            </a>
                            <div id="langCase" class="dropdown-menu language-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php foreach (LANGUAGES as $value ): ?>
                                    <?php if ( $value === $lang['title'] ) continue; ?>
                                    <a class="dropdown-item language-item" href="#" ><?php echo $value; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="navbar-dark bg-nav2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><?php echo $lang['today']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="#"><?php echo $lang['tenday']; ?></a>
                </li>
            </ul>
        </div>
    </div>
    <div class ="margin-menu"></div>