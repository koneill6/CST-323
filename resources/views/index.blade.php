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
    <link rel="stylesheet" href="public/assets/css/style.css" />
    <title>Library</title>
  </head>
  <body>

    <div class="modal-container" id="modal_container">
      <div class="modal">
        <form class="modal-form" id="sign_in-form" method="POST">
          <label for="fname">Username:</label><br>
          <input type="text" id="Username" name="Username" required><br>
          <label for="lname">Password:</label><br>
          <input type="text" id="Password" name="Password" required><br><br>
          <input class="btn btn--small btn--modal" type="submit" value="Sign In">
        </form>
        <button class="btn btn--small btn--modal" id="close" onclick="document.getElementById('sign_in-form').reset(); document.getElementById('Username').value = null; document.getElementById('Password').value = null; return false;">Cancel</button>
      </div>

      <!-- Use this to login into the site-->
      <?php

      ?>
    </div>
    <div class="container">
      <header>
        <div class="nav-bar">
          <div class="nav-bar-btn">
            <a class="btn btn--big" href="SearchBooks.blade.php">Books</a>
            <a class="btn btn--big" href="Cart.blade.php">Cart</a>
            <a id="open" class="btn btn--big" href="#">Sign in</a>
            <a id="open" class="btn btn--big" href="#">Log Out</a>
          </div>
        </div>
        <div class="header-text-box">
          <h1>Books you are looking for</h1>
          <a class="btn btn--big" href="SearchBooks.blade.php">Find Books</a>
        </div>
        <img src="" alt="Photo" />
      </header>

      <section>
        <h2>Most Popular Books</h2>
        <div class="grid-3-cols">
          <figure class="book">
            <img src="../../public/assets/img/header.jpg" alt="Book" />
            <div class="book-box">
              <h3>Book #1</h3>
              <ul class="book-details">
                <li>

                  <span>Action</span>
                </li>
                <li>

                  <span>Adventure</span>
                </li>
                <li>

                  <span>Treasure</span>
                </li>
                <li>

                  <span>Comradery</span>
                </li>
              </ul>
              <div class="book-price">
                <a href="#" class="btn btn--small">Checkout</a>
              </div>
            </div>
          </figure>

          <figure class="book">
            <img src="../../public/assets/img/comedy.jpg" alt="Book" />
            <div class="book-box">
              <h3>Book #2</h3>
              <ul class="book-details">
                <li>

                  <span>Comedy</span>
                </li>
                <li>

                  <span>Awkwardness</span>
                </li>
                <li>

                  <span>Coming of Age</span>
                </li>
                <li>

                  <span>Misunderstandings</span>
                </li>
              </ul>
              <div class="book-price">
                <a href="#" class="btn btn--small">Checkout</a>
              </div>
            </div>
          </figure>

          <figure class="book">
            <img src="../../public/assets/img/romance.jpg" alt="Book" />
            <div class="book-box">
              <h3>Book #3</h3>
              <ul class="book-details">
                <li>

                  <span>Romance</span>
                </li>
                <li>

                  <span>Betrayal</span>
                </li>
                <li>

                  <span>Murder</span>
                </li>
                <li>

                  <span>Tradition</span>
                </li>
              </ul>
              <div class="book-price">
                <a href="#" class="btn btn--small">Checkout</a>
              </div>
            </div>
          </figure>
        </div>
      </section>

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
