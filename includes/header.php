<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?>Shine Like Christ</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php if ($homeLink == '') { echo './style/index.css'; } else { echo $cssIndexURL; } ?>">
    <link rel="shortcut icon" href="<?php if ( $homeLink == '') { echo './favicon.ico' ;} else { echo $webIcon; } ?>" type="image/x-icon">
</head>
<body>

<?php
    if ($homeLink == '') {
        require_once "./includes/navigation-header.php";
    } else {
        require_once "../includes/navigation-header.php";
    }
?>

<div class="main">