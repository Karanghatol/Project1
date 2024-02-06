<div class="nav-div">
    <?php
    session_start();
    include "dashboard-nav.php";
    if (isset($_SESSION['name']) && ($_SESSION['name'] == "name" || $_SESSION['email'] == "email")) {
        echo "<script>alert(' " . $_POST["name"] . "')</script>";
    }

    ?>
</div>
<?php
$email = $_POST['name'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dadshboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #343a40;
            color: #007b7b;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .welcome-heading {
            font-size: 20px;
            font-style: initial;
            color: #007bff;
            padding-top: 30px;
        }

        .dash-aside {
            width: 250px;
            height: 100%;
            background-color: darkolivegreen;
        }

        .nav-div {
            width: 100%;
            height: max-content;
        }
        .app-link {
            width: 99%;
            padding: 10%;
        }

        .a-app{
            margin: 30px 80px;
        }
    </style>
</head>

<body>
    <aside class="dash-aside">
        <div class="container">
            <h1 class="welcome-heading">Welcome <span style="color: #fff;font-style: italic;"><u>
                        <?php echo $email; ?>
                    </u>
                </span></h1>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let nameElement = document.getElementById('name');
                if (nameElement) {
                    nameElement.innerText = nameElement.innerText.toUpperCase();
                }
            });
        </script>
        <br>
        <section class="app-link">
            <a href="" class=".a-app">All appointments</a><br>
            <a href="" class=".a-app">booked appointment</a><br>
            <a href="" class=".a-app">new appointment</a><br>
            <a href="" class=".a-app">pending appointment</a><br>
            <a href="" class=".a-app">cancelled appointment</a><br>
        </section>
    </aside>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php session_abort(); ?>
</body>

</html>
