<!doctype html>
<html lang="en">

  <body>
        <?php
        include("konek.php");
        $cari=mysqli_query($konek,"select * from mobil,sewa where mobil.id_mobil=sewa.id_mobil") or die (mysqli_error());
        ?>
    <table class="table table-hover">
    <a href="?x=torder" class="btn btn-primary">Tambah Order</a>

    <thead>
        <tr>
            <th>No.</th>
            <th>No Polisi</th>
            <th>Merek</th>
            <th>Nama Peminjam</th>
            <th>Tujuan Pinjam</th>
            <th>Tgl Mulai Order</th>
            <th>Tgl Selesai Order</th>
            <th>Lama Sewa</th>
            <th>Total</th>
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
                <td><?php echo $data['no_polisi']; ?></td>
                <td><?php echo $data['merek']; ?></td>
                <td><?php echo $data['nama_sewa']; ?></td>
                <td><?php echo $data['tujuan']; ?></td>
                <td><?php echo $data['tgl_sewa']; ?></td>
                <td><?php echo $data['tgl_kembali']; ?></td>
                <td><?php echo $data['lama']; ?></td>
                <td><?php echo $data['harga_total']; ?></td>
                <td>
                    <a href="?x=horder&kode=<?php echo $data['kode']; ?>" class="btn btn-danger">Hapus</a>
                    
                </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>