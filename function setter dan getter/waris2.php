<?php
include("waris1.php");
//pewarisan tanpa perubahan
class OrangSunda extends Orang{

}
//pewarisan dengan meng-override function Ucapsalam
//dan penambahan method
class OrangInggris extends Orang{
    protected $asal="england"; //penambahan properti baru
    function Ucapsalam(){
        echo "Hello. My name is ".$this->nama."<br>";
    }
    function UcapNegara(){
        echo "I'm from".$this->asal."<br>";
    }
}

$kabayan=new OrangSunda("kabayan");
$kabayan->Ucapsalam();
$william=new OrangInggris("prince william");
$william->Ucapsalam();
$william->UcapNegara();