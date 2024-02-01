<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    name : <label>
        <input type="text" name="nimi" value="smq" required><br><br>
    </label>
    age : <label>
        <input type="text" name="age" value="12" required><br><br>
    </label>
    Email: <label>
        <input type="email" name="email" value="a@b.com" required><br><br>
    </label>
    DOB: <input type="date" name="dob"> <br><br>
    select color: <input type="color" name="color"> <br><br>
    <input type="submit" value="Submit" name="sub1">
</form>
<form name="test">
    <input type="text"><br><br>
    <input type="submit" value="Submit" name="sub2">
</form>
<?php
    if (isset($_POST['sub1'])){
        $name = $_POST['nimi'];
        $age = $_POST['age'];
        if ($age < 18) {
            echo "<h3>Hi $name, you are not allowed to vote.</h3>";
        }
        else{
            echo "<h3>Hi $name, you are welcome to vote.</h3>";
        }
    }
?>
</body>
</html>





