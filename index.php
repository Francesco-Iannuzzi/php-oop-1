<?php 

require __DIR__ . '/db.php'

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

            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card text-start border-0 bg-secondary p-4 mt-5">
                        <h1>Title: <?= $movie->title ?></h1>
                        <h4>Director: <?= $movie->director ?></h4>
                        <h4>Star: <?= $movie->star ?></h4>
                        <h4>Year: <?= $movie->year ?></h4>
                        <?php foreach ($genre as $genreItem) : ?>
                        <h4><?= $genreItem ?></h4>
                        <?php endforeach; ?>
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