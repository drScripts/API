<?php 

$tahun_sekarang = date("Y");
$tahun_shio = 1900;
$interval = $tahun_sekarang - $tahun_shio;

$jumlah_per_zodiak = $interval / 12;
$tahunku = 1905;

echo strlen($tahunku);
echo "<br>";

        for($i = 0; $i <= $jumlah_per_zodiak; $i++){
             if($tahunku == $tahun_shio){
                 echo "Rat (Tikus)";
                
                }   
            $tahun_shio+=12;
        }
   
         $tahun_shio = 1900 + 1;
         $update = $tahun_shio;
         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
             if($tahunku == $tahun_shio){
                 echo "Sapi (OX)";
                 $tahun_shio = 1900;
             }
             $tahun_shio+=12;
         }

         $tahun_shio = $update + 1;
         $update = $tahun_shio;

         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
             if($tahunku == $tahun_shio){
                 echo "Tiger";
             }
             $tahun_shio+=12;
         }

         $tahun_shio = $update + 1;
         $update = $tahun_shio;   

         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
            if($tahunku == $tahun_shio){
                echo "Rabbit";
            }
            $tahun_shio+=12;
        }

        $tahun_shio = $update + 1;
        $update = $tahun_shio;   

         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
            if($tahunku == $tahun_shio){
                echo "Dragon";
            }
            $tahun_shio+=12;
        }

        $tahun_shio = $update + 1;
        $update = $tahun_shio;   

         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
            if($tahunku == $tahun_shio){
                echo "Snake";
            }
            $tahun_shio+=12;
        }

        $tahun_shio = $update + 1;
        $update = $tahun_shio;   

         for($i = 0; $i <= $jumlah_per_zodiak; $i++){
            if($tahunku == $tahun_shio){
                echo "Snake";
            }
            $tahun_shio+=12;
        }



        

    
        ?>