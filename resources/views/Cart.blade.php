<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Search</title>
  </head>
  <body>
    <div class="modal-container" id="modal_container">
      <div class="modal">
        <form action="login_handler.php" class="modal-form" id="sign_in-form">
          <label for="fname">Username:</label><br>
          <input type="text" id="Username" name="Username" required><br>
          <label for="lname">Password:</label><br>
          <input type="text" id="Password" name="Password" required><br><br>
          <input class="btn btn--small btn--modal" type="submit" id= "signin" value="Sign In">
        </form>
        <button class="btn btn--small btn--modal" id="close" onclick="document.getElementById('sign_in-form').reset(); document.getElementById('Username').value = null; document.getElementById('Password').value = null; return false;">Cancel</button>
      </div>
    </div>
    <div class="container">
      <header class="search_books_header">
        <div class="nav-bar">
          <div class="nav-bar-btn">
            <a class="btn btn--big" href="index.blade.php">Home</a>
            <a class="btn btn--big" href="SearchBooks.blade.php">Books</a>
            <a id="open" class="btn btn--big" href="#">Sign in</a>
            <a id="open" class="btn btn--big" href="#">Log Out</a>
          </div>
        </div>
      </header>

      <div class="cart_container">
        <div class="selected_checkout_books">
          <div class="checkout_cart">
            <p class="checkout_list">
              place holder for chosen books to be checked out
              <!-- Use this to update the books that the user wants to add to cart-->
              <?php

              ?>
            </p>
          </div>
          <div class="checkout_controls">
            <p class="number_of_books">
              Total Books: 1<?php ><!-- here it to echo total number of books -->
            </p>

            <a class="btn btn--big" href="#">Checkout</a>
          </div>
        </div>
      </div>


      <footer>
        Copyright &copy; 2027 by Kody O'Neill for personal and educational use only.
      </footer>
    </div>
    <script>
      const open = document.getElementById('open');
      const modal_container = document.getElementById('modal_container');
      const close = document.getElementById('close');
      const signin = document.getElementById('sign_in');

      open.addEventListener('click', ()=>{
        modal_container.classList.add('show');
      })

      close.addEventListener('click', ()=>{
        modal_container.classList.remove('show');
      })

    </script>
  </body>
</html>
