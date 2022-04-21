<?php
namespace App\Http\Controllers;
use App\Services\Data\BookDAO;
use App\Services\Data\UserDAO;
use Illuminate\Http\Request;

use App\Models\UserModel;
use App\Services\Data\SecurityDAO;


class UserController extends Controller
{
    public function registerUser(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $mobile = $request->input('phone');
        $password = $request->input('password');
        $roleID = 1;

        $DAO=new UserDAO();
        $user = new UserModel(0, $firstName, $lastName, $email, $mobile, $password, $roleID);
        $DAO->createUser($user);

        return view('auth.login');
    }
    public function login(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $DAO=new SecurityDAO();

        if($DAO->AuthenticateLogin($email, $password)) {
            $UserDAO = new UserDAO();
            $user= $UserDAO->getUserbyEmail($email);
            $data = ['userID' => $user->getId()];
            return view('customer.landingPage')->with($data);
        }
        else
            return view('auth.loginFailed');
    }
                            //    ****************************Customer Controller Methods**********************

}
