@extends('layouts.app')

@section('content')
    <h1> به صفحه ویو خوش آمدید </h1>

    <h3>  آی دی این ویو برابر است با : {{ $id }} </h3>
    <h3>  نام کاربری برابر است با  : {{ $name }} </h3>
    <h3> گذرواژه  برابر است با : {{ $password }} </h3>
@endsection

@section('footer')

    <p>در این قسمت بعدا فوتر قرار میگیرد 📕</p>

@endsection
