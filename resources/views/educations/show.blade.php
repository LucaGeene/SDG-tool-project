@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br>
                    <li>
                        <h4>{{$education->name}}</h4><br>
                        <h5>{{$education->description}}</h5>
                        <h5>{{$education->body}}</h5>
                    </li>
                </div>
                <div class="col-md-4">
{{--                    @if($education->middleware('auth'))--}}
                        <a id='current-page' href="{{$education->id}}/edit">edit</a>
                        <form method="POST" action="/opleidingen/{{$education->id}}">
{{--                        <form method="POST" action="{{ route('opleidingen.destroy', $education) }}">--}}
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button>
                        </form>
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </main>
@endsection

