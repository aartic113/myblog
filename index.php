<?php
  include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      h1{
        color: red;
      }
    </style>
    <!-- <link rel="stylesheet" href="reset.css" /> -->
    <title>Aarti Chandnani</title>
  </head>
  <body>
    <nav class="nav">
      <div class="container">
        <h1 class="logo"><a href="/index.html">Aarti Chandnani</a></h1>
        <ul>
          <li><a href="#about-me" class="current">Home</a></li>

          <li><a href="create.php" class="current">New Post</a></li>

          <!-- <li><a href="#hobbies">Hobbies</a></li>
          <li><a href="#my-cv">My CV</a></li>
          <li><a href="#links">Links</a></li> -->
        </ul>
      </div>
    </nav>



    <div class="hero">
      <div class="container">
        <!-- <h1>First Year Student at QMUL</h1> -->
        <p>Studying BSc Computer Science</p>
      </div>
    </div>
    
    <?php if (isset($_REQUEST['info'])){ ?>
  
        <?php if (isset($_REQUEST['info'])=="added"){ ?>
        <div>
          post has been added successfully.
        </div>
        <?php } ?>
    <?php } ?>

    <?php foreach($query as $q) {?>

    <section id="hobbies">
      <section class="container content">
        <h3><?php echo $q['title'];?></h3>
          <p><?php echo $q['content'];?></p>
      </section>
    </section>

    <?php } ?>

   <br>


<!--     
    <hr />
    <footer>
      <p>Copyright <span>&copy;</span> 2023 Aarti Chandnani</p>
    </footer> -->

    <script src="js/script.js"></script>
  </body>
</html>
