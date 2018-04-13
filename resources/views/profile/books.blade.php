@extends('profile.master')

@section('content')

<div class="container">

    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}">Home</a></li>
        <li><a href="{{url('/profile')}}/{{Auth::user()->slug}}">Profile</a></li>
        <li><a href="{{url('/book')}}">Books</a></li>
        <li>{{$book[0]->book_title}}</li>
    </ol>


    <div class="row">
        @include('profile.sidebar')


        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{Auth::user()->name}}, may you interested in these book
                  <br>
                  <a href="{{url('book')}}">All books</a>
                </div>

                <div class="panel-body">
                    <div class="col-sm-12 col-md-12 booksDetails">
                         @if ( session()->has('msg') )
                         <p class="alert alert-success">
                                      {{ session()->get('msg') }}
                                   </p>
                                @endif
                        @foreach($book as $books)
                    <h4 >
                      <b>{{ucwords($books->name)}}</b> need <b>{{$books->book_title}}</b>
                    </h4>

                    <div class="row books_books">

                      <div class="col-md-2 pull-left">
                      <img src="{{Config::get('app.url')}}/public/img/{{$books->pic}}" class="img-rounded" style="width:100px; height:100px; margin:5px; border:1px solid #ddd; padding:5px">
                      </div>

                      <div class="col-md-10 pull-left">
                        <h3 style="font-size:18px; color:green">
                          {{ucwords($books->name)}}</h3>
                        
                      </div>

                    </div>

                        <div class="col-md-12" >
                          <h3 class="books_point">
                          Requirements: </h3>
                          <p>{{$books->requirements}}</p>
                        </div>

                        

                        


                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
