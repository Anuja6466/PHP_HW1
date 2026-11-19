
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        FullName:
        <input type="text" name="fname"><br>
        Phone Number:
        <input type="number" name="phnno"><br>
        Car brand:
        <select name="carbrand">
            <option value="toyoto">Toyoto</option>
            <option value="ford">Ford</option>
            <option value="tesla">Tesla</option>
        </select><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = $_POST['fname'];
        $phnno = $_POST['phnno'];
        $carbrand = $_POST['carbrand'];
        echo ": Hello, $fname. Your phone number is $phnno and your
            preferred car brand is $carbrand.";
    }
    ?>
</body>
</html>
