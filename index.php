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
  <?php include'commoncode/commoncss.php'?>
    <style>
      .fixedParallex {
        position: fixed;
      }
      .fixedParallexcar {
        position: fixed;
        top: 10vh;
        width: 100vw;
      }

      .main {
        position: absolute;
        top: 650px;
      }

      @media only screen and (max-width: 910px) {
        .main {
          position: static;
        }
      }

      @media only screen and (max-width: 950px) {
        .carousel,
        .Navbar {
          position: static;
        }

        .carousel-control-next {
          z-index: 0;
        }
      }
    </style>
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
         <li><a href="tempchatroom/chatroomdesign.php">chatroom</a></li>
         <li><a href="user.php">tempuser</a></li>
        <li class="dashnav">|</li>
        <a href="sign-up.php"><button class="btnclass">Sign-in</button></a>
        <button class="btnclass">Log-out</button>
      </ul>
    </nav>
    <!-- NAVBAR END -->
    <!-- CArouse -->

    <div
      id="carouselExampleInterval"
      class="carousel slide fixedParallexcar"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner" style="position: relative">
        <div class="carousel-item active" data-bs-interval="10000">
          <div class="in_carosouel_text">
            <div class="Text_center">
              <div class="h1incar">
                <h1>WELCOME TO ISE</h1>
              </div>
              <div class="sloganincar">
                <h4>Integrated Startup Environment</h4>
              </div>
              <div class="paraincar">
                <p>
                  Join a huge community of developers and startups to buid your
                  own startup with the help of us
                </p>
              </div>
              <div class="btn">
                <a href="sign-up.php"
                  ><button class="btnclass2">Join us</button></a
                >
              </div>
            </div>
          </div>
          <img
            src="isebg/isebg6.jpg"
            class="d-block w-100 imgincar"
            alt="carouselimg"
          />
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <div class="in_carosouel_text">
            <div class="Text_center">
              <div class="h1incar">
                <h1>WELCOME TO ISE</h1>
              </div>
              <div class="sloganincar">
                <h4>Integrated Startup Environment</h4>
              </div>
              <div class="paraincar">
                <p>
                  Join a huge community of developers and startups to buid your
                  own startup with the help of us
                </p>
              </div>

              <div class="btnincar">
                <a href="sign-up.php"
                  ><button class="btnclass2">Join us</button></a
                >
              </div>
            </div>
          </div>
          <img
            src="isebg/isebg8.jpg"
            class="d-block w-100 imgincar"
            alt="carouselimg"
          />
        </div>
        <div class="carousel-item">
          <div class="in_carosouel_text">
            <div class="Text_center">
              <div class="h1incar">
                <h1>WELCOME TO ISE</h1>
              </div>
              <div class="sloganincar">
                <h4>Integrated Startup Environment</h4>
              </div>
              <div class="paraincar">
                <p>
                  Join a huge community of developers and startups to buid your
                  own startup with the help of us
                </p>
              </div>
              <div class="btn">
                <a href="sign-up.php"
                  ><button class="btnclass2">Join us</button></a
                >
              </div>
            </div>
          </div>
          <img
            src="isebg/isebg111.jpg"
            class="d-block w-100 imgincar"
            alt="carouselimg"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleInterval"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- end carousel -->
    <!--  box-->
    <div class="main">
      <section class="boxes">
        <section class="why-sec">
          <h1>Why ISE ?</h1>
          <p>
            Integreted Startup Environment(ISE) is a online community platform
            for Innovators,Developers and Investors , Join our community to
            build your own startup
          </p>
          <button class="btnclass2">Read More</button>
        </section>
        <section class="box">
          <div class="front">
            <div class="upper">
              <div class="mid">
                <img src="isebg/community.jpg" width="25%" alt="Reload" />
              </div>
            </div>
            <div class="down">
              <h4>Commmunity</h4>
              <p class="lorem-paragraph">
                Want to explore innovative ideas and want to be a part of
                startup community ?
              </p>
            </div>
          </div>
          <div class="back">
            <p class="center">
              Want to explore innovative ideas and want to be a part of startup
              community ? then join community and convert your Idea into startup
            </p>
          </div>
        </section>
        <section class="box">
          <div class="front">
            <div class="upper">
              <div class="mid">
                <img src="isebg/hier.jpg" width="25%" alt="Reload" />
              </div>
            </div>
            <div class="down">
              <h4>Hier Dev</h4>
              <p class="lorem-paragraph">
                Want to hire a developer for your work?
              </p>
            </div>
          </div>
          <div class="back">
            <p class="center">Hier a developer for your work</p>
          </div>
        </section>
        <section class="box">
          <div class="front">
            <div class="upper">
              <div class="mid">
                <img src="isebg/startup2.jpg" width="25%" alt="Reload" />
              </div>
            </div>
            <div class="down">
              <h4>Startup</h4>
              <p class="lorem-paragraph">Interasted in ongoing Startups ?</p>
            </div>
          </div>
          <div class="back">
            <p class="center">
              Join Startup community and Explore all ongoing Startups and Get
              hired by desired Startup
            </p>
          </div>
        </section>
      </section>
      <!-- endbox -->
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

    <script src="css/BS_css/js/BS.min.js"></script>
  </body>
</html>
