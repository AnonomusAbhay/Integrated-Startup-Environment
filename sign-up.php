<?php
 include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ISE</title>
    <!-- CSS  -->
    <link rel="stylesheet" href="css/Mystyle.css" />
    <!-- <link rel="stylesheet" href="css/footer_style.css" /> -->
    <link rel="stylesheet" href="css/box_stylef.css" />
    <link rel="stylesheet" href="css/sign-up.css">
    <!-- end CSS -->
    <!-- OTHER LINKS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
      <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/footer_style1.css" />
    <!-- end OTHER -->
    <!-- BootStrap Css -->
    <!-- <link rel="stylesheet" href="css/BS_css/css/BS.min.css" /> -->
    <!-- end BS css -->
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="Navbar ">
      <div class="logo">
        ISE
        <!-- <img src="isebg/Logo.png" width="20%" alt="" /> -->
      </div>
      <input type="checkbox" id="navtoggle" />
      <label for="navtoggle" class="icon-btn">
        <i class="fas fa-bars"></i>
      </label>
      <ul class="nav-ul">
        <li clas><a  href="index.html">Home</a></li>
        <li><a href="index.html">SCommunity</a></li>
        <li><a href="index.html">HierDev</a></li>
        <li><a href="medHistory.html">Stratups</a></li>
        <li><a href="index.html">About us</a></li>
        <li class="dashnav">|</li>
        <button class=" btnclass active-" >Sign-in</button>
        <button class="btnclass">Log-out</button>
      </ul>
    </nav>
    <!-- NAVBAR END -->
     <!-- sign-up -->
     <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login_signup.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="loginusername" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="loginpass" placeholder="Password"  autocomplete="on" />
            </div>
            <input type="submit" name="loginu" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="login_signup.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
               <div class="input-field">
              <i class="fas fa-user"></i>
              <input   onkeyup="validateFullName()"
                id="FullName"
                name="fullname"
                type="text"
                autocomplete="off"
                placeholder="Full Name"  required/>
               <div class="icons">
            <span class="iconnamef fas fa-exclamation"></span>
            <span class="iconnamet fas fa-check"></span>
               </div>
            </div>
            <div class="error-text-name"><p id="errormsgname">  </p></div>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input   onkeyup="validate()"
                id="username"
                name="username"
                type="text"
                autocomplete="off"
                placeholder="Username"  required/>
               <div class="icons">
            <span class="icon1 fas fa-exclamation"></span>
            <span class="icon2 fas fa-check"></span>
               </div>
            </div>
            <div class="error-text"><p id="errormsg"> </p></div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input   onkeyup="check()"
            id="email"
            name="email"
            type="text"
            autocomplete="off"
            placeholder="Enter Email Address"  required/>
               <div class="icons">
            <span class="icon1-1 fas fa-exclamation"></span>
            <span class="icon2-1 fas fa-check"></span>
               </div>
            </div>
            <div class="error-text1"><p id="errormsg1"> </p></div>

            
            <div class="input-field">
              <i class="fas fa-lock"></i>
                <input   onkeyup="passvalidate()"
            id="pass"
            name="pass"
            type="password"
            placeholder="Enter Password" autocomplete="on"/>
               <div class="icons">
            <span class="iconpassf fas fa-exclamation"></span>
            <span class="iconpasst fas fa-check"></span>
               </div>
            </div>
            <div class="error-text-pass"><p id="errormsgpass"> </p></div>

             <div class="input-field">
              <i class="fas fa-lock"></i>
                <input   onkeyup="passvalidateconf()"
            id="passconf"
            name="passc"
            type="password"
            placeholder="Confirm Password" autocomplete="on"/>
               <div class="icons">
            <span class="iconconpassf fas fa-exclamation"></span>
            <span class="iconconpasst fas fa-check"></span>
               </div>
            </div>
            <div class="error-text-conpass"><p id="errormsgconpass"> </p></div>
              
              <select class="input-field" name="role" id="role"  required>
                <i class="fas fa-lock"></i>  
                <option >--- Select Role ---</option>
                  <option  value="Developer">Developer</option>
                  <option value="Investor">Investor</option>
                  <option value="Innovator">Innovator</option>
              </select>
            
            <input type="submit" name="signup" class="btn" value="Sign up" />
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
            Join amazing community of startup,Developer, Innovators and Investors AND
            convert your amazing idea into startup
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Sign-in to meet our startup,Developer, Innovators and Investors community again 
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
     <!-- end sign-up -->
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

    <!-- <script src="css/BS_css/js/BS.min.js"></script> -->
   
     <script src="js/signup.js"></script>
    
     </body>
</html>
