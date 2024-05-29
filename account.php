<?php
include './Admin/db.php';
$err_name = $error_email = $error_pass = "";
if (isset($_POST['create'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    if (empty($name)) {
        $err_name = "Name is required";
    } else if (empty($email)) {
        $error_email  = "Email is required";
    } else if (empty($pass)) {
        $error_pass = "Password is required";
    } else {
        $select = "SELECT * FROM account_create WHERE email='$email'";
        $ex1 = mysqli_query($con, $select);
        $count = mysqli_num_rows($ex1) > 0;
        if ($count) {
            echo "<script>alert('Email already exists')</script>";
        } else {
            $insert = "INSERT INTO account_create (name, email, pass)
                       VALUES('$name', '$email', '$pass')";
            $ex = mysqli_query($con, $insert);
            if ($ex) {
                echo "<script>alert('Account created successfully')</script>";
            } else {
                echo "<script>alert('Account creation failed')</script>";
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="d-flex align-items-center justify-content-center bg-light" style="height: 100vh;">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Create Account</h3>
                    </div>
                    <div class="card-body p-4">
                        <form method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo isset($name) ? $name : ''; ?>" required>
                                <span class="text-danger"><?php echo $err_name ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo isset($email) ? $email : ''; ?>" required>
                                <span class="text-danger"><?php echo $error_email ?></span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" required>
                                <span class="text-danger"><?php echo $error_pass ?></span>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" name="create" class="btn btn-primary">Create Account</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="login.php" class="text-decoration-none">Already have an account? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
