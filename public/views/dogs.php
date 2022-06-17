<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/dogs.css">

    <script src="https://kit.fontawesome.com/70bd267ff8.js" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once __DIR__.'/../../public/views/sideBar.php'; ?>

    <section class="home">
        <div class="card-wrapper">
            <?php foreach ($dogs as $dog): ?>
            <div class="card">
                <div id="card-image" class="card-image" style=" background-image: url('public/uploads/<?php echo $dog->getImage(); ?>');">
                </div>
                <div class="card-text">
                    <span id="dog_breed" class="dog_breed"><?= $dog -> getBreed() ?></span>
                    <span id="dog_gender" class="dog_gender"><?= $dog -> getGender() ?></span>
                    <h2><?= $dog -> getDogName() ?></h2>
                    <p><?= $dog -> getDescription() ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>



<script type="text/javascript" src="./public/js/sideBar.js" defer></script>
<script type="text/javascript" src="./public/js/search.js" defer></script>

</body>


<template id="dog-template">
<div class="card">
    <div class="card-image" style="">
    </div>
    <div class="card-text">
        <span class="dog_breed"></span>
        <span class="dog_gender"></span>
        <h2></h2>
        <p></p>
    </div>
</div>
</template>
