<?php 
class Koneksi
{
   public $pw ;
   public $host ;
   public $dbname ;
   public $user;

   public function __construct( $host, $user,$pw, $dbname){

    $this->host = $host;
    $this->user = $user;
    
    $this->pw = $pw;
    $this->dbname = $dbname;

   }


   public function Konek(){
    $con = mysqli_connect($this->host ,   $this->user ,  $this->pw  ,    $this->dbname );
    return $con;
   }


}
