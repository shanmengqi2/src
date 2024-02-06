<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="processed.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupid">Group ID:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<form name="search" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    First Name: <label>
        <input name="fn" placeholder="first name">
    </label>
    LAST Name:
    <label>
        <input name="ln" placeholder="last name">
    </label>
    City:
    <label>
        <input name="city" placeholder="City">
    </label>

    <input type="submit" name="search" value="search">

</form>

<?php
global $conn;
    if(isset($_POST['search'])){
        $firstName = $_POST['fn'];
        $lastName = $_POST['ln'];
        $city = $_POST['city'];


        include 'db.php';
        $conditions = [];
        if(!empty($firstName)){
            $conditions[] = "first_name = '$firstName'";
        }
        if(!empty($lastName)){
            $conditions[] = "last_name = '$lastName'";
        }
        if(!empty($city)){
            $conditions[] = "city = '$city'";
        }
        $whereClause = '';
        if(!empty($conditions)){
            $whereClause = 'where ' . implode(' AND ',$conditions);
        }


        //$sql = "select * from studentinfo where first_name = '$firstName' AND last_name = '$lastName' AND city = '$city'";

        $sql = "SELECT * FROM studentinfo $whereClause";
        echo $sql;

        $result = $conn ->query($sql);

        if ($result === false) {
            // 查询失败，输出错误信息
            echo "Error: " . $conn->error;
        }

        echo "<table border='1'>";
        echo "<tr><th>first name</th><th>last name</th><th>city</th></tr>";

        while($row = $result ->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["first_name"] . "</td>";
            echo "<td>" . $row["last_name"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<tr>";
        }

        echo "</table>";

        $conn -> close();
    }
?>
