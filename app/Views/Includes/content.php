<?php

if (isset($_GET["content"])) {
   require_once APPROOT . './Views/' . $_GET["content"] . '.php';
    
} else {
    // include('./Views/homepage.php');
    require_once APPROOT . './Views/homepage.php';
}?>
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/navbar.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/aboutmbo.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/navbar.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/home.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/survey.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/opleiding.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/plattegrond.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/navigatie.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/admindashboard.css">
<link rel="stylesheet" href="<?= URLROOT ?>/public/css/login.css">







