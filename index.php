<?php

class Dischi{

    public $name;

    public $singer;

    public $year;

    public $songNums;

    public $language;

    public function __construct($name, $singer, $year, $songNums, $language){
        $this->name = $name;
        $this->singer = $singer;
        $this->year = $year;
        $this->songNums = $songNums;
        $this->language = $language;
    }
}

$cd1 = new Dischi('Sempiternal', 'Bring Me The Horizon', '2013', '11', 'US');
$cd2 = new Dischi('Bangarang', 'Skrillex', '2012', '7', 'US');
$cd3 = new Dischi('Meteora', 'Linkin Park', '2003', '13', 'US');
$cd4 = new Dischi('Domani smetto', 'Articolo 31', '2002', '13', 'IT');

echo 'CD NUMBER 1<br><br>Album Name: ' . $cd1->name . '<br>Singer/Group: ' . $cd1->singer . '<br>Year: ' . $cd1->year . '<br>Number of songs: ' . $cd1->songNums . '<br>Language: ' . $cd1->language . '<br><br>';
echo 'CD NUMBER 2<br><br>Album Name: ' . $cd2->name . '<br>Singer/Group: ' . $cd2->singer . '<br>Year: ' . $cd2->year . '<br>Number of songs: ' . $cd2->songNums . '<br>Language: ' . $cd2->language . '<br><br>';
echo 'CD NUMBER 3<br><br>Album Name: ' . $cd3->name . '<br>Singer/Group: ' . $cd3->singer . '<br>Year: ' . $cd3->year . '<br>Number of songs: ' . $cd3->songNums . '<br>Language: ' . $cd3->language . '<br><br>';
echo 'CD NUMBER 4<br><br>Album Name: ' . $cd4->name . '<br>Singer/Group: ' . $cd4->singer . '<br>Year: ' . $cd4->year . '<br>Number of songs: ' . $cd4->songNums . '<br>Language: ' . $cd4->language;