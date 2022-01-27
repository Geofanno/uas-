<!doctype html>
<html lang="en">
 
  <body>
        <?php
        if($_SESSION['level'] == "Admin"){
        include("konek.php");
        $cari=mysqli_query($konek,"select * from admin") or die (mysqli_error());
        ?>
    <table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Admin</th>
            <th>Jenis Kelamin</the=>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
            while($data=mysqli_fetch_array($cari)){  
        ?>
        <tr>
                <th scope="row"><?php echo $no; ?></th>
                <td><?php echo $data['nama_admin']; ?></td>
                <td><?php echo $data['jk_admin']; ?></td>
                <td><?php echo $data['level']; ?></td>
                <td>
                    <a href="?x=hadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="?x=uadmin&id=<?php echo $data['id_admin']; ?>" class="btn btn-warning">Ubah</a>
                </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
</table>
<a href="?x=tadmin" class="btn btn-primary">Tambah</a>
<?php
        }
        else{ ?>
            <script type="text/javascript">
                alert("Level USER tidak boleh masuk!");
                window.location="index.php";
            </script>
<?php    
  
    }
?>
</body>
</html>