<?php

$discs = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'year' => 1972,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'And Justice for All',
        'author' => 'Metallica',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'Hard Wired',
        'author' => 'Dave Weckl',
        'year' => 1994,
        'poster' => 'https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'year' => 1987,
        'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg',
        'genre' => 'Pop'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Spotify.png" alt="Spotify">
    </header>

    <main>
        <div class="container-big">
            <div class="row">
                <?php
                    foreach($discs as $disc){
                        echo "<div class='disc'>";
                            echo "<img src=".$disc['poster'].">";
                            echo "<div class='text'>";
                                echo "<h2>".$disc['title']."</h2>";
                                echo "<div class='author-year'>";
                                    echo "<span class='author'>".$disc['author']."</span>";
                                    echo "<span class='year'>".$disc['year']."</span>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    }
                ?>

                
            </div>
        </div>
    </main>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body{
    font-family: 'Roboto', sans-serif;
}

header{
    padding: 10px;
    background-color: #2e3a46;
}

header img{
    height: 50px;
}

main{
    display: flex;
    justify-content: center;
    background-color: #1e2d3b;
}

.container-big{   
    padding: 20px; 
    display: flex;
    justify-content: center;
}

.row{    
    width: 70%;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.disc{
    margin: 10px;
    background-color: #2e3a46;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    width: 18%;
    padding: 43px;
}

.disc img{
    height: 170px;
}

.text{
    color: #fff;
    text-align: center;
    margin-top: 10px;
}

.author-year{
    color: #7d7c74;
    margin-top: 10px;
}

.year{
    margin-top: 5px;
    display: block;
}



</style>