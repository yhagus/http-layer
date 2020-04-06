@extends('layout')
@section('content')
    <h3>show model</h3>
    <table>
        <tr>
            <td>ID: </td>
            <td>{{$model->id}}</td>
        </tr>
        <tr>
            <td>Foo: </td>
            <td>{{$model->foo}}</td>
        </tr>
        <tr>
            <td>Bar: </td>
            <td>{{$model->bar}}</td>
        </tr>
    </table>
    <h3>Showmodel</h3>
    @if(session()->has('status'))
        <p>{{session()->get('status')}}</p>
    @endif
@endsection
