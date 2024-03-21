<?php


class Mahasiswa {
    public $namaMahasiswa, $nim, $domisili, $prodi, $ipk;

    function __construct($namaMahasiswa, $nim, $domisili, $prodi, $ipk)
    {
        $this->nim = $nim;
        $this->namaMahasiswa  = $namaMahasiswa;
        $this->domisili = $domisili;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    function setPredikatIPK($ipk){
        if ($ipk > 3.5) {
            return "Cumlaude";
        } else{
            return "You di  a great job!";
        }
    }
}

$mahasiswa = new Mahasiswa("Eko Muchamad Haryono", "0110223079", "Bogor", "Teknik Informatika", "3.9");
    echo "Nama Lengkap : " . $mahasiswa->namaMahasiswa;
    echo "<br>";
    echo "NIM : " .  $mahasiswa->nim;
    echo "<br>";
    echo "Domisili : " .  $mahasiswa->domisili;
    echo "<br>";
    echo "Prodi : " .  $mahasiswa->prodi;
    echo "<br>";
    echo "IPK : " . $mahasiswa->ipk;
    echo "<br>";
    echo $mahasiswa->setPredikatIPK($mahasiswa->ipk);
