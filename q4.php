<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        Username:
        <input type="text" name="uname"><br>
        Password:
        <input type="password" name="pass"><br>
        <input type="checkbox" name="terms">
        I agree to the terms and conditions<br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>     
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $uname = $_GET['uname'];
        $password = $_GET['pass'];
        if (isset($_GET['terms'])) {
            $message = "agreed";
        }
        else {
            $message = "not agreed";
        }
        echo "Welcome, $uname. You have $message to the terms and
              conditions.";
    }

    ?>