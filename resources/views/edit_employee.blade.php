@extends('layouts.app')

@section('content')
<div class="container">

    <!-- Modal -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Employee</h4>
                </div>
                <div class="modal-body">
                      {!! Form::open(['action' => ['AdminController@update', $SingleEmployee->id], 'method' => 'PUT']) !!}

                    {{--Edit Designation--}}
                    <div class="form-group">
                        {{Form::label('designation','Designation')}}
                        {{Form::text('designation', $SingleEmployee->designation,['class' => 'form-control'])}}
                    </div>

                    {{--Edit Department--}}
                    <div class="form-group">
                        {{Form::label('department','Department')}}
                        {{Form::text('department',$SingleEmployee->department,['class' => 'form-control','placeholder' => $SingleEmployee->id ])}}
                    </div>

                    {{--Add Name--}}
                    <div class="form-group">
                        {{Form::label('name','Name')}}
                        {{Form::text('name',$SingleEmployee->name,['class' => 'form-control','placeholder' => $SingleEmployee->id ])}}
                    </div>

                    {{--Add Email--}}
                    <div class="form-group">
                        {{Form::label('email','Email')}}
                        {{Form::text('email',$SingleEmployee->email,['id' => 'article-ckeditor','class' => 'form-control email', 'placeholder' => 'Email'])}}
                    </div>

                    {{--Add ContactNumber--}}
                    <div class="form-group">
                        {{Form::label('contactNumber','Contact Number')}}
                        {{Form::text('contactNumber',$SingleEmployee->contactNumber,['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Contact Number'])}}
                    </div>

                    {{--Date of birth--}}
                    <div class="form-group">
                        {{Form::label('dateOfBirth','Date of Birth: ')}}
                        {{Form::date('dateOfBirth',$SingleEmployee->dateOfBirth)}}
                    </div>

                    {{--Add password--}}
                    <div class="form-group">
                        {{Form::label('password','Password')}}
                        {{Form::text('password',$SingleEmployee->password,['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Password'])}}
                    </div>


                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Save',['class' => 'btn btn-primary'])}}
                    <a href="/home" class="btn btn-danger">Cancel</a>
                    {!! Form::close() !!}

                </div>

            </div>
        </div>
</div>

@endsection
