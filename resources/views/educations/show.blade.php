@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <br>
{{--                    Displays the information from selected education                    --}}
                    <li>
                        <h4>{{$educations->name}}</h4><br>
                        <h5>{{$educations->description}}</h5>
                        <h5>{{$educations->body}}</h5>
                    </li>
                </div>
            </div>
        </div>
    </main>
@endsection

