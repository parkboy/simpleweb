<?php
    class stuser{
        public $name;
        public $address;
        private $nik;

        public  function hallo($name){
            echo "Hallo, my name is ".$name;
        }

        public function myaddress(){
            return "My address is in ".$this->address;
        }
    }

    class mahasiswa extends stuser{
        public $mall;
        public function pesiar(){
            echo "Saya pesiar di Mall ".$this->mall;
        }
    }

    class pamong extends mahasiswa{
        public $asrama;
        public function sidak(){
            echo "Telah dilaksanakan sidak pada Asrama ".$this->asrama;
        }
    }


    $user1 = new stuser();
    $name = "sani";
    $user1->hallo($name);
    echo "<br>";
    $user1->address = "ciseeng";
    echo $user1->myaddress();

    $sani = new mahasiswa();
    $sani->mall = "Percis";
    $sani->address = "Bandung";
    $sani->hallo("Sani");
    echo "<br>";
    echo $sani->myaddress();
    echo "<br>";
    $sani->pesiar();

    $bisa = new pamong();
    $bisa->asrama = "A";
    $bisa->address = "Bogor";
    $bisa->mall="parung";
    $bisa->hallo("private");
    echo "<br>";
    echo $bisa->myaddress();
    echo "<br>";
    $bisa->sidak();
    echo "<br>";
    $bisa->pesiar();
    

?>