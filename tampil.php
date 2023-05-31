<?php
include 'Koneksi.php';
$con = new Koneksi('localhost','root','','oop');
$query="SELECT * FROM oopfazri";

$tampil=mysqli_query($con->Konek(),$query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  
   
  
  <table class="table ">
  <thead>
    <tr>
   
      <th class="table-secondary" scope="col">Nama</th>
      <th class="table-secondary" scope="col">Nilai 1</th>
      <th class="table-secondary" scope="col">Nilai 2</th>
      <th class="table-secondary" scope="col">Nilai 3</th>
      <th class="table-secondary" scope="col"> aksi</th>
    </tr>
  </thead>
  <tbody><br><br><br>
    <center><h1>TAMPIL DATA</h1></center><br><br><br>
    <?php foreach ($tampil as $p): ?>
    <tr>
        
    
      <td><?= "  " . $p['nama']?></td>
      <td><?= $p['nilai1']?></td>
      <td><?=  $p['nilai2']?></td>
      <td><?=  $p['nilai3']?></td>
      <td>  <a class="btn btn-danger"href='hapus.php?nama=<?=$p['nama']?>'>Hapus</a></td>
    
    </tr>
  
    <?php endforeach; ?>
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>