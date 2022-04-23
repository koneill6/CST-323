<?php
use App\Services\Data\BookDAO;
use App\Http\Controllers\BookController;

$DAO = new BookDAO();
$books = $DAO->checkedOutBooks($userID);
?>
<ol class="grid-item grid-item-3 .grid-dashboard">
    <li class="checkout-container container-item container-header">
        <div>Title</div>
        <div>Check Out Date</div>
        <div>Due Date</div>
    </li>
    <?php

    foreach($books as $book){
    ?>
    <li class="checkout-container container-item">
        <div><?php echo $book->TITLE;?></div>
        <div> <?php echo $book->CHECKOUT_DATE;?></div>
        <div><?php echo $book->DUE_DATE;?></div>

    </li> <?php } ?>
    <br>
    <div style="text-align: left; margin:0px"> <p><strong>Total Books Checked Out:  #</strong></p></div>
    <div style="text-align: left; margin:0px"> <p><strong>Maximum Checkout is 3</strong></p></div>

</ol>
