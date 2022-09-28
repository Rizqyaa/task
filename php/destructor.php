<?php
// buat class homesick
class homesick {
  
   private $dokter = "raka";
   private $pasien = "luna";
   private $obat = "paracetamol";
   
   public function __construct(){
     echo "Ini berasal dari Constructor homesick";
   }
  
   public function drugs(){
     return " $this->dokter memberi obat $this->obat ke $this->pasien";
  
   }
   public function __destruct(){
     echo "Ini berasal dari Destructor homesick";
   }
}
  
// buat objek dari class homesick (instansiasi)
$drug= new homesick();
  
echo "<br />";
echo $drug->drugs();
echo "<br />";
  
// hapus objek $drug
unset($drug);
  
echo "<br />";
echo "Objek Telah Dihancurkan";
?>