<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiController extends Controller
{
    public function index(){
      $books=Book::get();
      return Response::json($books);
    }
}
