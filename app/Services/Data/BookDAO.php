<?php

/*
 * ---------------------------------------------------------------
 * Name      : Group Assignment
 * Date      : 2022-04-09
 * Class     : CST-323 Cloud Computing
 * Professor : Bradley Mauger PhD
 * Assignment: Milestone
 * Disclaimer: This is my own work
 * ---------------------------------------------------------------
 * Description:
 * 1. DAO - Books (Libary Properties)
 * 2. Various Books CRUD
 * 3.
 * ---------------------------------------------------------------
 * Revision History:
 * Name            Date       Description
 * --------------- ---------- ------------------------------------
 * Kelly           2022-04-09 Initial Creation
 *
 *
 * ---------------------------------------------------------------
 */

namespace App\Services\Data;
use Illuminate\Support\Facades\DB;
use App\Models\BookModel;

class BookDAO
{
    public function __construct()
    {}

    // -------------------------------------------------------------------
    // Create Functionality Methods
    // -------------------------------------------------------------------

    public function createBook($bookModel)
    {
		$title = $bookModel->getTitle();
		$author = $bookModel->getAuthor();
		$publisher = $bookModel->getPublisher();
		$date = $bookModel->getDate();
		$genre = $bookModel->getGenre();
		$isbn = $bookModel->getIsbn();
		$checked_out = $bookModel->getChecked_out();
		$checkout_user_id = $bookModel->getCheckout_user_id();
		$checkout_date = $bookModel->getCheckout_date();
		$return_date = $bookModel->getReturn_date();
		$due_date = $bookModel->getDue_date();

        $sql = 'INSERT INTO books (TITLE, AUTHOR, PUBLISHER, DATE, GENRE, ISBN, CHECKED_OUT, CHECKOUT_USER_ID, CHECKOUT_DATE, RETURN_DATE, DUE_DATE) ' .
               'VALUES (?,?,?,?,?,?,?,?,?,?,?)';
        DB::insert($sql, [$title, $author, $publisher, $date, $genre, $isbn, $checked_out, $checkout_user_id, $checkout_date, $return_date, $due_date]);

        // Get the id for the book just created
        $book_id = DB::getPdo()->lastInsertId();
        $bookModel->setID($book_id);

        return $bookModel;
    }


    // -------------------------------------------------------------------
    // Retrieve Functionality Methods
    // -------------------------------------------------------------------

    public function getAllBooks(): array
    {
        $books = array();
        $index = 0;

        $rows = DB::select('SELECT * FROM books ORDER BY ID ASC');

        foreach ($rows as $row)
        {
			$book = new BookModel($row->ID,
								  $row->TITLE,
								  $row->AUTHOR,
								  $row->PUBLISHER,
								  $row->DATE,
								  $row->GENRE,
								  $row->ISBN,
								  $row->CHECKED_OUT,
								  $row->CHECKOUT_USER_ID,
								  $row->CHECKOUT_DATE,
								  $row->RETURN_DATE,
								  $row->DUE_DATE);
            $books[$index] = $book;
            ++$index;
        }

        return $books;
    }

    public function getBooksSearch($title, $author, $isbn, $genre)
    {
        $books = array();
        $index = 0;

        $sql = "SELECT * FROM books WHERE TITLE LIKE ? OR AUTHOR LIKE ? OR ISBN LIKE ? OR GENRE LIKE ? ORDER BY ID ASC'";
        $data = [$title, $author, $isbn, $genre];
        $rows = DB::select($sql, $data);

        foreach ($rows as $row)
        {
			$book = new BookModel($row->ID,
								  $row->TITLE,
								  $row->AUTHOR,
								  $row->PUBLISHER,
								  $row->DATE,
								  $row->GENRE,
								  $row->ISBN,
								  $row->CHECKED_OUT,
								  $row->CHECKOUT_USER_ID,
								  $row->CHECKOUT_DATE,
								  $row->RETURN_DATE,
								  $row->DUE_DATE);
            $books[$index] = $book;
            ++$index;
        }

        return $books;
    }

    public function getBookByID($book_id)
    {
        $row = DB::select('SELECT * FROM books WHERE ID = ?', [$book_id]);

        $book = new BookModel($row[0]->ID,
                              $row[0]->TITLE,
                              $row[0]->AUTHOR,
                              $row[0]->PUBLISHER,
                              $row[0]->DATE,
                              $row[0]->GENRE,
                              $row[0]->ISBN,
                              $row[0]->CHECKED_OUT,
                              $row[0]->CHECKOUT_USER_ID,
                              $row[0]->CHECKOUT_DATE,
                              $row[0]->RETURN_DATE,
                              $row[0]->DUE_DATE);

        return $book;
    }


    // -------------------------------------------------------------------
    // Update Functionality Methods
    // -------------------------------------------------------------------

    public function updateBook($bookModel)
    {
    	$book_id = $bookModel->getId();
		$title = $bookModel->getTitle();
		$author = $bookModel->getAuthor();
		$publisher = $bookModel->getPublisher();
		$date = $bookModel->getDate();
		$genre = $bookModel->getGenre();
		$isbn = $bookModel->getIsbn();
		$checked_out = $bookModel->getChecked_out();
		$checkout_user_id = $bookModel->getCheckout_user_id();
		$checkout_date = $bookModel->getCheckout_date();
		$return_date = $bookModel->getReturn_date();
		$due_date = $bookModel->getDue_date();

        $sql = 'UPDATE books SET TITLE = ?, AUTHOR = ?, PUBLISHER = ?, DATE = ?, GENRE = ?, ISBN = ?, CHECKED_OUT = ?, CHECKOUT_USER_ID = ?, CHECKOUT_DATE = ?, RETURN_DATE = ?, DUE_DATE = ? WHERE ID = ?';
        $data = [$title, $author, $publisher, $date, $genre, $isbn, $checked_out, $checkout_user_id, $checkout_date, $return_date, $due_date, $book_id];
        $count = DB::update($sql, $data);

        return $count;
    }

    // -------------------------------------------------------------------
    // Delete Functionality Methods
    // -------------------------------------------------------------------

    public function deleteBook($book_id)
    {
        $count = DB::delete('DELETE FROM books WHERE ID = ?', [$book_id]);
        return $count;
    }
}

?>
