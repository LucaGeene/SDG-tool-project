@extends('layouts.app')

@section('content')
    <main>
        <div class="col-12 text-center">
            <h1 class="bg-light">{{$education->name}}</h1>
        </div>
        <hr class="my-3">
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
                <a id='current-page' class="btn-primary btn" href="{{$education->id}}/edit">edit</a>
                </div>
            </div>
        </div>
    </main>
@endsection

