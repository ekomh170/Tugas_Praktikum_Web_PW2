<?php

class HewanMamalia
{
    public $warna, $namaHewan, $habitat;

    function makan()
    {
        return "Mamalia makan";
    }

    function minum()
    {
        return "Mamalia minum";
    }

    function menyusui()
    {
        return "Mamalia menyusui";
    }
}

// Membuat objek dari class HewanMamalia
$mamalia = new HewanMamalia();
$mamalia->namaHewan = "Lumba Lumba";
echo $mamalia->namaHewan;
echo "<br>";
echo $mamalia->warna = "Abu-abu";
echo "<br>";
echo $mamalia->habitat = "Laut";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
?>