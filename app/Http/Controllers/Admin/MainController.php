<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use Auth;

class MainController extends Controller
{
 public function index()
    {
        $user = Auth::user();
        return view('admin.index', compact('user'));
    }

}