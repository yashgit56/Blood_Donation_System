<?php
    session_start() ;
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
    else{
        header('location:cards.html');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link rel="stylesheet" href="card_style.css">
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
                    <li><a href="user_receive_blood.php">Receive Blood</a></li>
                    <li><a href="">Blood Event</a></li>
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
    <div class="container">
        <div class="box"> 
            <h3> Ahmedabad</h3>
            <p>
               <b> Venue:</b> Near madhav udhyan road pulin society part2 naroda, Ahmedabad.<br><br>
               <b>Date: </b> 16 Dec,2023.<br>   
               <b>Time: </b> 9:00AM to 1:00PM.<br><br>
               <b>Organized By: Arjun Maniya, Kevla Patel</b> 

            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">1</span>
        </div>
        <div class="box"> 
            <h3> Dwarka</h3>
            <p>
               <b>Venue:</b>  Government Hospital main road, bhatiya.<br><br>
               <b>Date: </b> 21 Apr,2023.<br>   
               <b>Time: </b> 10:00AM to 2:00PM.<br><br>
               <b>Organized By: Gautam Kanjariya, Gojiya Khushi</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">2</span>
        </div>
        <div class="box"> 
            <h3> Arvalli</h3>
            <p>
               <b> Venue:</b> 4 gayatrinagar society malpur road, modasa, Arvalli.<br><br>
               <b>Date: </b> 25 June,2023.<br>   
               <b>Time: </b> 11:00AM to 3:00PM.<br><br>
               <b>Organized By: Pritesh Umraniya, Riddhi Joshi</b>
                
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">3</span>
        </div>
        <div class="box"> 
            <h3> Jamnagar</h3>
            <p>
               <b> Venue:</b> SAMVED VOLUNTARY BLOOD BANK & RESEARCH CENTER-JAMNAGAR.<br><br>
               <b>Date: </b> 16 December,2023.<br>   
               <b>Time: </b> 1:00PM to 4:00PM.<br><br>
               <b>Organized By: Yash Vataliya, Vedang Joshi</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">4</span>
        </div>
        <div class="box"> 
            <h3> Rajkot</h3>
            <p>
                <b> Venue:</b> Life Blood Centre (formerly known as Rajkot Voluntary Blood Bank & Research Centre).<br><br>
                <b>Date: </b> 8 May,2023.<br>   
                <b>Time: </b> 3:00PM to 5:00PM.<br><br>
                <b>Organized By: Manan Kadiya, Namra Gandhi</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">5</span>
        </div>
        <div class="box"> 
            <h3> Surat</h3>
            <p>
                <b> Venue:</b> Surat Raktadan Kendra & Research Centre, Surat.<br><br>
                <b>Date: </b> 6 May,2023.<br>   
                <b>Time: </b> 5:00PM to 7:00PM.<br><br>
                <b>Organized By: Aryan Mehta, Gautam Kanjariya</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">6</span>
        </div>
       
        <div class="box"> 
            <h3> Kheda</h3>
            <p>
                <b>Venue:</b> 9 Chanakya park society college road nadiad,Kheda.<br><br>
                <b>Date: </b> 24 September,2023.<br>   
                <b>Time: </b> 10:00AM to 1:00PM.<br><br>
                <b>Organized By: Fenil Modi</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">7</span>
        </div>
       
        <div class="box"> 
            <h3> Kutch</h3>
            <p>
                <b> Venue:</b> satsanyukta society, gaytari mandir road bhuj, Kutch.<br><br>
                <b>Date: </b> 15 July,2023.<br>   
                <b>Time: </b> 8:00AM to 10:00AM.<br><br>
                <b>Organized By: Sarthi Kalathiya, Dev Mehta</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">8</span>
        </div>
       
        <div class="box"> 
            <h3> Porbandar</h3>
            <p>
                <b> Venue:</b> Khijadi Plot, Panch Hatdi, Porbandar.<br><br>
                <b>Date: </b> 9 October,2023.<br>   
                <b>Time: </b> 3:00PM to 6:00PM.<br><br>
                <b>Organized By: Sandip Kanzariya, Akshayraj Chauhan</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">9</span>
        </div>
       
        <div class="box"> 
            <h3> Junagadh</h3>
            <p>
                <b> Venue:</b> Ground & 1st Floor, Vikram Commercial Complex, Sardar Baug Road, opposite HP Petrol Pump, Junagadh.<br><br>
                <b>Date: </b> 3 January,2023.<br>   
                <b>Time: </b> 10:00AM to 12:00PM.<br><br>
                <b>Organized By: Nilay Kansagra, Sandip Lakhtariya</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">10</span>
        </div>
       
        <div class="box"> 
            <h3> Bhavnagar</h3>
            <p>
               <b>Venue: </b> Q49V+VV4, Bhavnagar, Kalanala, Panwadi, Bhavnagar.<br><br>
               <b>Date: </b> 16 February,2023.<br>   
               <b>Time: </b> 4:00PM to 7:00PM.<br><br>
               <b>Organized By: Dhruv Dabhi, Rushi Gandhi</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">11</span>
        </div>
       
        <div class="box"> 
            <h3> Anand</h3>
            <p>
               <b>Venue:</b> Gems Plaza, 3rd Floor, Railway Station Rd, near D. N. High School, Anand.<br><br>
               <b>Date: </b> 25 March,2023.<br>   
               <b>Time: </b> 11:00AM to 3:00PM.<br><br>
               <b>Organized By: Hitarth Patel, Raj Pansara</b> 
            </p>
            <a href="user_donate_blood.php"><button>Donate Blood</button></a>
            <a href="user_receive_blood.php"><button>Receive Blood </button></a>
            <span class="count">12</span>
        </div>      
    </div>
    <script src="script.js"></script>
</body>
</html>