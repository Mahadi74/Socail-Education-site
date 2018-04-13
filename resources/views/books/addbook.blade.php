@extends('books.master')
<style>
  #job_head{
  color:rgb(6, 99, 52); font-weight:bold;
  }
</style>
@section('content')
<div class="content">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-md-6">
                    <div class="card">
                         <div class="header">
                             <h4 class="title">Add new book</h4>
                             <p class="category">sub heading here</p>
                         </div>
                         <div class="content">

                          <div class="form-group">
                          {{Form::open(['url' =>'books/addbookSubmit'])}}
                          {{Form::label('book Title')}}
                          {{Form::text('book_title',null,['class' =>'form-control'])}}
                          </div>

                          <h4 id="book_head">image</h4>
                          <div class="row">
                            <?php // use proper css styling ?>

                          <li style="margin:15px; float:left; list-style:none">
                            {{Form::label('HTML')}}
                          {{Form::checkbox('skills[]', 'HTML')}}
                          </li>
                          <li style="margin:15px; float:left; list-style:none">
                          {{Form::label('CSS')}}
                          {{Form::checkbox('skills[]', 'CSS')}}
                          </li>
                          <li style="margin:15px; float:left; list-style:none">
                          {{Form::label('PHP')}}
                          {{Form::checkbox('skills[]', 'PHP')}}
                          </li>
                          </div>

                          <h4 id="book_head">Requirements</h4>
                          <div class="form-group">
                           {{Form::textarea('requirements',null,
                           ['class'=>'form-control', 'rows' => 3, 'cols' => 40])}}
                         </div>

                          

                             <div class="footer">
                                 <div class="legend">

                                 </div>
                                 <hr>
                                 <div class="stats">

                                 </div>
                             </div>
                         </div>
                          </div>
                 </div>

                 <div class="col-md-6">
                     <div class="card">
                         <div class="header">
                           <h4 class="title">Heading here</h4>
                           <p class="category">sub heading here</p>
                         </div>
                         <div class="content">

                             <div class="footer">
                                 <div class="legend">

                                  </div>
                                 <hr>
                                 <div class="stats">

                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>



         </div>
     </div>
     @endsection
