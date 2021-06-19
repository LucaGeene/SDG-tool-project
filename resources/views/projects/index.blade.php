@extends('layouts.app')

@section('content')
    <div class="col-12 text-center">
        <h1 class="bg-light">De projecten van HZ</h1>
        <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.

        </p>
    </div>

    <div class="container">
        <hr class="my-3" />
        <div class="border-primary border bg-light rounded">
        <h2 class="card-header bg-primary ht-3 text-white">Filter</h2>
        <div class="row">
            <div class="col-md-4 mb-3 mt-3 ml-3">
                <a id='{{ Request::path() === 'projects' ? 'current-page' : '' }}' href="projecten/create" class="btn btn-primary">Project toevoegen</a>
            </div>
{{--             Filter section--}}
            <form action="" method="GET">
                <h3 class="col-md-2">SDG-doelen:</h3>
                <select type="text" class="custom-select col-md-4 mb-3  ml-3" id="goalid" name="goalid">
                    <option>{{ old('goalid') }}</option>
                    @foreach($goals as $goal)
                        <option value="{{$goal->id}}">{{$goal->title}}</option>
                    @endforeach

                </select>
                <div class="col-md-4">
                <h3>Opleidingen:</h3>
                </div>
                <select type="text" class="custom-select col-md-4 mb-3  ml-3" id="education" name="education">
                    <option>{{ old('education') }}</option>
                    @foreach($educations as $education)
                        <option value="{{$education->name}}">{{$education->name}}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-12  ml-3">Filter</button>
                    <a href="/projecten"  class="btn btn-primary mb-12  ml-3">Reset filter</a>
                </div>
            </form>
        </div>
    </div>
    </div>
        <div class="mt-4 offset-2">
            <div class="row">
{{--                <ul>--}}
                    @foreach($projects as $project)
                        @if($project->verified == true)
                                <div class="card-columns">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img
                                            style="height: 300px;"
                                            src="{{ asset('storage/images/'. $project->image_name) }}"
                                            onerror="this.onerror=null; this.src='https://mdbootstrap.com/img/new/standard/nature/184.jpg'"
                                            class="img-fluid rounded"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <h2 class="card-title">
                                            {{$project->title}}
                                        </h2>
                                        <p class="card-text">
                                            {{$project->excerpt}}
{{--                                            Maar niet alles tho--}}
                                        </p>
                                        <a href="projecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                                    </div>
                                </div>
                            <hr class="my-3 col-md-9"/>
                        @endif
                    @endforeach
{{--                    @foreach($projects as $project)--}}
{{--                        @if($project->verified == true)--}}
{{--                        <div class="box">--}}
{{--                            <li><a href="projecten/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>--}}
{{--                                <h5>{{$project->excerpt}}</h5></li>--}}
{{--                        </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
            </div>
        </div>

@endsection
