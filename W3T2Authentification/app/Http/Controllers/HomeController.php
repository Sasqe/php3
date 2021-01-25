<?php
namespace App\Http\Controllers;
/*Milestone 1
 * V1
 * Chris King
 * 01/24/2021
 * HomeController.php
 *Contains the MVC Controller for the home view of the app
 */
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
