@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3 text-center my-4">Books</h1>
        </div>
            <div class="col-12 col-md-2">
                @foreach ($languages as $l)
                    @if ($currLang == $l->Language)
                        @php
                            $className = 'btn-outline-primary';
                        @endphp
                    @else
                        @php
                            $className = 'btn-primary';
                        @endphp
                    @endif

                    <a href="{{ url('') }}/books/{{ $l->Language }}"
                        class="btn {{ $className }} w-100 mb-2">{{ $l->Language }}</a>
                @endforeach
            </div>

            <div class="col-12 col-md-10">
                <div class="container mb-5 ms-0 col-3">
                    <label class="form-label" for="author">Author</label>
                            <select class="form-control" name="author" id="author">
                                <option value="" >-- Select Author --</option>
                                @foreach ($authors as $auth)
                                    <option value="{{ $auth->Author }}">{{ $auth->Author }}</option>
                                @endforeach
                            </select>
                </div>
                <div class="container">
                    <table class="table table-bordered table-sm table-info">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>Image</th>
                                <th>Title</th>
                                <th>Real Years</th>
                                <th>Year</th>
                                <th>Country</th>
                                <th>Wikipedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booksFiltered as $book)
                               <tr class="text-center align-middle">
                                   <td><img src='https://bgs.jedlik.eu/book100/{{ $book->ImageName }}' alt="" class="w-25"></td>
                                   <td>{{ $book->Title }}</td>
                                   <td>{{ $book->RealYears }}</td>
                                   <td>{{ $book->Year }}</td>
                                   <td>{{ $book->Country }}</td>
                                   @if ($book->WikipediaLink)
                                        <td><a href="{{ $book->WikipediaLink }}" target="blank">{{ $book->WikipediaLink }}</a></td>
                                   @else
                                        <td>None</td>
                                   @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
