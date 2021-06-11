@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br>
                    <li>
                        <h4>{{$educations->name}}</h4><br>
                        <h5>{{$educations->description}}</h5>
                        <h5>{{$educations->body}}</h5>
                    </li>
                </div>
                <div class="col-md-4">
                        <a id='current-page' href="{{$educations->id}}/edit">edit</a>
                </div>
            </div>
        </div>
    </main>
@endsection

