<?php
header ("Content-Type: text/html; charset=utf-8");
abstract class ParentForType
{
   public $price;
   public $title;

   public function __construct($title, $price)
   {
       $this->price=$price;
       $this->title=$title . '(print edition)';
   }
   public function getPrice()
   {
       return $this->price;
   }
   public function getTitle()
   {
       return $this->title;
   }
}

interface ColorInterface
{
    public function setColor($color);
    public function getColor();
}

interface TvGetters
{
    public function getType();
    public function getResolution();
    public function getDiagonal();
}

interface InfoAboutPen
{
    public function aboutPen();
}

interface CreateDuck
{
    public function __construct($habitat);
}

interface getGoods
{
    public function getGoods();
}


class Car extends ParentForType implements ColorInterface
{
    private $color;
    public function setColor($color)
    {
      $this->color = $color;
      return $this;
    }
    public function getColor()
    {
        return $this->color;
    }
}

$BMVi8 = new Car('red');
$MINICooper = new Car('grey');


class Tv extends ParentForType implements TvGetters// хмм не понимаю почему здесь выдает ошибку
{
    private $markamodel;
    private $resolution;
    private $diagonal;
    public $price=19999;
    public function __construct($markamodel, $resolution, $diagonal)
    {
        $this->markamodel = $markamodel;
        $this->resolution = $resolution;
        $this->diagonal = $diagonal;
    }
    public function getMarkamodel()
    {
        return $this->markamodel;
    }
    public function getResolution()
    {
        return $this->markamodel;
    }
    public function getDiagonal()
    {
        return $this->diagonal;
    }
}

$tvSony=new Tv("Sony KD-65XE9305","HDR", 46);
$tvLG=new Tv("LG 43UH610V","4K",49);

class Pen extends ParentForType implements InfoPen
{
    public $marka;
    public function aboutPen()
    {
        return $this->marka . ' - престижная шариковая ручка из коллекции' . $this->collection . ', цвет ручки' . $this->color;
    } 
}
$penParker = new BallpointPen();
$penParker->marka = 'Parker';
$penParker->collection = 'Jotter';
$penParker->color = 'black';
$penPero = new BallpointPen();
$penPero->marka = 'Pero';
$penPero->collection = 'Caran';
$penPero->color = 'black';

class Duck extends ParentForType implements InfoDuck
{
    private $rich;
    private $habitat;
    public $price = false; 
    public function __construct($title, $price, $habitat)
    {
        parent::__construct($title, $price);
        $this->habitat=$habitat;
    }
    public function getHabitat()
    {
    return $this->habitat;
    }
}
$duckEn = new Duck('Scrooge McDuck ', 1000000, 'Disney');
$duckRu = new Duck('Drake', 100, 'Altai' );

class Goods extends ParentForType implements getGoods
{
    public $name;
    public $category;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . ' ' . $this->price;
    }
}
$goodsCrisp = new Goods();
$goodsCrisp->name = 'Lays';
$goodsCrisp->category = 'FoodFastFood';
$goodsCrisp->price = 69;
$goodsPhone = new Goods();
$goodsPhone->name = 'Sony X';
$goodsPhone->category = 'FlagshipFon';
$goodsPhone->price = 40000;

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<!--пока не вывожу, потому что выдает ошибку на сервере строка 94 ...не знаю как исправить -->
</body>
</html>
