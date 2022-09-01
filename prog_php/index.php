<?php
include './includes/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>

<body>
    <div>
        <header>
            <nav class="nav px-4 d-flex justify-content-between align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/232px-Spotify_icon.svg.png" alt="spotify logo">
                <div>
                    <div>
                        <select id="base-select" class="form-select" name="base-select">
                            <option value="" selected>Seleziona un genere</option>
                        </select>
                    </div>
                </div>
            </nav>
        </header>
        <div class="my-5">
            <div class="container">
                <div class="album-list row row-cols-5 m-auto justify-content-center g-4">
                    <?php foreach ($discs as $disc) :
                        $title = $disc['title'];
                        $author = $disc['author'];
                        $year = $disc['year'];
                        $poster = $disc['poster'];
                        $genre = $disc['genre'];
                    ?>
                        <div class="col album-card">
                            <figure class="p-3 h-100">
                                <img src="<?= $poster ?>" alt="<?= $title ?>" class="img-fluid mb-3">
                                <figcaption class="h-100 text-center">
                                    <h5 class="mb-3 text-white"><?= $genre ?></h5>
                                    <div class="text-muted"><?= $author ?></div>
                                    <div class="text-muted"><?= $year ?></div>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</body>

</html>