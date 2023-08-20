<?php
session_start();
unset($_SESSION['name']);
include('includes/class-autoload.inc.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Arithmetic calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class=class-form action="includes/calc.inc.php" method="POST">
        <div class="container mt-5 col-md-6">
            <?php
            if (isset($_SESSION['calculator'])):
                ?>
                <div class="class-output">
                    Result of
                    <?php echo $_SESSION['calculator']['num_1']; ?>
                    <?php echo $_SESSION['calculator']['operator']; ?>
                    <?php echo $_SESSION['calculator']['num_2']; ?>
                    =
                    <?php echo $_SESSION['calculator']['result'];
                    unset($_SESSION['calculator']); ?>
                </div>
                <?php
            endif;
            ?>

            <div class="card">
                <div class="class-header">
                    <h3 style="color:aliceblue;" align="center">Arithmetic Calculator</h3>
                    <hr>
                    <div class="mb-3 w-65" style="margin: 15px;">
                        <label>Enter First number</label>
                        <input type="number" class="form-control" name="num1">

                    </div>
                    <div class="mb-3" style="margin: 15px;">
                        <label for="calculator">Choose Operation:</label><br>
                        <select name="operator" id="calculator">
                            <option value="add">Addition</option>
                            <option value="sub">Subtraction</option>
                            <option value="multiply">Multiplication</option>
                            <option value="divide">Division</option>
                        </select>
                    </div>
                    <div class="mb-3 w-65" style="margin: 15px;">
                        <label>Enter Second number</label>
                        <input type="number" class="form-control" name="num2">

                    </div>
                    <button type="submit" class="btn btn-primary mb-3 w-65" style="margin-left: 15px;">Submit</button>
                </div>
            </div>

        </div>

    </form>
</body>

</html>