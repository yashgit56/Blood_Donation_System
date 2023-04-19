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

        $query1 = "select * from blood_event where event_date = '$date'" ;
        $query2 = "select * from branch where city = '$city' " ;

        $res1 = mysqli_query($conn,$query1) ;
        $res2 = mysqli_query($conn,$query2) ;

        if(mysqli_num_rows($res1) && mysqli_num_rows($res2)){
            $insert = "INSERT INTO `donor`(`DONOR_NAME`, `DONOR_BLOOD_TYPE`, `DONOR_ADDRESS`, `DONOR_PHONENO`, `DONOR_EMAIL`) VALUES ('$name','$bloodtype','$address','$phoneno','$email')" ;
            $result = mysqli_query($conn,$insert) ;
            echo '<script>alert("see you at the blood event")</script>' ;
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
                    <li><a href="">Donate Blood</a></li>
                    <li><a href="user_receive_blood.php">Receive Blood</a></li>
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
    <div class="donate">
        <h2>Fill below details to donate blood</h2>
        <form class="donate_form" action="" method="POST">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="text" name="address" placeholder="Enter your address" required>
            <input type="number" placeholder="Enter your number" name="mobileno" required>
            <input type="text" placeholder="enter your event city" name="city" required>
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
            Select the date on which you come for donate blood <br><br>
            <input type="date" name="date">
            <input type="submit" name="submit" value="Submit" class="dbtn">
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>