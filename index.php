<?php
// session
session_start();
if( !isset($_SESSION["login"])){
  header("Location: Login");
  exit;
}

require 'functions.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/icon.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Dicky Setiawan</title>
  </head>
  <body>
    <section class="home" id="home">
      <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
      <a class="navbar-brand" href="" id="navbar-brand">
        <img src="assets/img/icon.png" alt="" width="33" height="30" style="margin-right: 3px;">Dicky</a>
      <a class="navbar-toggler link" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <i class='bx bx-menu icon'></i>
      </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-item">
          <li class="nav-item">
            <a class="nav-link" href="#home" id="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" id="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skill" id="nav-link">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#comunity" id="nav-link">team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project" id="nav-link">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout" id="nav-link">Logout</a>
          </li>
          </ul>
         </div>
        </div>
      </nav>
     <img src="assets/img/imghome.png" class="home-img">
      <div class="circle"></div>
     
      <div class="home-title" data-aos="zoom-in-up">
        <p class="home-subtitle">Hello</p>
        <p class="home-subtitle-1">I Am Dicky Setiawan</p>
        <p class="home-subtitle">Software Enginer</p>
        <div class="home-button">
          <a href="#about" class="link"><button class="btn btn-1" type="button">View Portfolio</button></a>
          <a href="" class="link"><button class="btn btn-2" type="button">Download CV</button></a>
        </div>   
      </div>
    
    </section>
    <section class="about" id="about">
      <h2 align="center" class="about-title">About</h2>
      <img src="assets/img/about-img.png" class="about-img" data-aos="fade-right">
      <div class="about-items" data-aos="zoom-in">
        <h3 class="items-title"><span class="span">Hi, welcome to</span> my profile!</h3>
        <p class="about-text" ><span class="span">My name is Di</span>cky Setiawan, I am 16 years<span class="span-1"> old, born </span>in <span class="span-2">Jakarta</span>, and a Muslim. i am a game developer , a web developer , just learned few months ago , my major is software engineering , i am very determined to be more than my friends who are in the same department as me</p>
        <a target="_blank" rel="noopener noreferrer" href="https://id.wikipedia.org/wiki/Pengembangan_permainan_video" class="link"><button class="btn about-button" type="button">Game</button></a>
        <a target="_blank" rel="noopener noreferrer" href="https://id.wikipedia.org/wiki/Pengembangan_web" class="link"><button class="btn about-button" type="button">Web</button></a>
        <a target="_blank" rel="noopener noreferrer" href="https://en.wikipedia.org/wiki/Mobile_app_development" class="link"><button class="btn about-button" type="button">Mobile</button></a>
        <h5 class="items-title mt-3">Social Media</h5>

        <div class="social-media">
          <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/dickysetiawans_/" class="link" id="ig"><i class='bx bxl-instagram about-icon'></i></a>
          <a target="_blank" rel="noopener noreferrer" href="https://web.facebook.com/profile.php?id=10002533954039" class="link" id="fb"><i class='bx bxl-facebook-circle about-icon'></i></i></a>
          <a target="_blank" rel="noopener noreferrer" href="https://github.com/dickysetiawans" class="link"><i class='bx bxl-github about-icon'></i></i></button></a>
        </div>
      </div>
      
    </section>
    <section class="skill" id="skill">
      <h2 align="center" data-aos="fade-down">Skills</h2>
      <div class="bar-items" data-aos="zoom-in-down">
        <p style="font-weight: bold;">HTML</p>
        <div class="bar">
          <div class="skills-bar html"></div>
        </div>
        <!-- css -->
        <p style="font-weight: bold;">CSS</p>
        <div class="bar">
          <div class="skills-bar css"></div>
        </div>
        <!-- js -->
        <p style="font-weight: bold;">Javascript</p>
        <div class="bar">
          <div class="skills-bar js"></div>
        </div>
      </div>

      <div class="bar-items-1" data-aos="zoom-in-down">
        <p style="font-weight: bold;">Python</p>
        <div class="bar">
          <div class="skills-bar python"></div>
        </div>
        <!-- php -->
        <p style="font-weight: bold;">PHP</p>
        <div class="bar">
          <div class="skills-bar php"></div>
        </div>    
      </div>

      <div class="bar-items-2" data-aos="zoom-in-down">
        <p style="font-weight: bold;">MySQL</p>
        <div class="bar">
          <div class="skills-bar mysql"></div>
        </div>
        <!-- Postgre SQL -->
        <p style="font-weight: bold;">Postgre SQL</p>
        <div class="bar">
          <div class="skills-bar postgre"></div>
        </div>    
      </div>

      <div class="bar-items-3" data-aos="zoom-in-down">
        <p style="font-weight: bold;">Pygame</p>
        <div class="bar">
          <div class="skills-bar pygame"></div>
        </div>
        <!-- Postgre SQL -->
        <p style="font-weight: bold;">Django</p>
        <div class="bar">
          <div class="skills-bar django"></div>
        </div>
        <!-- Laravel -->
        <p style="font-weight: bold;">Laravel</p>
        <div class="bar">
          <div class="skills-bar laravel"></div>
        </div>   
      </div>

      <div class="bar-items-4"data-aos="zoom-in-down">
        <p style="font-weight: bold;">UI/UX Desainer</p>
        <div class="bar">
          <div class="skills-bar ui-ux"></div>
        </div>
        <p style="font-weight: bold;">Web Desainer</p>
        <div class="bar">
          <div class="skills-bar web-desainer"></div>
        </div>
      </div>
    </section>
    <section class="comunity" id="comunity">
      <img src="assets/img/indosec.png" class="comunity-img" data-aos="zoom-in">
      <div class="comunity-items">
        <h2 class="comunity-title" data-aos="fade-right">{ Indosec }</h2>
        <p class="comunity-text" data-aos="fade-right">{IndoSec} Is a community that
        focuses on technology in Indonesia
        from Creating, Securing, and
        Exploiting a system.</p>
        <div class="comunity-items-link" data-aos="fade-up">
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/_indosec_/" class="btn btn-primay community-link"><i class='bx bxl-instagram comunity-icon'></i></a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UC7ifmbZznQyLFxj8AOq-kKw" class="btn btn-primay community-link"><i class='bx bxl-youtube comunity-icon'></i></a>
            <a target="_blank" rel="noopener noreferrer" href="https://indosec.id/" class="btn btn-primay community-link"><i class='bx bx-globe comunity-icon'></i></a>
            <a target="_blank" rel="noopener noreferrer" href="https://discord.gg/73Ktcn7b" class="btn btn-primay community-link"><i class='bx bxl-discord-alt comunity-icon'></i></a>
        </div>
      </div>
    </section>
    <section class="project" id="project">
      <h2 class="project-title" data-aos="fade-right">My Project</h2>
      <div class="project-items-1" data-aos="zoom-in-down">
        <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/p/CKCAM_XD4my/" class="project-link"><i class='bx bx-play'></i></a>
        <img src="assets/img/game-1.png" class="project-img"><br>
        <i class='bx bx-planet project-icon'></i>
        <h5 class="project-subtile">Space Shooter</h5> 
        <p class="project-text">Game Developer</p>  
      </div>
      <div class="project-items-2" data-aos="zoom-in-down">
        <a href="" class="project-link"><i class='bx bx-play'></i></a>
        <img src="assets/img/game-2.png" class="project-img" ><br>
        <i class='bx bxl-unsplash project-icon'></i>
        <h5 class="project-subtile">Crystall Mario</h5> 
        <p class="project-text">Game Developer</p>  
      </div>
      <div class="project-items-3" data-aos="zoom-in-down">
        <img src="assets/img/web-1.png" class="project-img" id="project-img"><br>
        <i class='bx bx-globe project-icon'></i>
        <h5 class="project-subtile">Sharing Coffee</h5> 
        <p class="project-text">Web Developer</p>  
      </div>
      <div class="project-items-4" data-aos="zoom-in-down">
        <img src="assets/img/web-2.png" class="project-img" id="project-img"><br>
        <i class='bx bxl-figma project-icon'></i>
        <h5 class="project-subtile">Cafe</h5> 
        <p class="project-text">UX/UI Desainer</p>  
      </div>
    </section>
    <footer style="margin-top: 50px;">
      <p align="center">Copyright <i class='bx bx-copyright'></i> 2020 • All rights reserved • Created with <i class='bx bxs-heart' style="color:red;"></i> By Dicky S</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script>
      AOS.init();
      $(window).scroll(scroll);
      function scroll() {
        var tempScrollTop = $(window).scrollTop();
        console.log(tempScrollTop.toString());
      };
    </script>
    
</html>