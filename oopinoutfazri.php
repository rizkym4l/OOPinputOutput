<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <center>
    <h1>Form Input Nilai</h1>
    <form method="post" action="#">
        <label for="nis">Nama:</label>
        <input type="text" name="nama" id="nama" required><br><br>

        <label for="nilai1">Nilai 1:</label>
        <input type="number" name="nilai1" id="nilai1" required><br><br>
         
        <label for="nilai2">Nilai 2:</label>
        <input type="number" name="nilai2" id="nilai2" required><br><br>
        
        <label for="nilai3">Nilai 3:</label>
        <input type="number" name="nilai3" id="nilai3" required><br><br>
        

        
        <input type="submit" name="submit"value="Submit">
    </form>

<?php

class Nilai {
    private $nama;
    private $nilai1;
    private $nilai2;
    private $nilai3;
    

    public function __construct($nama, $nilai1, $nilai2, $nilai3, ) {
        $this->nama = $nama;
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
        $this->nilai3 = $nilai3;
       
    }

    public function nama() {
        return $this->nama;
    }

    public function total() {
        return $this->nilai1 + $this->nilai2 + $this->nilai3 ;
    }

    public function ratarata() {
        $total = $this->total();
        return $total / 3;
    }

    public function nilaimax() {
        return max($this->nilai1, $this->nilai2, $this->nilai3,);
    }

    public function nilaimin() {
        return min($this->nilai1, $this->nilai2, $this->nilai3,);
    }

    public function grade() {
        $rata = $this->ratarata();

        if ($rata > 90) {
            return "A";
        } elseif ($rata > 80) {
            return "B";
        } elseif ($rata > 70) {
            return "C";
        } elseif ($rata > 0) {
            return "D";
        }
    }
}

include "koneksi.php";

$con = new Koneksi('localhost','root','','oop');

if (isset($_POST['submit'])) {
 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];
 

    $nilaihasil = new Nilai($nama, $nilai1, $nilai2, $nilai3);

    $sql = "INSERT INTO oopfazri(nama,nilai1,nilai2,nilai3) VALUES ('$nama','$nilai1','$nilai2','$nilai3')";
    $hasil = mysqli_query($con->Konek(), $sql);

    if ($hasil) {
        echo "Berhasil";
    } else {
        echo "Gagal";
    }

   
    echo "<br><br>";
    echo "Nama: " . $nilaihasil->nama();
    echo "<br>";
    echo "Total: " . $nilaihasil->total();
    echo "<br>";
    echo "Rata-Rata: " . $nilaihasil->ratarata();
    echo "<br>";
    echo "Nilai Max: " . $nilaihasil->nilaimax();
    echo "<br>";
    echo "Nilai Min: " . $nilaihasil->nilaimin();
    echo "<br>";
    echo "Grade Penilaian: " . $nilaihasil->grade();

    echo "<br><br>";
    echo "<a href='tampil.php'>Lihat Daftar Nilai</a>";
    echo "<br>";
    
}
}
?>

</center>
</body>
</html>
