<?php
// buat class laptop
class homesick {
  
   private $dokter;
   private $pasien;
   private $obat;
  
   // constructor sebagai pembuat nilai awal
   public function __construct($dokter, $pasien, $obat) {
     $this->dokter = $dokter;
     $this->pasien = $pasien;
     $this->obat = $obat;
   }
  
   public function drugs() {
     return "$this->dokter memberi obat $this->obat kepada $this->pasien";
   }
}
  
// buat objek dari class drug (instansiasi)
$drug = new homesick("Luna", "Raka", "Paracetamol");
  
echo $drug->drugs();
echo "<br />";
  
?>
