<?php

class Perpustakaan{
    function kalkulasi(){
        $pinjam = 150;
        $sedia = 300;
        $rusak = 100;
        $tdkkembali =200;
        
        echo "buku yang dipinjam : ". $pinjam . " buku ";
        echo "<br/>";
        echo "buku yang sedia: ". $sedia . " buku ";
        echo "<br/>";
        echo "buku yang rusak : ". $rusak . " buku ";
        echo "<br/>";
        echo "buku yang tidak kembali : ". $tdkkembali . " buku "."<br/>";
        echo "<br/>";

        echo " total keseluruhan buku: ".($pinjam + $sedia + $rusak + $tdkkembali) . " buku ";
        echo "<br/>"; 
        echo " total buku tersedia jika sudah dikembalikan sebanyak 75 buku: ".($sedia + 75) . " buku ";
        echo "<br/>"; 
        echo " total buku keseluruhan jika buku 20% rusak dibuang : ".($pinjam + $sedia + ($rusak * 0.8) + $tdkkembali) . " buku "; 
    }    
}

?>