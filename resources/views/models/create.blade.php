@extends('layout')
@section('content')
    <h3>Create</h3>
    <form action="/models" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        ID: <input type="text" name="id"><br>
        Foo: <input type="text" name="foo"><br>
        Bar: <input type="text" name="bar"><br>
        <input type="submit"><br>
    </form>


    @if(count($errors)>0)
        <p>{{$errors->first()}}</p>
    @endif
@endsection
