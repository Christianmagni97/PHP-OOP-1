<?php 
class Movies {
    public $canzoni;
    public $strumento;
    public $album;
    function __construct($canzoni, $titolo, $album){
        $this->canzoni = $canzoni;
        $this->titolo = $titolo;
        $this->album = $album;
    }
}
$Richard_Benson= new Movies('I Nani', 'Chitarra','24 back to 84');
$Piccolo_Lucio= new Movies('A me me piace a nutella', 'Violini','Nutelloso');
$Germano_Mosconi= new Movies('Clio can can','Arpa','conductor');
var_dump($Richard_Benson);
var_dump($Piccolo_Lucio);
var_dump($Germano_Mosconi);
?>