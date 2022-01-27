<!doctype html>
<html lang="en">
  <head>
    
  </head>
  <body>
  <?php
  include("konek.php");
    $id=$_GET['nomor'];
    $cari=mysqli_query($konek, "select * from mobil where nomor ='$id'");
    $data = mysqli_fetch_array($cari);
    ?>
            <div class="card">
                <h5 class="card-header">Ubah Data Mobil</h5>
                <div class="card-body">
                <form method="post" action="?x=ubmobil">
                    <input type="hidden" name="kode" value="<?php echo $data['nomor']; ?>">
                    <div class="mb-3">
                        <label>Nomor Polisi</label>
                        <input type="text" class="form-control" name="txtPolisi" value="<?php echo $data['no_polisi']; ?>">
                        </div>
                    <div class="mb-3">
                        <label>Merek Mobil</label>
                        <input type="text" class="form-control" name="txtMerek" value="<?php echo $data['merek']; ?>">
                        </div>
                    <div class="mb-3">
                        <label>Tahun Keluaran</label>
                        <input type="text" class="form-control" name="txtTahun" value="<?php echo $data['tahun']; ?>">
                        </div>
                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="txtHarga" value="<?php echo $data['harga']; ?>">
                        </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
                </div>
            </div>


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