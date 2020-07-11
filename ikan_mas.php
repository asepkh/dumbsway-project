
<?php
$banyak_ikan_awal = 1476;
$banyak_ikan_akhir = $banyak_ikan_awal;
$lama_perawatan = 471;
$pembagi = 46;
$siklus = floor($lama_perawatan/$pembagi);
for($i=1; $i <= $siklus; $i++)
{
    // Ngurang 6%
    $banyak_ikan_akhir -= 6/100*$banyak_ikan_akhir;
    // Nambah 5
    $banyak_ikan_akhir += 5;
}

echo "Banyak Ikan Di Awal: ", $banyak_ikan_awal, "<br>Lama Perawatan : ", $lama_perawatan, "<br>Banyak Ikan Di Akhir Perawatan : ", floor($banyak_ikan_akhir);
?>