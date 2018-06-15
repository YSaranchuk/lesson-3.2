<?php
header ("Content-Type: text/html; charset=utf-8");
abstract class ParentForType
{
    public function getPrint()
    {
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }
}
interface DiskontInterface
{
    public function __construct($title, $price);
    public function setDiskont($diskont);
}

abstract class Product extends ParentForType implements DiskontInterface
{
    protected $title;
    protected $price;
    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
    protected $diskont;
    public function setDiskont($diskont) 
    {  
        $result = $price - ($price * $diskont);
        $this->result = $result;
        print_r($result); // подскажите что я делаю не так , почему формула не выводит цену с дисконтом...
    }
}

 
interface ColorInterface
{
    public function setColor($color);
    public function getColor();
}
interface TvGetters
{
    public function getResolution();
    public function getDiagonal();
}
interface InfoPen
{
    public function aboutPen();
}
interface InfoDuck
{
    public function __construct($title, $price);
    public function getHabitat();
}
interface getGoods
{
    public function getGoods();
}
class Car extends Product implements DiskontInterface
{
    protected $diskont = 0.1;
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
$BMVi8 = new Car ('BMVI8', 2000000);
$MINICooper = new Car ('MINICooper', 1500000);
$BMVi8 -> setColor('red');
$MINICooper -> setColor('black');
$BMVi8 -> setDiskont(0.1);

class Tv extends Product implements DiskontInterface 
{   
    private $resolution;
    public function getResolution()
    {
        return $this->resolution;
    }
    private $diagonal;
    public function getDiagonal()
    {
        return $this->diagonal;
    }
}

$tvSony=new Tv("Sony KD-65XE9305","HDR", 46);
$tvLG=new Tv("LG 43UH610V","4K",49);
class BallpointPen extends Product implements InfoPen
{
    public $marka;
    public function aboutPen()
    {
        return $this->marka . ' - престижная шариковая ручка из коллекции' . $this->collection . ', цвет ручки' . $this->color;
    } 
}
$penParker = new BallpointPen('Parker', 'Jotter', 'black');
$penPero = new BallpointPen('Pero', 'Caran', 'black');
class Duck extends Product implements InfoDuck
{
    protected $title;
    protected $price;
    protected $habitat;
    public function __construct($title, $price)
    {
        $this->title=$title;
        $this->price=$price;
    }
    public function getHabitat()
    {
        $this->habitat = $habitat;
        return $this->habitat;
    }
}
$duckEn = new Duck('Scrooge McDuck ', 1000000);
$duckRu = new Duck('Drake', 100);
$duckEn -> getHabitat('Disney');
$duckRu -> getHabitat('Altai');

class Goods extends Product implements getGoods
{
    public $name;
    public $category;
    public function getGoods()
    {
        echo $this->name . ' ' . $this->category . ' ' . $this->price;
    }
}
$goodsCrisp = new Goods('Lays','FoodFastFood', 69);
$goodsPhone = new Goods('Sony X', 'FlagshipFon', 40000);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body>
<?php $BMVi8->getPrint(); ?>

</body>
</html>
