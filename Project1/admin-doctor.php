<?php
include "header.php";
include "dbcon.php";

// session_start();
if (isset($_SESSION['id']) && $_SESSION['id'] !== "") {
    header("Location: index.php");
    exit();
}

if (isset($_POST['signup'])) {
    // mysqli_real_escape_string($con, $_POST['email']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    $select = mysqli_real_escape_string($con, $_POST['select']);
    list($specializationId, $specializationName) = explode(' ', $select);

    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $cpassword = md5(mysqli_real_escape_string($con, $_POST['cpassword']));

    // Validation checks
    $name_error = $email_error = $mobile_error = $password_error = $cpassword_error = '';

    if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    if (strlen($password) < 6) {
        $password_error = "Password must be a minimum of 6 characters";
    }
    if (strlen($mobile) < 10) {
        $mobile_error = "Mobile number must be a minimum of 10 characters";
    }
    if ($password != $cpassword) {
        $cpassword_error = "Password and Confirm Password don't match";
    }

    if (empty($name_error) && empty($email_error) && empty($mobile_error) && empty($password_error) && empty($cpassword_error)) {
        $sql = "INSERT into `doctor_table` values('', '$name', '$mobile', '$email', '$select', '$password')";
        if (mysqli_query($con, $sql)) {
            echo '<script>';
            echo 'alert("Data inserted successfully");';
            echo 'window.location.href = "admin-doctor.php";';
            echo '</script>';
            exit();
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

}

// LOGIN 
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM doctor_table WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            // User found, set session variables or perform other actions
            $_SESSION['id'] = $row['id']; // Assuming you have an 'id' column in your doctor_table
            echo '<script>';
            echo 'alert("User found");';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'alert("User not found");';
            echo '</script>';
        }
    } else {
        echo "Error: " . mysqli_error($con);
    }

}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8ff;
        }

        .login-card {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card login-card">
            <div class="card-body">
                <h2 class="card-title text-center">Login</h2>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="text" name="email" class="form-control" id="username"
                            placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Enter your password">
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    <br>
                    <center>
                        <div class="container mt-1">
                            Don't have account
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#popupFormModal">
                                Register
                            </button>
                    </center>
                </form>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <!-- Modal -->
                    <div class="modal fade" id="popupFormModal" tabindex="-1" aria-labelledby="popupFormModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="popupFormModalLabel">Register Here</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-offset-3">
                                            <div class="page-header">
                                            </div>
                                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                method="post">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" name="name" class="form-control" value=""
                                                        maxlength="50" required="">
                                                    <span class="text-danger">
                                                        <?php if (isset($name_error))
                                                            echo $name_error; ?>
                                                    </span>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Email</label>
                                                    <input type="email" name="email" class="form-control" value=""
                                                        maxlength="30" required="">
                                                    <span class="text-danger">
                                                        <?php if (isset($email_error))
                                                            echo $email_error; ?>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Mobile No.</label>
                                                    <input type="text" name="mobile" class="form-control" value=""
                                                        maxlength="12" required="">
                                                    <span class="text-danger">
                                                        <?php if (isset($mobile_error))
                                                            echo $mobile_error; ?>
                                                    </span>
                                                </div>
                                                <div>
                                                    <label>Specialization</label>
                                                    <br>
                                                    <?php
                                                    $query = "SELECT id, specialization FROM specialization_table";
                                                    $result = $con->query($query);

                                                    echo '<select name="select">';
                                                    ?>
                                                    <option></option>
                                                    <?php
                                                    while ($row = $result->fetch_assoc()) { ?>
                                                        <option value="<?php echo $row['specialization']; ?>">
                                                            <?php echo $row['specialization']; ?>
                                                        </option>

                                                    <?php }
                                                    echo '</select>';

                                                    $con->close();
                                                    ?>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" name="password" class="form-control" value=""
                                                        maxlength="8" required="">
                                                    <span class="text-danger">
                                                        <?php if (isset($password_error))
                                                            echo $password_error; ?>
                                                    </span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" name="cpassword" class="form-control"
                                                        value="" maxlength="8" required="">
                                                    <span class="text-danger">
                                                        <?php if (isset($cpassword_error))
                                                            echo $cpassword_error; ?>
                                                    </span>
                                                </div>
                                                <div class="text-center">
                                                    <input type="submit" class="btn btn-primary" name="signup"
                                                        value="Submit" style="width: 50%;margin-bottom: 20px;" />
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>