<?php
    include "koneksi.php"; //connect ke koneksi.php

    $result = mysqli_query($kon,'SELECT * FROM mahasiswa'); //dari tabel mahasiswa yg dibuat di db
    

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav"> <!--Menu Navbar-->
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Tampil Data <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Tambah Data</a>
      </li>
    </ul>
    </div>
    </nav>
    <title>Tampil Data Mahasiswa</title>
</head>
<body style="margin: 10px;">
    <h2 style="text-align: center;">Daftar data dalam database</h2>
    
    <br>
    <br>
    <table class="table table-hover">
        <thead class = "thead-dark" >
            <tr>
                <th scope="col" style="text-align : center;">ID</th>
                <th scope="col" style="text-align : center;">NIM</th>
                <th scope="col" style="text-align : center;">NAMA</th>
                <th scope="col" style="text-align : center;">JENIS KELAMIN</th>
                <th scope="col" style="text-align : center;">AGAMA</th>
                <th scope="col" style="text-align : center;">OLAHRAGA FAVORIT</th>
                <th scope="col" style="text-align : center;">FOTO PROFIL</th>
                <th scope="col" style="text-align : center;">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while ($row=mysqli_fetch_array($result))  //variabelnya menggunakan $row
                {
                echo "<tr>";
                
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nim']."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['jenis_kelamin']."</td>";
                echo "<td>".$row['agama']."</td>";
                echo "<td>".$row['olahraga']."</td>";
                echo "<td><img src='foto/".$row['foto']."' width='100' height='100'></td>"; //kotak ukuran foto ygditampilkan
                echo "<td>"?><a href="edit.php?id=<?php echo $row['id']; ?>" ><button type="button" name="sub" class="btn btn-warning" style="center;">Edit</button></a> 
                             <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" name="sub" class="btn btn-danger">Hapus</button></a>
                <?php
                }
        
            ?>
        </tbody>
    </table>

</body>
</html>







