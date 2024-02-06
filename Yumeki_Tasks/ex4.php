<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">


</head>
<body>
<?php include 'header.php'?>
<div class="content bg-light">
    <h5>2. If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h5>
    <form method="post" name="vote" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label>Name: <input type="text" name="nimi" value="smq"></label>
        <label>Age: <input type="number" name="age" value="17"></label>
        <input type="submit" value="Submit" name="sub1">
    </form>
    <?php
        if(isset($_POST['sub1'])){
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

    <h5>
        3. Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not: It's August, so it's still holiday. Not August, this is Month-name so I don't have any holidays Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.
    </h5>
    <?php
        $cMonth = date("F");
        switch ($cMonth){
            case "August" :
                echo "It's August, so it's still holiday.";
                break;
            default :
                echo "Not August, this is $cMonth so I don't have any holidays."."<br> <br>";
        }

    ?>

    <h5>
        4. For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).
    </h5>

    <form method="post" name="mul" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label>Number: <input type="number" name="numInput"></label><br><br>
        <label><input type="submit" value="Submit" name="sub3"></label>
    </form>
    <?php
        if(isset($_POST['sub3'])){
            $num = $_POST['numInput'];
            for($i=0;$i<9;$i++){
                echo $num . "*" . ($i+1) . "=" . $num*($i+1) . "<br>";
            }
        }
    ?>

    <h5>
        5. While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)
    </h5>
    <form method="post" name="oneton" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label>Number: <input type="number" name="numInput"></label><br><br>
        <input type="submit" value="Submit" name="sub4">
    </form>
    <?php
    if(isset($_POST['numInput'])){
        $num = $_POST['sub4'];
        $i = 0;
        while($i<$num){
            echo $i+1 . " ";
            $i++;
        }
    }
    ?>

    <h5>
        6. Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").
    </h5>

    <?php
        $myArray = array("HTML", "CSS", "PHP", "JavaScript");
        foreach ($myArray as $Value) {
            echo $Value . " ";
        }
    ?>
</div>
<?php include 'footer/footer.php'?>
</body>
</html>


