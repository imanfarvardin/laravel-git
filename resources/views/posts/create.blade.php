{{--// Created by iman farvardin--}}

@extends('layouts.app')

@section('content')

    @if($errors->any())
        <ul>
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </div>
        </ul>
    @endif
    {!! Form::open(['method'=>'POST','action'=>'PostsComtroller@store', 'files'=>true]) !!}
    <div class="form-group">
        {!! Form::Label ('title', 'عنوان:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label ('description', 'توضیحات:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label (' file', 'تصویر اصلی :') !!}
        {!! Form::file('file', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('ذخیره ', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب ">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب "></textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">ذخیره </button>--}}
{{--    </form>--}}

@endsection
