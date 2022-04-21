<?php
use App\Services\Data\BookDAO;
use App\Http\Controllers\BookController;

$DAO = new BookDAO();
$books = $DAO->getAllBooks();
?>


<table class="table table-hover table-bordered mt32 book-list table-dashboard">
    <thead class="text-uppercase bill-header cs thead-dashboard" style="background: #087f5b; color:white">
    <tr>
        <th id="trs-hd-1" class="col-lg-1" style="width: 1%;">Book ID</th>
        <th id="trs-hd-2" class="col-lg-2" style="width: 10%;">Title</th>
        <th id="trs-hd-7" class="col-lg-2" style="width: 5%;">Author</th>
        <th id="trs-hd-5" class="col-lg-2" style="width: 10%;">Publisher</th>
        <th id="trs-hd-3" class="col-lg-3" style="width: 2%;">Year</th>
        <th id="trs-hd-8" class="col-lg-2" style="width: 5%;">ISBN #</th>
        <th id="trs-hd-6" class="col-lg-2" colspan="1" style="width: 2%;">GeNRe</th>
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
        <td><?php echo $book->available();?></td>
        <td style="width: 3%;"><button class="btn btn-primary btn-xs" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 80%;border-radius: 100px;margin-bottom: 10px;"></button></td>
        <td style="width: 3%;"><button class="btn btn-primary btn-xs" type="button" style="margin: 14px;background: #087f5b;color: #fff;width: 80%;border-radius: 100px;margin-bottom: 10px;"></button></td>
    </tr>
    </tbody>
    <?php } ?>
</table>
</div>
</div>
</section>
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
