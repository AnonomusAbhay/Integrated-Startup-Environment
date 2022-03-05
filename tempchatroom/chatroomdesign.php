
 <!-- checking signedin user or not -->

<?php
session_start();
  include_once "../connection.php";
  if(!isset($_SESSION['username'])){
     echo "<script> alert('Plzz sign in first');
         window.location.href='../sign-up.php';</script>";
  }
?>
 
 <!-- end checking signedin user or not -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="chatroomdesign2.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <!-- CSS  -->
    <link rel="stylesheet" href="../css/Mystyle.css" />

    <link rel="stylesheet" href="../css/box_stylef.css" />
    <!-- end CSS -->
    <!-- OTHER LINKS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link rel="stylesheet" href="../css/footer_style1.css" />
    <!-- end OTHER -->
    <!-- BootStrap Css -->
    <link rel="stylesheet" href="../css/BS_css/css/BS.min.css" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="Navbar fixedParallex">
      <div class="logo">
        ISE
        <!-- <img src="isebg/Logo.png" width="20%" alt="" /> -->
      </div>
      <input type="checkbox" id="navtoggle" />
      <label for="navtoggle" class="icon-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul class="nav-ul">
        <li clas><a class="active-" href="index.php">Home</a></li>
        <li><a href="index.php">SCommunity</a></li>
        <li><a href="index.php">HierDev</a></li>
        <li><a href="startup.php">Stratups</a></li>
        <li><a href="index.php">About us</a></li>
        <li><a href="tempchatroom/chatroom.php">chatroom</a></li>
        <li class="dashnav">|</li>
        <a href="sign-up.php"><button class="btnclass">Sign-in</button></a>
        <button class="btnclass">Log-out</button>
      </ul>
    </nav>
    <!-- NAVBAR END -->

   <!-- fetching receiver user details -->
        <?php 
          $Id = mysqli_real_escape_string($conn, $_GET['Id']);
          // echo "$Id";
          $query="SELECT * FROM `login_signup` WHERE `Id`= {$Id}";
          $sql = mysqli_query($conn, $query );
           
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);// row has all receiver user details :)
          }else{
            echo "<script> alert('user not exsits');
          window.location.href='../user.php';</script>";
          }
         
        ?>
   <!-- end fetching receiver user details -->



    <div class="ousidecontainer">
      <div class="insidecontainer">
        <div class="profilechat">
          <div class="userprofside">
             <div class="profimgside">
                <img
                class="imageprof"
                src="profimg/userprof.png"
                
                alt=""
              />
             </div>
          </div>
          <div class="profnameside">
            <h3><?php  
            echo "$_SESSION[username]";
             ?></h3>
          </div>
          <div class="profbtn">
           <input type="submit" name="Editprof" class="btn3 editbtn" value="Edit" />
           <input type="submit" name="Logout" class="btn3 logoutbtn" value="Logout" />
          </div>
        </div>
        <div class="chatbox">
          <div class="chattitle">
            <div class="profpicbox">
              <img
                class="profimg"
                src="profimg/userprof.png"
                width="5vw"
                alt=""
              />
            </div>
            <div class="profname">
              <div class="nametitle">
                <h2><?php echo"$row[Uname]" ?></h2>
              </div>
              <div class="status">
                <h5>online</h5>
              </div>
            </div>
          </div>
          <div class="chatmsgbox">
           
          </div>


          <form action="#" class="typing-area" method="post">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $Id; ?>" hidden>
            
          <div class="msginputbox">
            <input
              class="msginput"
              type="text"
              placeholder="Type Message"
              name="message"
              id="input-field"
            />

            <div class="sendicon">
              <button class="sendbtn">
                <img src="profimg/send-message.png" alt="">
              </button>
          </form>
              <!-- <i class="fa-solid fa-paper-plane-top"></i> -->
            </div>
          </div>
        </div>
      </div>
    </div>
       <!-- FOOTER -->
      <footer>
        <section class="footer-cls">
          <p class="logo">&leftrightsquigarrow;</p>
        </section>
        <div class="footer-content">
          <div class="first">
            <h3>Quick Links</h3>
            <ul>
              <li>Home</li>
              <li>Startup Updates</li>
              <li>About Us</li>
              <li>Contact Us</li>
            </ul>
          </div>
          <div class="first">
            <h3>Our Services</h3>
            <ul>
              <li>Join Community</li>
              <li>Apply for Jobs</li>
              <li>Borrow a Developer</li>
              <li>Startups</li>
            </ul>
          </div>
          <div class="first">
            <h3>Explore</h3>
            <ul>
              <li>Share Idea</li>
              <li>Invest</li>
              <li>Start Development</li>
              <li>Get Hired</li>
            </ul>
          </div>
          <div class="second">
            <h3>Support Us</h3>
            <div class="icon-flex">
              <i class="fab fa-facebook fa-fw"></i>
              <i class="fab fa-instagram fa-fw"></i>
              <i class="fab fa-linkedin fa-fw"></i>
              <i class="fab fa-twitter fa-fw"></i>
             
            </div>
          </div>
        </div>

        <section class="cpyrgt">
          <p>&copy;All Rights Are Reserved To ISE</p>
        </section>
      </footer>
    </div>
    <!-- FOOTEREND -->

     <script src="../js/chat.js"></script>

  </body>
</html>
