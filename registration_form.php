<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    <title>home page</title>
    <style>
        body{
            background-color: aqua;
            /* background-image: url(image/kratos-protector-tz-1366x768.jpg); */
            text-align: center;
        }
        .anchor{
            text-decoration: none;
            color: white;
        }
        .anchor :hover{
            color: #000;
        }
    </style>
  </head>
  <body>
    <form action="#" class="form-group" method="post"> 
        <center>
        <h2>Registration Form</h2>
        <div>
            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Enter ur name">
        </div>
        <br>
        <div>
        <label>Age</label>
        <input type="number" id="age" name="age" placeholder="Enter ur age">
        </div>
        <br>
        <div>
        <label>DOB</label>
        <input type="date" name="dob" id="dob" placeholder="Enter ur D.O.B">
        </div>
        <br>
        <div>
            <label>Gender</label>
            <input type="radio" id="gender" name="gender"value="male">Male
    
            <input type="radio" id="gender" name="gender" value="female">Female
        </div>
        <br>
        <div>
            <label>Courses</label>
            <input type="checkbox" id="php" name="php">PHP
            <input type="checkbox" id="c" name="c">C
            <input type="checkbox" id="python" name="python">Python
        </div>
        <br>
        <div>
            <label>Place</label>
            <select id="place" name="place">
                <option>Select ur place</option>
                <option>Tirupur</option>
                <option>Coimbatore</option>
            </select>
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="submit">
            <a href="#" class="anchor">Back</a>
        </div>
        <br>
            <table cellspacing="2px" cellpadding="2px" border="2px">
                <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>ROLL NUM</th>
                    <th>Gender</th>
                    <th>Location</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Varshu</td>
                    <td>RCAS2022BIT147</td>
                    <td>Female</td>
                    <td>Coimbatore</td>
                </t<>
                <tr>
                    <td>2</td>
                    <td>Ridhu</td>
                    <td>RCAS2022BT012</td>
                    <td>Female</td>
                    <td>Coimbatore</td>
                </tr>
            </table> 
  
</center>
    </form>
    </body>
    <script src="js/bootstrap.bundle.min.js"></script>
</html> 
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $date = new DateTime($_POST['dob']);
    $dob = $date->format('Y-m-d');
    // $gender = $_POST['gender'];
    $query = "insert into none (name,age,dob,created_on) values('$name','$age','$dob',NOW())";
    $sql=mysqli_query($conn,$query);
    if($sql){
        echo "Inserted";
    }
    else{
        echo "Failed";
    }
}
?>
