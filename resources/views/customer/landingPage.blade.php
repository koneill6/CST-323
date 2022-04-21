<?php
use App\Services\Data\BookDAO;
use App\Http\Controllers\BookController;

$DAO = new BookDAO();
$books = $DAO->getAllBooks();
?>
@extends('layouts.appCustomer')
@section('title', 'Landing Page')
@section('content')

    <div class="container">
        <div class="search_books_container">
            <div class="search_books_bar">
            </div>
            <div class="available_books">
                <p class="books_list">
                <section>
                    <div style="text-align: center; margin:0px"> <p><strong>Checked Out Books</strong></p></div>
                    <ol class="ol-dashboard">
                        <li class="item-container" style="font-weight: bold">

                            <div>Book ID</div>
                            <div>Title</div>
                            <div>Author</div>
                            <div>Year</div>
                            <div>ISBN #</div>
                            <div>Check Out Date</div>
                            <div>Return Date</div>
                        </li>
                        <?php
                        foreach($books as $book){
                        ?>
                        <li class="item-container">
                            <div><?php echo $book->getID();?></div>
                            <div><?php echo $book->getTitle();?></div>
                            <div><?php echo $book->getAuthor();?></div>
                            <div><?php echo $book->getYear();?></div>
                            <div><?php echo $book->getIsbn();?></div>
                            <div> <?php echo $book->getChecked_out();?></div>
                            <div><?php echo $book->getReturn_date();?></div>

                        </li> <?php } ?>
                        <br>
                        <div style="text-align: left; margin:0px"> <p><strong>Total Books Checked Out:  #</strong></p></div>
                        <div style="text-align: left; margin:0px"> <p><strong>Maximum Books that can be checked out at the same time is 3</strong></p></div>

                    </ol>
                </section>
                </p>
            </div>
            <div class="selected_books">
                <div class="add_to_cart">
                    <p class="books_list_add">
                    <section>
                        <div style="text-align: center; margin:0px"> <p><strong>Books in Cart</strong></p></div>
                        <ol class="ol-dashboard">
                            <li class="cart-container" style="font-weight: bold">

                                <div>Book ID</div>
                                <div>Title</div>
                                <div>Year</div>
                                <div></div>
                            </li>
                            <?php
                            foreach($books as $book){
                            ?>
                            <li class="cart-container">
                                <div><?php echo $book->getID();?></div>
                                <div><?php echo $book->getTitle();?></div>
                                <div><?php echo $book->getYear();?></div>
                                <div>
                                    <a href="#" class="navbar-brand">
                                        <svg style="color: red" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </a>
                                </div>


                            </li> <?php } ?>
                        </ol>
                    </section>
                    </p>
                </div>
                <div class="add_to_cart_controls">
                    <a class="btn btn--big" href="#">CHECKOUT</a>
                </div>
            </div>
        </div>
        <script>
            (function(document) {
                'use strict';

                var TableFilter = (function(myArray) {
                    var search_input;

                    function _onInputSearch(e) {
                        search_input = e.target;
                        var tables = document.getElementsByClassName(search_input.getAttribute('data-table'));
                        myArray.forEach.call(tables, function(table) {
                            myArray.forEach.call(table.tBodies, function(tbody) {
                                myArray.forEach.call(tbody.rows, function(row) {
                                    var text_content = row.textContent.toLowerCase();
                                    var search_val = search_input.value.toLowerCase();
                                    row.style.display = text_content.indexOf(search_val) > -1 ? '' : 'none';
                                });
                            });
                        });
                    }

                    return {
                        init: function() {
                            var inputs = document.getElementsByClassName('search-input');
                            myArray.forEach.call(inputs, function(input) {
                                input.oninput = _onInputSearch;
                            });
                        }
                    };
                })(Array.prototype);

                document.addEventListener('readystatechange', function() {
                    if (document.readyState === 'complete') {
                        TableFilter.init();
                    }
                });

            })(document);
        </script>
@stop
