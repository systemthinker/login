@extends('layouts.app')

@section('content')


          {!! Form::open(['method'=>'post','action'=>'PostController@store','files'=>true]) !!}


           <div class="form-group">
                     {!! Form::label('title','Title:') !!}
                     {!! Form::text('title',null,['class'=>'form-control']) !!}

                 </div>


              {{csrf_field()}}


            <div class="form-group">

                    {!! Form::file('file',['class'=>'form-control']) !!}

                </div>

              {!! Form::submit('Submit!',['class'=>'btn btn-primary btn-block']) !!}


             {!! Form::close() !!}


          {!! Form::close() !!}