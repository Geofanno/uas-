<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Laporan Data Mobil</title>
  </head>
  <body style="padding: 50px;" onload="window.print();">
  <?php
        include("konek.php");
        $cari=mysqli_query($konek,"select * from mobil") or die (mysqli_error());
        ?>
        <h3 class="text-center">Laporan Data Mobil</h3>
    <table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>No Polisi</th>
            <th>Merek</th>
            <th>Tahun</th>
            <th>Harga/Hari</th>
          
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
                <td><?php echo $data['tahun']; ?></td>
                <td><?php echo $data['harga']; ?></td>
                
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