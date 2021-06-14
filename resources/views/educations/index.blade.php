@extends('layouts.app')

@section('content')
    <div class="col-12 text-center">
        <h1 class="bg-light">De opleidingen van HZ</h1>
        <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.

        </p>
    </div>

    <div class="container col-10">
        <hr class="my-5" />
    </div>
{{--    <div class="container">--}}
        <div class="row">
            <div class="col-md-8">
                <ul>
                    @foreach($educations as $education)
                        <div class="box bg-danger m-3">
                            <li>
                                <a href="opleidingen/{{$education->id}}"><b><h4>{{$education->name}}</h4></b></a>
                                <h5>{{$education->description}}</h5><br>
                            </li>
                        </div>
                    @endforeach
                </ul>
            </div>
{{--        </div>--}}
    </div>
@endsection
