<?php session_start();?>

<?php#Membuat tampilan form input Jumlah persamaan?>
<h1>GAUSS JORDAN</h1>  
<form action="index.php" method="GET">
    Jumlah Persamaan yang digunakan : <br>
    <input type ="text" name="jumlah_persamaan"><br>
    <input type="submit" value="Submit">
    <hr>
</form>
<?php

#Validasi jika input kosong
if(isset($_GET['jumlah_persamaan'])){
      if( !empty($_GET['jumlah_persamaan'])){
            $jumlah_persamaan= $_GET['jumlah_persamaan'];
           
            buatForm($jumlah_persamaan);
           
            $_SESSION['jumlah_persamaan']= $jumlah_persamaan;
            }else{
            echo 'Masukkan Jumlah Persamaan terlebih dahulu';
      }
}

#Buat Tampilan Form Matriks
function buatForm($jumlah_persamaan){
    echo '<form action="function.php" method="GET">'; #panggil function.php
            for($i=0; $i<$jumlah_persamaan;$i++){ #diulang sebanyak inputan jumlah persamaan
                echo 'Persamaan '.$i.': ';
                for($j=0; $j<$jumlah_persamaan+1;$j++){
                      if($j<$jumlah_persamaan){
                            echo '<input type="text" name="var'.$i.$j.'" size="5">X <sub>'.$j.'</sub>';
                      }else{
                            echo ' = <input type="text" name="var'.$i.$j.'" size="5">';
                      }
                }
                echo '<br>';
          }
    echo '<br><input type="submit" value="Submit"><hr>
        </form>';
}
?>