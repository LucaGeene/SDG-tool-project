@extends('layouts.app')

@section('content')
    <main class="mt-3">
    <div class="col-12 text-center">
        <h1 class="bg-light">Projecten adminpagina</h1>
        <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.

        </p>
    </div>
    <div class="container">
        <hr class="my-3" />
        <div class=" border-primary border bg-light rounded">
        <h2 class="card-header bg-primary text-white">Filter</h2>

            <div class="col-md-4 mb-3 mt-3">
                <a id='{{ Request::path() === 'projects' ? 'current-page' : '' }}' href="projecten/create" class="btn btn-primary">Project toevoegen</a>
            </div>
                <form action="" method="GET">
                    <!--Searchbar-->
                    <h3 class="col-md-2 ml-3">Search:</h3>
                    <input type="text" class="mb-1 col-md-4 form-control border-dark ml-3" name="search" id="search"/>

                    <label class="col-md-1 mb-3" for="verified">verified:</label>
                    <input class="form-check-input" type="radio" name="verify" value="1"/>
                    <label class="col-2 mb-3" for="verified">not verified:</label>
                    <input class="form-check-input" type="radio" name="verify" value="0"/>
                    <!--select SDG-goal-->
                    <h3 class="col-md-2">SDG-doelen:</h3>
                    <select type="text" class="custom-select col-md-4 mb-3  ml-3" id="goalid" name="goalid">
                        <option>{{ old('goalid') }}</option>
                        @foreach($goals as $goal)
                            <option value="{{$goal->id}}">{{$goal->title}}</option>
                        @endforeach

                    </select>

                    <!--select education-->
                    <div class="col-md-4">
                        <h3>Opleidingen:</h3>
                    </div>
                    <select type="text" class="custom-select col-md-4 mb-3  ml-3" id="education" name="education" >
                        <option></option>
                        @foreach($educations as $education)
                            <option value="{{$education->name}}">{{$education->name}}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-12  ml-3">Filter</button>
                        <a href="/projecten" class="btn btn-primary mb-12  ml-3">Reset filter</a>
                    </div>
                </form>


                    </div>
                </div>

    <div class="mt-3 offset-md-2">
        <div class="">


            @foreach($projects as $project)
                <div class="mb-3">
                    <div class="card-columns">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img
                                src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                                class="img-fluid rounded"
                            />
                        </div>
                        <div class="card-body mt-0">
                            @if($project->verified == 0)
                                <p style="color: red">Project niet verified</p>
                            @endif
                            <h5 class="card-title">
                                {{$project->title}}
                            </h5>
                            <p class="card-text">
                                {{$project->excerpt}}
                            </p>
                            <a href="adminProjecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                        </div>
                    </div>
                </div>
                <hr class="my-3 col-md-9"/>

            @endforeach

            </div>
        </div>
    </main>
@endsection
