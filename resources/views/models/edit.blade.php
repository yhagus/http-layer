@extends('layout')
@section('content')
    <h3>Edit</h3>
    <form action="/models/{{$model->id}}" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        Foo: <input type="text" name="foo" value="{{$model->foo}}"><br>
        Bar: <input type="text" name="bar" value="{{$model->bar}}"><br>
        <button type="submit" name="_method" value="PUT">Save</button>
        <button type="submit" name="_method" value="DELETE">Delete</button>
    </form>

    @if(count($errors)>0)
        <p>{{$errors->first()}}</p>
    @endif
@endsection
