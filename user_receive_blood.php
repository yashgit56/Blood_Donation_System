<?php
    session_start() ;
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    else{
        echo "<script>alert('login before donating blood')</script>" ;
        header('location:login_form.php');
    }
    @include 'config.php' ;

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $phoneno = mysqli_real_escape_string($conn,$_POST['mobileno']);
        $bloodtype = mysqli_real_escape_string($conn,$_POST['bloodtype']);
        $date = date('Y-m-d', strtotime($_POST['date']));
        $city = mysqli_real_escape_string($conn,$_POST['city']);

        $query1 = "select * from branch natural join blood_event where event_date = '$date' and city = '$city' " ;

        $res1 = mysqli_query($conn,$query1) ;
        $result = "" ;
        if(mysqli_num_rows($res1) > 0){
            echo '<script>alert("You can receive blood from this donors at this event")</script>' ;
            if($bloodtype == 'O+'){
                $select = "select * from donor where donor_blood_type in ('O+','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'O-'){
                $select = "select * from donor where donor_blood_type in ('O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'A+'){
                $select = "select * from donor where donor_blood_type in ('A+','A-','O+','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'A-'){
                $select = "select * from donor where donor_blood_type in ('A-','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'B+'){
                $select = "select * from donor where donor_blood_type in ('B+','B-','O+','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'B-'){
                $select = "select * from donor where donor_blood_type in ('B-','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'AB+'){
                $select = "select * from donor" ;// because it can receive blood from any type of blood type donor
                $result = mysqli_query($conn,$select) ;
            }
            else if($bloodtype == 'AB-'){
                $select = "select * from donor where donor_blood_type in ('AB-','A-','B-','O-') " ;
                $result = mysqli_query($conn,$select) ;
            }
        }
        else{
            echo '<script>alert("there is no event on that day")</script>' ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen'></i>
            <div class="menu">
                <div class="logo-toggle">
                    <i class='bx bx-x sidebarClose'></i>
                </div>
                <ul class="nav-links">
                    <li><a href="user_index.php">Home</a></li>
                    <li><a href="user_donate_blood.php">Donate Blood</a></li>
                    <li><a href="">Receive Blood</a></li>
                    <li><a href="user_cards.php">Blood Event</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
            <div class="login-signin">
                <?php
                    echo "Welcome, ".$username ;
                ?>
            </div>
        </div>
    </nav>
    <div class="receive">
        <h2>Fill below details to receive blood</h2>
        <form class="receive_form" action="" method="POST">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="text" name="address" placeholder="Enter your address" required>
            <input type="number" placeholder="Enter your number" name="mobileno" required>
            <input type="text" name="city" placeholder="enter your city">
            Select Your Blood Type <br/><br>
            <select id="" name="bloodtype">
                <option value="O+">O+</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="AB+">AB+</option>
                <option value="O-">O-</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="AB-">AB-</option>
            </select>
            Select the date on which you come for receive the blood <br><br>
            <input type="date" name="date">
            <input type="submit" value="Submit" name="submit" class="rbtn">
        </form>

        <table>
            <tr>
                <th>Donor Id</th>
                <th>Donor Name</th>
                <th>Donor Blood Type</th>
                <th>Donor Address</th>
                <th>Donor Phone No</th>
                <th>Donor Email </th>
            </tr>
        <?php
        @include 'config.php' ;
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo '<tr><td>'.$row["DONOR_ID"].'</td><td>'.$row["DONOR_NAME"].'</td><td>'.$row["DONOR_BLOOD_TYPE"].'</td><td>'.$row["DONOR_ADDRESS"].'</td><td>'.$row["DONOR_PHONENO"].'</td><td>'.$row["DONOR_EMAIL"].'</td><td>' ;
                }
            }
        ?>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>