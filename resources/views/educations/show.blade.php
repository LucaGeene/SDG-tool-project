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
            </div>
        </div>
    </main>
@endsection

