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
          <input class="btn btn--small btn--modal" type="submit" value="Sign In">
        </form>
        <button class="btn btn--small btn--modal" id="close" onclick="document.getElementById('sign_in-form').reset(); document.getElementById('Username').value = null; document.getElementById('Password').value = null; return false;">Cancel</button>
      </div>
    </div>
    <div class="container">
      <header class="search_books_header">
        <div class="nav-bar">
          <div class="nav-bar-btn">
            <a class="btn btn--big" href="index.blade.php">Home</a>
            <a class="btn btn--big" href="Cart.blade.php">Cart</a>
            <a id="open" class="btn btn--big" href="#">Sign in</a>
            <a id="open" class="btn btn--big" href="#">Log Out</a>
          </div>
        </div>
      </header>

      <div class="search_books_container">
        <div class="search_books_bar">
            <form class="book_search_form" method="POST">
              <label for="bookId">Book ID:</label>
              <input type="text" id="bookId" name="bookId" required>
              <label for="bookName">Book Name:</label>
              <input type="text" id="bookName" name="bookName" required>
              <label for="author">Author:</label>
              <input type="text" id="author" name="author" required>
              <input class="btn btn--small btn--search" type="submit" value="Search">
            </form>
        </div>
        <div class="available_books">
            <p class="books_list">
              place holder for list of books from DB
              <!-- Use this to update the found books-->
              <?php

              ?>
            </p>
        </div>
        <div class="selected_books">
          <div class="add_to_cart">
            <p class="books_list_add">
              place holder for chosen books to be added to cart
              <!-- Use this to update the books that the user wants to add to cart-->
              <?php

              ?>
            </p>
          </div>
          <div class="add_to_cart_controls">
            <a class="btn btn--big" href="#">Add to Cart</a>
          </div>
        </div>
      </div>


      <footer>
        Copyright &copy; 2027 by Kody O'Neill for personal and educational use only.
      </footer>
    </div>
    <script>
      const open = document.getElementById('open');
      const modal_container =document.getElementById('modal_container');
      const close = document.getElementById('close');

      open.addEventListener('click', ()=>{
        modal_container.classList.add('show');
      })

      close.addEventListener('click', ()=>{
        modal_container.classList.remove('show');
      })

    </script>
  </body>
</html>
