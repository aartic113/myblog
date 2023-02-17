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
      .form-container {
        width: 50%;
        margin: auto;
        padding: 20px;
        background-color: #f2f2f2;
      }

      /* Style for the input tag */
      input[type="text"],
      textarea {
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
      }

      /* Style for the button tag */
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      /* Style for the button tag when hovered */
      button:hover {
        background-color: #45a049;
      }
    </style>
    <!-- <link rel="stylesheet" href="reset.css" /> -->
    <title>Create Post</title>
  </head>
  <body>
    
      <div class="form-container">
        <form action="" method="POST">
            <input type="text" name="title" placeholder="Enter blog title">
            <textarea name="content" id="" cols="30" rows="30"></textarea>
            <button name="new_post">Add Post</button>
        </form>
      </div>


    <script src="js/script.js"></script>
  </body>
</html>
