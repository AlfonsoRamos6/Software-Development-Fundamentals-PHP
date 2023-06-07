<!--
Analysis
Once the user has entered a username and password in the username and password fields, the data will be sanitised
Once the data has been entered, the username will be located (if the username exists) in the database
If the count > 0, the emailaddress field has located the username.
Once a user has been found, the data in the password field will be hashed, to check if it matches up with the username in the password field in the database
If the password is seen to be correct, the user will see in the navbar a message saying "Login Successful", meaning the user hsa logged in successfully
If either the username or password are not found in the database (case = 0), an error will be echoed saying "Invalid username or password"


-->



<?php
/**  @var $conn */

if (isset($_POST['login'])) {
    $username = sanitiseData($_POST['username']);
    $password = sanitiseData($_POST['password']);


    $query = $conn->query("SELECT COUNT(*) as count, * FROM Customers WHERE `EmailAddress`='$username'");
    $row = $query->fetchArray();
    $count = $row['count'];

    if ($count > 0) {
        if (password_verify($password, $row['HashedPassword'])) {
            $_SESSION["FirstName"] = $row['FirstName'];
            $_SESSION['EmailAddress'] = $row['EmailAddress'];
            $_SESSION['AccessLevel'] = $row['AccessLevel'];
            $_SESSION['CustomerID'] = $row['CustomerID'];
            header("location:index.php");
        } else {
            header("location:index.php");
            echo "<div class='alert alert-danger'>Invalid username or password</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Invalid username or password</div>";
    }
}
?>
