<?php
namespace App\Http\Controllers;
use App\Models\BookModel;
use App\Models\UserModel;
use App\Services\Data\BookDAO;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class BookController extends Controller
{
    public function moreInfo(Request $request): Factory|View|Application{
        $bookID = $request->input('bookID');
        $DAO = new BookDAO();
        $book = $DAO->getBookByID($bookID);
        $data = ['bookID' => $bookID];

        return view('moreInfo')->with($data);
    }

}
