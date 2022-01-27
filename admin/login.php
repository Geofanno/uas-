<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://parsleyjs.org/dist/parsley.min.js"></script>
    <script src="https://parsleyjs.org/dist/i18n/id.js"></script>
</head>

<body>
<div class="container mt-3">
        <div class="row">
            <div class="col">
            <div class="card w-50 mx-auto">
                <h5 class="card-header">Halaman Login</h5>
                <div class="card-body">
                <form method="post" action="masuk.php" id="form" data-parsley-validate>
                <div class="mb-3">
                        <label">Username</label>
                            <input type="text" class="form-control" name="txtUsername" placeholder="Masukan Username" required data-parsley-trigger="keyup" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="txtPassword" placeholder="Masukan Password" required data-parsley-trigger="keyup" class="form-control" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#form').parsley();
</script>

</html>