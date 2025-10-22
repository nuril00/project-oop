<?php
class Orang{
    protected $nama;
    function __construct($nama){
        $this->nama=$nama;
    }
    function Ucapsalam(){
        echo "Hallo. Nama Saya Adalah " .$this->nama."<br>";
    }
}
?>