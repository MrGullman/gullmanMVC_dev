<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo URLROOT . "/public/img/bkw.png" ?>" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/general_style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <!-- <title><?php echo SITENAME; echo $data['title']; ?></title> -->
    <title><?php echo (isset($data['title'])) ? $data['title'] . " | " . SITENAME : SITENAME;  ?></title>
    <?php if(isset($data['headTags'])){foreach($data['headTags'] as $tag){echo $tag;}} ?>
</head>

<body>

<?php

    // dnd($_SERVER['REDIRECT_STATUS']);

?>

    <!-- Mind Content -->
    <main id="main-content">