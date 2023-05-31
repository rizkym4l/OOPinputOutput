<?php
include 'Koneksi.php';

class Hapus
{
    public $query;

    

    public function setQuery ($query)
    {
        $this->query = $query;
    }
    public function getQuery()
    {
        $this->query;

        return $this->query;
    }

   
    
}

$nama = $_GET['nama'];;

$con = new Koneksi('localhost','root','','oop');

$query = new Hapus();
$query->setQuery("DELETE FROM oopfazri WHERE nama = '$nama' ");

$tes = mysqli_query($con->Konek(),$query->getQuery());


if ($tes){
echo "Berhasil dihapus";
echo "<a href='tampil.php'>Kembali</a>";

}else{
    echo "GAGAL";
}




