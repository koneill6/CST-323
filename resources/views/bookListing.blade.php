<?php
    use App\Services\Data\BookDAO;
    use App\Http\Controllers\BookController;

    $DAO = new BookDAO();
        $books = $DAO->getAllBooks();
?>

@extends('layouts.appMaster')
@section('title', 'Login')
@section('content')
    <section><button class="btn btn-primary" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 15%;border-radius: 100px;margin-bottom: 10px;"><strong>GOTO CART</strong></button>
        <div class="col-md-12 search-table-col" style="margin-top: 0px;color: #087f5b;">
            <h1>BOOK LISTINGS</h1>
            <div class="form-group pull-right col-lg-4"><input data-table="book-list" type="search" class="form-control search-input" placeholder="Search by typing here.." style="border-style: solid;border-top-width: 3px;border-top-color: #087f5b;border-right-width: 3px;border-right-color: #087f5b;border-bottom-color: #087f5b;border-left-width: 3px;border-left-color: #087f5b;"></div><span class="counter pull-right"></span>
            <div class="table-responsive table table-hover table-bordered results">
                <table class="table table-hover table-bordered mt32 book-list">
                    <thead class="text-uppercase bill-header cs" style="background: #087f5b; color:white;">
                    <tr>
                        <th id="trs-hd-1" class="col-lg-1" style="width: 1%;">Book ID</th>
                        <th id="trs-hd-2" class="col-lg-2" style="width: 10%;">Title</th>
                        <th id="trs-hd-7" class="col-lg-2" style="width: 5%;">Author</th>
                        <th id="trs-hd-5" class="col-lg-2" style="width: 5%;">Publisher</th>
                        <th id="trs-hd-3" class="col-lg-3" style="width: 2%;">Year</th>
                        <th id="trs-hd-8" class="col-lg-2" style="width: 5%;">ISBN #</th>
                        <th id="trs-hd-6" class="col-lg-2" colspan="4" style="width: 12%;">GeNRe</th>
                        <th id="trs-hd-6" class="col-lg-2" colspan="1" style="width: 2%;"><strong>DATE</strong><br><strong>AVAILABLE</strong></th>
                        <th id="trs-hd-9" class="col-lg-2" colspan="1" style="width: 2%;"></th>
                        <th id="trs-hd-4" class="col-lg-2" colspan="1" style="width: 6%;"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($books as $book){
                        ?>
                        <tr>
                            <td><?php echo $book->getID();?></td>
                            <td><?php echo $book->getTitle();?></td>
                            <td><?php echo $book->getAuthor();?></td>
                            <td><?php echo $book->getPublisher();?></td>
                            <td><?php echo $book->getDate();?></td>
                            <td><?php echo $book->getIsbn();?></td>
                            <td style="width: 3%;"><?php echo $book->getGenre();?></td>
                            <td style="width: 3%;">Romance</td>
                            <td style="width: 3%;">Romance</td>
                            <td style="width: 3%;">Romance</td>
                            <td><?php echo $book->available();?></td>
                            <td style="width: 3%;"><button class="btn btn-primary" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 80%;border-radius: 100px;margin-bottom: 10px;">TO CART</button></td>
                            <td style="width: 3%;"><button class="btn btn-primary" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 80%;border-radius: 100px;margin-bottom: 10px;">INFO</button></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </section>
@stop
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
