<?php

class Movie {

    public $author_name;
    public $title;
    public $year;
    public $img;

    function __construct($author_name, $_title, $_year, $_img) {
        $this->author_name = $author_name;
        $this->title = $_title;
        $this->year = $_year;
        $this->img = $_img;
    }

    public function getName() {
        return $this->author_name;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getYear() {
        return $this->year;
    }

    public function getImage() {
        return $this->img;
    }
};

$ghost = new Movie('Ivan Reitman', 'Ghost', 1984, 'https://images-na.ssl-images-amazon.com/images/I/81QmhZQS3hL._SY445_.jpg' );
var_dump($ghost);

echo $ghost->getName();

echo $ghost->getTitle();

echo $ghost->getYear();

echo  $ghost->getImage();

echo $ghost->title = 'test';

$small_soldier = new Movie('Walter F. Parkes', 'small_soldier', '1998', 'https://images-na.ssl-images-amazon.com/images/I/51OJz3YC6SL._SY445_.jpg');
var_dump($small_soldier);

echo $small_soldier->title;

echo $small_soldier->author_name;

echo $small_soldier->year;

echo $small_soldier->img;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="header">
            <img src="<?php echo $small_soldier->getImage()?>" alt="">
        </div>
        <div class="body">
            <div class="title">
                <h3>
                    <?php echo $small_soldier->getTitle() ?>
                </h3>
            </div>
            <div class="author">
                <p><?php echo $small_soldier->getName() ?></p>
            </div>
            <div class="year">
                <p><?php echo $small_soldier->getyear() ?></p>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="header">
            <img src="<?php echo $ghost->getImage()?>" alt="">
        </div>
        <div class="body">
            <div class="title">
                <h3>
                    <?php echo $ghost->getTitle() ?>
                </h3>
            </div>
            <div class="author">
                <p><?php echo $ghost->getName() ?></p>
            </div>
            <div class="year">
                <p><?php echo $ghost->getyear() ?></p>
            </div>
        </div>
    </div>
</div>


</body>
</html>
