<!DOCTYPE html>
<html>
  <head>
    <title>My Registration</title>
	  <link rel="stylesheet" href="styles.css" />
  </head>
  <style>
    body {
  width: 100%;
  height: 100vh;
  margin: 0;
  background-color: #1b1b32;
	color: #f5f6f7;
  font-family: Tahoma;
	font-size: 16px;
}

h1, p {
  margin: 1em auto;
  text-align: center;
}

form {
  width: 60vw;
	max-width: 500px;
	min-width: 300px;
	margin: 0 auto;
  padding-bottom: 2em;
}

fieldset {
  border: none;
	padding: 2rem 0;
}

fieldset:not(:last-of-type) {
  border-bottom: 3px solid #3b3b4f;
}

label {
  display: block;
	margin: 0.5rem 0;
}

input,
textarea,
select {
  margin: 10px 0 0 0;
	width: 100%;
  min-height: 2em;
}

input, textarea {
  background-color: #0a0a23;
  border: 1px solid #0a0a23;
  color: #ffffff;
}

.inline {
  width: unset;
  margin: 0 0.5em 0 0;
  vertical-align: middle;
}

input[type="submit"] {
  display: block;
  width: 60%;
  margin: 1em auto;
  height: 2em;
  font-size: 1.1rem;
  background-color: #3b3b4f;
  border-color: white;
  min-width: 300px;
}

input[type="file"] {
  padding: 1px 2px;
}

a {
  color: #dfdfe2;
}

.sex {
    text-align: start;
}

  </style>
  <body>
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required information</p>
    <form>
      <fieldset>
        <label>Full Name: <input type="text" name="full_name" required /></label>
        <label>Email: <input type="text" name="Email" required /></label>
        <p class="sex">Male</p><input type="radio" name="sex" value="male">
        <p class="sex">Female</p><input type="radio" name="sex" value="female">
        <label>Username: <input type="text" name="username" required /></label>
        <label>Password: <input type="password" name="password" required /></label>
      </fieldset>
      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

<?php

include "../assignment/dbconn.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $last_name = $_POST['full_name'];
        $email = $_POST['Email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
    
        if (isset($_POST['sex'])) {
            $gender = $_POST['sex'];
        } else {
            $gender = ''; 
        }

    $sql = "INSERT INTO `registration`(`full_name`, `sex`, `email`, `username`, `password`) VALUES
    ('full_name', '$last_name', '$sex', '$email', '$username', '$password')";

    if ($connection->query($sql) === TRUE) {
        echo "Registered Successfully";
    } else {
        echo "Error: " . $connection->error;
    }
    $connection->close();
}
?>

<script>
function myFunction() {
    var x = document.getElementById("Data");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
