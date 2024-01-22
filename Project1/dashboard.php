<?php
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #343a40;
            color: #007b7b;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .welcome-container {
            position: fixed;
            top: 20px;
            /* Adjust top position as needed */
            right: 250px;
            /* Adjust right position as needed */
            text-align: center;
            animation-name: fadeInUp;
        }

        .welcome-heading {
            font-size: 48px;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 20px;
        }

        .welcome-text {
            font-size: 20px;
            margin-bottom: 40px;
        }

        /* Advanced CSS Animations */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(18px);
                visibility: visible;
            }
            20% {
                opacity: 0.2;
                transform: translateY(16px);
                visibility: visible;
            }
            40% {
                opacity: 0.4;
                transform: translateY(14px);
                visibility: visible;
            }
            60% {
                opacity: 0.6;
                transform: translateY(12px);
                visibility: visible;
            }
            80% {
                opacity: 0.8;
                transform: translateY(5px);
                visibility: visible;
            }
            
            100% {
                opacity: 1;
                transform: translateY(0);
                visibility: hidden;
            } 
        }

        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }

        .fadeInUp {
            animation-name: fadeInUp;
        }
    </style>
</head>

<body>

    <div class="container welcome-container animated fadeInUp">
        <h1 class="welcome-heading">Welcome <span style="color: #fff;">Mr. <p id="name">
                    <?php echo $email; ?>
                </p></span></h1>
        <p class="welcome-text">Explore exciting content and connect with a vibrant community.</p>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let nameElement = document.getElementById('name');
            if (nameElement) {
                nameElement.innerText = nameElement.innerText.toUpperCase();
            }
        });
    </script>

    hello f dds fidsfhds

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>