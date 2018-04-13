<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class companyController extends Controller
{
    public function index(){
      return view('books.index');
    }

    public function addbookSubmit(Request $r){
       $pic = implode($r->pic,',');
      
       $book_title = $r->book_title;
       $requirements = $r->requirements;
       $com_id = Auth::user()->id;
       $add_book = DB::table('book')->insert([
         'pic' => $pic,
         
         'book_title' => $book_title,
         'requirements' => $requirements,
         'books_id' => $com_id,
       ]);
       if($add_book){
         $jobs = DB::table('books')->where('books_id', Auth::user()->id)
         ->get();
         return view('books.book', compact('jobs'));
       }

    }

    public function viewJobs(){
      $jobs = DB::table('book')->where('books_id', Auth::user()->id)
      ->get();
      return view('books.book', compact('book'));
    }



}
