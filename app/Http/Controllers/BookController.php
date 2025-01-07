<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('home', [
            'books'=>$books
        ]);
    }

    public function listByLanguage(Request $request){
        if (!is_null($request->route('lang'))) {
            $lang = $request->route('lang');
        } else {
            $lang = "";
        }

        $languages = Book::select(['Language'])->distinct()->get();
        $booksByLang = Book::where('Language', $lang)->get();

        return view('books', [
            'languages'=> $languages,
            'currLang'=> $lang,
            'booksByLang'=> $booksByLang,
        ]);
    }
}
