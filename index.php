<?php

// definisco la prima classe 'Discs'
class Discs{

    public $name;

    public $singer;

    public $year;

    public $songNums;

    public $language;

    // definisco il costruttore passandogli i parametri necessari
    public function __construct($name, $singer, $year, $songNums, $language){

        $this->name = $name;
        $this->singer = $singer;
        $this->year = $year;
        $this->songNums = $songNums;
        $this->language = $language;

    }
}

// definisco la seconda classe 'DiscsShop'
class DiscsShop{

    public $name;

    // definisco privato l'array di dischi per potervi accedere solo tramite metodo
    private $discs = [];

    // definisco il costruttore passandogli il $name come parametro
    public function __construct($name){
        $this->name = $name;
    }

    // imposto una funzione (setter) per pushare un disco nell'array di dischi
    public function addDisc(Discs $disc){
        $this->discs[] = $disc;
    }

    // imposto una funzione (getter) per farmi ritornare l'array di dischi
    public function getDiscs(){
        return $this->discs;
    }
}

// definisco i cd dalla classe 'Discs'
$cd1 = new Discs('Sempiternal', 'Bring Me The Horizon', '2013', '11', 'EN');
$cd2 = new Discs('Bangarang', 'Skrillex', '2012', '7', 'EN');
$cd3 = new Discs('Meteora', 'Linkin Park', '2003', '13', 'EN');
$cd4 = new Discs('Domani smetto', 'Articolo 31', '2002', '13', 'IT');

// definisco un nuovo negozio di dischi
$discsShop1 = new DiscsShop('La Galleria Del Disco');

// pusho i dischi all'interno del negozio tramite funzione setter
$discsShop1->addDisc($cd1);
$discsShop1->addDisc($cd2);
$discsShop1->addDisc($cd3);
$discsShop1->addDisc($cd4);

// stampo a schermo i valori di ogni disco
echo 'CD NUMBER 1<br><br>Album Name: ' . $cd1->name . '<br>Singer/Group: ' . $cd1->singer . '<br>Year: ' . $cd1->year . '<br>Number of songs: ' . $cd1->songNums . '<br>Language: ' . $cd1->language . '<br><br>';
echo 'CD NUMBER 2<br><br>Album Name: ' . $cd2->name . '<br>Singer/Group: ' . $cd2->singer . '<br>Year: ' . $cd2->year . '<br>Number of songs: ' . $cd2->songNums . '<br>Language: ' . $cd2->language . '<br><br>';
echo 'CD NUMBER 3<br><br>Album Name: ' . $cd3->name . '<br>Singer/Group: ' . $cd3->singer . '<br>Year: ' . $cd3->year . '<br>Number of songs: ' . $cd3->songNums . '<br>Language: ' . $cd3->language . '<br><br>';
echo 'CD NUMBER 4<br><br>Album Name: ' . $cd4->name . '<br>Singer/Group: ' . $cd4->singer . '<br>Year: ' . $cd4->year . '<br>Number of songs: ' . $cd4->songNums . '<br>Language: ' . $cd4->language . '<br><br>';

// stampo a schermo i dischi presenti nel negozio
print_r($discsShop1->getDiscs());