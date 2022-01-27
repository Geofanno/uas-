<!doctype html>
<html lang="en">
  <head>
    
  </head>
  <body>
      <?php
        include("konek.php");
        $cari=mysqli_query($konek, "select * from mobil");
      ?>
            <div class="card">
                <h5 class="card-header">Tambah Data Order</h5>
                <div class="card-body">
                <form method="post" action="?x=sorder">
                    <div class="mb-3">
                        <label>Nomor Polisi</label>
                        <select name="polisi" class="form-control">
                            <option value="">--Silahkan Pilih--</option>   
                            <?php
                            while($data=mysqli_fetch_array($cari)){
                            ?>
                            <option value="<?php echo $data['id_mobil']; ?>"><?php echo $data['no_polisi']." - " . 
                            $data['merek']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        </div>
                    <div class="mb-3">
                        <label>Nomor KTP</label>
                        <input type="text" class="form-control" name="txtKTP">
                        </div>
                    <div class="mb-3">
                        <label>Nama Peminjam</label>
                        <input type="text" class="form-control" name="txtNp">
                        </div> 
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="">--Silahkan Pilih--</option>   
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>   
                    <div class="mb-3">
                        <label>Alamat Lengkap</label>
                        <input type="text" class="form-control" name="txtAlamat">
                        </div>
                    <div class="mb-3">
                        <label>TELFON/HP</label>
                        <input type="text" class="form-control" name="txtTlp">
                        </div>
                    <div class="mb-3">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="txtTujuan">
                        </div>
                    <div class="mb-3">
                        <label>Tanggl Peminjam</label>
                        <input type="date" class="form-control" name="txtTp">
                        </div>
                    <div class="mb-3">
                        <label>Tanggal Kembali</label>
                        <input type="date" class="form-control" name="txtTk">
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