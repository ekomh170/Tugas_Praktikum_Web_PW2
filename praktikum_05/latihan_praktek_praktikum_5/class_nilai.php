<?php

class nilai{
    public $nim, $matkul, $nilai;

    function __construct($nim, $matkul, $nilai){
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    // Fungsi Hasil Ujian
    public function hasilUjian(){
        if($this->nilai >= 85){
            return "A";
        }elseif($this->nilai >= 70 && $this->nilai < 85){
            return "B";
        }elseif($this->nilai >= 60 && $this->nilai < 70){
            return "C";
        }elseif($this->nilai >= 50 && $this->nilai < 60){
            return "D";
        }else{
            return "E";
        }
    }

     // Fungsi Kelulusan Mahasiswa
    public function statusLulus(){
        if($this->nilai >= 60){
            return "Lulus";
        }else{
            return "Tidak Lulus";
        }
    }

    // Fungsi Grade Mahasiswa
    public function predikatMhs(){
        if($this->hasilUjian() == "A"){
            return "Sangat Memuaskan";
        }elseif($this->hasilUjian() == "B"){
            return "Memuaskan";
        }elseif($this->hasilUjian() == "C"){
            return "Cukup";
        }elseif($this->hasilUjian() == "D"){
            return "Kurang";
        }else{
            return "Sangat Kurang";
        }
    }

    // Tampilan Hasil Form Nilai
    public function hasilNilai(){
        echo "NIM : " . $this->nim . "<br>";
        echo "Mata Kuliah : " . $this->matkul . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Hasil Ujian : " . $this->hasilUjian() . "<br>";
        echo "Status Lulus : " . $this->statusLulus() . "<br>";
        echo "Grade : " . $this->predikatMhs() . "<br>";
    }
}

?>