<?php
function cetak_gambar($jumlah)
{
    $char1 		 = '=';
    $char2 		 = '*';

    if($jumlah % 2 != 0)
    { // Kondisi Ganjil
        for ($row = 1; $row <= $jumlah; $row++)
        {
            // loop kolom
            for ($col = 1; $col <= $jumlah; $col++)
            {
                if($row % 2 != 0) { $char = $col % 2 != 0 ? $char1 : $char2; }
                else { $char = $col % 2 != 0 ? $char2 : $char1; }
                echo $char, " &ensp; ";	
            }
            echo '<br/><br/>';
        }
    } 
    else
    {
        echo "Jumlah Harus Ganjil !!";
    }
}
cetak_gambar(7);
?>