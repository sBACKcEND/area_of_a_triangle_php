<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of a triangle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-25 mx-auto mt-5 text-bg-dark bg-opacity-75">
                    <div class="card-header"><h2>Area of a triangle</h2></div><br>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="mb-3">
                                <label for="" class="form-label">1st side:</label>
                                <input type="text" name="first" value="" class="form-control" required>
                                <label for="" class="form-label mt-3">2nd side:</label>
                                <input type="text" name="second" value="" class="form-control" required>
                                <label for="" class="form-label mt-3">3rd side:</label>
                                <input type="text" name="third" value="" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-warning">Calculate</button>
                            </div>
                            <br>

                            <?php

                            if (isset($_GET['first'])) {
                                $a = $_GET['first'];
                                $b = $_GET['second'];
                                $c = $_GET['third'];

                                function findArea($a, $b, $c)
                                {
                                    if (
                                        $a < 0 or $b < 0 or
                                        $c < 0 or ($a + $b <= $c) or
                                        $a + $c <= $b or $b + $c <= $a
                                    ) {
                                        echo "Not a valid triangle";
                                        exit(0);
                                    }
                                    $s = ($a + $b + $c) / 2;
                                    return round(sqrt($s * ($s - $a) *
                                        ($s - $b) * ($s - $c)), 1);
                                }
                                echo "<strong>Area is:<strong> ", findArea($a, $b, $c);
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>