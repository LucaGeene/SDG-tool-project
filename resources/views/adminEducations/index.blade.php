@extends('layouts.app')

@section('content')
    <hr class="my-5" />
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul>
                    @foreach($educations as $education)
                        <div class="box">
                            <li>
                                <a href="adminEducations/{{$education->id}}"><b><h4>{{$education->name}}</h4></b></a>
                                <h5>{{$education->description}}</h5><br>
                            </li>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
