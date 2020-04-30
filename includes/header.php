<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <link rel=stylesheet" href="css/skills.css" />
    <link rel="stylesheet" href="css/main.css" />

    <?php 
      if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
        $page_name = $_SERVER['REQUEST_URI'];
        console.log($page_name);
          if ($page_name === 'about.php'){
            echo '<title>About Me</title>';
          } elseif($page_name === 'work.php'){
            echo '<title>View my work </title>';
          } elseif($page_name === 'contact.php'){
            echo '<title>Contact me </title>';
          }
        }else{
        echo '<title>Olubisi David - Welcome To My Portfolio</title>';
      }
    ?>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  </head>

<?php
  function console_log($output, $with_script_tags = true) {
      $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
      if ($with_script_tags) {
          $js_code = '<script>' . $js_code . '</script>';
      }
      echo $js_code;
  }
?>

  <body 
      <?php 
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on'){
          $current_page_name = $_SERVER['REQUEST_URI'];
           echo '$current_page_name'; 
          if($current_page_name === 'home.php')
          echo 'id="bg-img"';
        }
      ?>
  >
    <header>
      <div class="menu-btn">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
      </div>

      <nav class="menu">
        <div class="menu-branding">
          <div class="portrait"></div>
        </div>
        <ul class="menu-nav">
          <li class="nav-item current">
            <a href="../index.php" class="nav-link">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a href="../about.php" class="nav-link">
              About Me
            </a>
          </li>
          <li class="nav-item">
            <a href="../work.php" class="nav-link">
              My Work
            </a>
          </li>
          <li class="nav-item">
            <a href="../contact.php" class="nav-link">
              How To Reach Me
            </a>
          </li>
        </ul>
      </nav>
    </header>
  