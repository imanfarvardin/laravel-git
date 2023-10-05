{{--// Created by iman farvardin--}}

@extends('layouts.app')

@section('content')


<h1>ویرایش فرم</h1>

{!! Form::model($post, ['method'=>'PATCH','action'=>['PostsComtroller@update',$post->id]]) !!}
<div class="form-group">
    {!! Form::Label ('title', 'عنوان:') !!}
    {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label ('description', 'توضیحات:') !!}
    {!! Form::textarea('description', $post->content, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('بروز رسانی  ', ['class' => 'btn btn-warning']) !!}
</div>
{!! Form::close() !!}

{!! Form:: model ($post, ['method' => 'DELETE', 'action' => [ 'PostsComtroller@destroy', $post->id]]) !!}
    <div class="form-group">
        {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
    </div>
{!! Form::close() !!}



{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PATCH">--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب " value="{{$post->title}}">--}}
{{--        <br/>--}}
{{--        <textarea type="text" name="description" placeholder="توضیحات مطلب ">{{$post->content}}</textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">بروز رسانی </button>--}}
{{--    </form>--}}

{{--<form method="post" action="/posts/{{$post->id}}">--}}
{{--    @csrf--}}
{{--    <input type="hidden" name="_method" value="DELETE">--}}

{{--    <button type="submit" name="submit"> حذف  </button>--}}
{{--</form>--}}

@endsection
