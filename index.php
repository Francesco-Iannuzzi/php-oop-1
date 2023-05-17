<?php 

require __DIR__ . '/Database/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- /Bootstrap Style -->
    <title>PHP OOP 1</title>
</head>

<body class="bg-dark">
    <header>

        <nav class="nav justify-content-center py-3 bg-light">
            <a class="nav-link text-danger" href="#">
                <h6>Home</h6>
            </a>
            <a class="nav-link" href="#">
                <h6>About</h6>
            </a>
            <a class="nav-link" href="#">
                <h6>Contact</h6>
            </a>
        </nav>
        <!-- /navbar -->

    </header>
    <!-- /header -->

    <main class="bg-dark">
        <div class="container w-75 text-light text-center py-5">

            <div class="title">
                <h1 class="text-secondary">Movies</h1>
                <h3>Selected Movies</h3>
            </div>
            <!-- /.title -->

            <div class="row py-5">
                <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card border-0" style="width: 18rem;">
                        <img src="<?= $movie->cover ?>" class="card-img-top img-fluid">
                        <div class="card-body bg-secondary">
                            <h4 class="card-title">Title: <?= $movie->title ?></h4>
                            <h6>Director: <?= $movie->director ?></h6>
                            <h6>Star: <?= $movie->star ?></h6>
                            <h6>Year: <?= $movie->year ?></h6>
                            <h6>Genre:
                                <?php foreach ($genres as $genre) : ?>
                                <span><?= $genre ?> - </span>
                                <?php endforeach; ?>
                            </h6>
                        </div>
                    </div>
                    <!-- /card -->
                </div>
                <!-- /col -->
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <!-- /main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- /Bootstrap script -->
</body>

</html>