@extends('layouts.app')

@section('content')


          {!! Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id],'files'=>true]) !!}


           <div class="form-group">
                     {!! Form::label('title','Title:') !!}
                     {!! Form::text('title',null,['class'=>'form-control']) !!}

                 </div>


              {{csrf_field()}}


            <div class="form-group">

                    {!! Form::file('file',['class'=>'form-control']) !!}

                </div>

              {!! Form::submit('Edit',['class'=>'btn btn-primary btn-block']) !!}


             {!! Form::close() !!}





          {!! Form::model($post,['method'=>'DELETE','action'=>['PostController@destroy',$post->id],'files'=>true]) !!}


           <div class="form-group">
                     {!! Form::label('title','Title:') !!}
                     {!! Form::text('title',null,['class'=>'form-control']) !!}

                 </div>


              {{csrf_field()}}




              {!! Form::submit('Delete!',['class'=>'btn btn-primary btn-block']) !!}


             {!! Form::close() !!}


