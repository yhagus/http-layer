@extends('layout')
@section('content')
    <h3>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Foo</td>
                <td>Bar</td>
            </tr>
            @foreach ($models as $model)
            <tr>
                <td>{{$model->id}}</td>
                <td>{{$model->foo}}</td>
                <td>{{$model->bar}}</td>
            </tr>
            @endforeach
        </table>
    </h3>
    <h3>Index</h3>


    @if(session()->has('status'))
        <p>{{session()->get('status')}}</p>
    @endif
@endsection
