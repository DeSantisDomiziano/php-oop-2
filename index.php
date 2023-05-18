<?php 

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Database/db.php';


?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <div class="container py-5">
    <div class="row row-cols-3 g-4">
        <?php foreach($computers as $computer) : ?>
          <?php $computer->setType() ?>
        <div class="col">
            <div class="card">
                <img src="<?php echo $computer->img ?>" alt="" class="card-img-top">
                <div class="card-body">
                  <h2>
                    <?php echo $computer->brand ?>
                  </h2>
                  <p>
                    <?php echo $computer->keyboard ?> <br>
                    <?php echo $computer->mouse ?>
                  </p>
                </div>
                <div class="card-footer">
                  <p class="m-0 text-end">
                  <?php echo $computer->device ?>
                  </p>
                  <p class="m-0 text-end">
                    <strong>
                      <?php echo $computer->price . ' €' ?>
                    </strong>
                  </p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
  </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
</body>

</html>