<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <script src="https://kit.fontawesome.com/e81773e2de.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-secondary container-fluid">
    <div class="title">
        <h2 class="text-center text-warning font-monospace">TO DO LIST <i class="fa-solid fa-user"></i></h2>
    </div>

    <form action="insert.php" method="post">
        <div class="container-fluid">
            <div class="row justify-content-center bg-white m-auto shadow py-3">
                <h2 class="text-center text-warning font-monospace">ADD ACTIVITY</h2>
                <div class="col-8">
                    <input type="text" name="list" class="form-control shadow">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </form>

    <!-- Get data from localhost -->
    <?php
    include "config.php";
    $sql = mysqli_query($con, "SELECT * FROM `tabletodo`");
    $i = 1;
    ?>
    <!-- Tampilkan data -->
    <div class="container-fluid">
        <h2 class="text-center text-warning font-monospace bg-dark p-3">LIST OF ACTIVITY <i
                class="fa-solid fa-list"></i></h2>
        <div class="table">
            <tbody>
                <?php
                    while($row = mysqli_fetch_array($sql)){
                    ?>
                <div class="box">
                    <h4 class="number"><?php echo $i++ ?></h4>
                    <h3 class="subject"><?php echo $row['List'] ?></h3>
                    <div class="button-wrapper">
                        <div class="button"><a href="update-page.php? ID=<?php echo $row['ID'] ?>" class="btn btn-outline-warning"><i
                                    class="fa-solid fa-pen-to-square"></i>UPDATE</a></div>
                        <div class="button"><a href="delete.php? ID=<?php echo $row['ID']?>" class="btn btn-outline-danger"><i
                                    class="fa-solid fa-trash-can"></i>DELETE</a></div>
                    </div>
                </div>
                <?php
                    }
                    ?>
            </tbody>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>