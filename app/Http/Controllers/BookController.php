<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function listBooks(Request $request){
        if (!is_null($request->route('lang'))) {
            $lang = $request->route('lang');
        } else {
            $lang = "English";
        }

        if (!is_null($request->author)) {
            $auth = $request->author;
        } else {
            $auth = "";
        }

        $languages = Book::select(['Language'])->distinct()->get();
        $authors = Book::where('Language', $lang)->select(['Author'])->distinct()->get();

        $booksFiltered = Book::where('Language', $lang)->where('Author','LIKE', '%'.$auth.'%')->get();

        return view('books', [
            'languages'=> $languages,
            'authors'=> $authors,
            'currLang'=> $lang,
            'currAuth'=> $auth,
            'booksFiltered'=> $booksFiltered,
        ]);
    }
}
