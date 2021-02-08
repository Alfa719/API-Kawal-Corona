<?php
    include 'api.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Corona</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary justify-content-between">
        <a class="navbar-brand mx-5 font-weight-bold text-light">
            <h3>Data Corona</h3>
        </a>
        <form class="form-inline mx-5">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
    <!-- End Navbar -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h2>Kasus Data Corona</h2>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="badge badge-pill badge-danger mb-3 px-5">
                    <h5>Data Corona di Indonesia</h5>
                </span>
            </div>
        </div>
    </div>
    <!-- Data Corona di Indonesia -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Positif</h5>
                        <h1 class="card-text"><?php echo $dataIndo[0]['positif'] ?> Orang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Sembuh</h5>
                        <h1 class="card-text"><?php echo $dataIndo[0]['sembuh'] ?> Orang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-danger">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Meninggal</h5>
                        <h1 class="card-text"><?php echo $dataIndo[0]['meninggal'] ?> Orang</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <span class="badge badge-pill badge-danger mb-3 mt-3 px-5">
                    <h5>Data Corona di Dunia</h5>
                </span>
            </div>
        </div>
    </div>
    <!-- Data Corona di Indonesia -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-warning">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Positif</h5>
                        <h1 class="card-text"><?php echo $dataGlobPos['value'] ?> Orang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-info">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Sembuh</h5>
                        <h1 class="card-text"><?php echo $dataGlobSemb['value'] ?> Orang</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card bg-danger">
                    <div class="card-body">
                        <h5 class="card-title text-center bg-light p-2">Meninggal</h5>
                        <h1 class="card-text"><?php echo $dataGlobMening['value'] ?> Orang</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                <center><span class="badge badge-pill badge-warning m-3 px-3 py-2">
                    <h5>Data Corona Seluruh Provinsi di Indonesia</h5>
                </span></center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Positif</th>
                            <th scope="col">Sembuh</th>
                            <th scope="col">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $array = 0;
                        while ($no <= 34) {


                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?php echo $dataProv[$array]['attributes']['Provinsi'] ?></td>
                                <td><?php echo $dataProv[$array]['attributes']['Kasus_Posi'] ?></td>
                                <td><?php echo $dataProv[$array]['attributes']['Kasus_Semb'] ?></td>
                                <td><?php echo $dataProv[$array]['attributes']['Kasus_Meni'] ?></td>
                            </tr>
                        <?php
                            $no++;
                            $array++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End Corona Indonesia -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>