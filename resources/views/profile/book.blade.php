@extends('profile.master')
@section('content')

<div class="container">

    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}">Home</a></li>
        <li><a href="{{url('/profile')}}/{{Auth::user()->slug}}">Profile</a></li>
        <li><a href="">books</a></li>
    </ol>


    <div class="row">
        @include('profile.sidebar')


        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><span style="color:green">{{ucwords(Auth::user()->name)}}</span>, books you may be interested in</h4> 1 to 1,000 employees         </div>

                <div class="panel-body">
                         @if ( session()->has('msg') )
                         <p class="alert alert-success">
                                      {{ session()->get('msg') }}
                                   </p>
                                @endif
                  @foreach($book as $books)
                    <div class="booksDiv">
                     <a href="{{url('books')}}/{{$books->id}}">
                      <img src="{{Config::get('app.url')}}/public/img/{{$job->pic}}" class="img-circle books_pic" >
                        <div class="caption">
                        <li><i class="fa fa-briefcase" aria-hidden="true"></i> {{$books->book_title}} </li>

                        <li><i class="fa fa-building-o" aria-hidden="true"></i> {{ucwords($books->name)}}</li>
                      </a>
                                <li> 
                                

                                @endforeach
                                  <a href="{{url('books')}}/{{$books->id}}" style="margin-top:10px; width:100%" class="btn btn-primary">View details</a>
                                </li>
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
