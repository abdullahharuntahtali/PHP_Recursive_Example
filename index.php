<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function say($sayi){
        echo $sayi;
        if($sayi<10){
            say($sayi+1);
        }
    }

    //say(2);

    $kategoriler= 
    [
       [
        "id"=> 1,
        "parent" =>0,
        "ad"=>"Dersler"
       ],
       [
        "id"=> 2,
        "parent" =>0,
        "ad"=>"Güncel"
       ],
       [
        "id"=> 3,
        "parent" =>0,
        "ad"=>"Blog"
       ],
       [
        "id"=> 4,
        "parent" =>1,
        "ad"=>"PHP Dersleri"
       ],
       [
        "id"=> 5,
        "parent" =>1,
        "ad"=>"CSS Dersleri"
       ],
       [
        "id"=> 6,
        "parent" =>4,
        "ad"=>"Fonksiyonlar"
       ],
       [
        "id"=> 7,
        "parent" =>4,
        "ad"=>"Değişkenler"
       ]
    ];
    function kategoriListele($kategoriler,$parent=0){
        echo "<ul>";

        foreach($kategoriler as $kategori){
            
            if($kategori["parent"]==$parent){
                echo "<li>",$kategori["ad"];
                echo kategoriListele($kategoriler,$kategori["id"]);
                echo "</li>";
            }
        }
        echo "</ul>";
    }

    kategoriListele($kategoriler);
?>
</body>
</html>