@extends('layouts.app')

@section('content')
    <main class="mt-3">
        <div class="col-12 text-center">
            <button class="btn btn-primary" onclick="history.go(-1);">Terug naar project</button>
            <h1 class="bg-light">Alle blogs voor: {{$this_project->title}}</h1>
        </div>

        <div class="container">
            <hr class="my-3" />
            <div class="border-primary border bg-light rounded">
                <h2 class="card-header bg-primary ht-3 text-white">Blog aanmaken</h2>
                <div class="row">

                    <!--Project aanmaken-->
                    <div class="col-md-4 mb-3 mt-3 ml-3">
                        <a id='{{ Request::path() === 'blogs' ? 'current-page' : '' }}' href="/projecten/{{$project}}/blogs/create" class="btn btn-primary">Blog toevoegen</a>
                    </div>

                </div>
            </div>


        <!--Projecten lijst-->
        <div class="mt-3 col-md-12">
            @foreach($blogs as $blog)


                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">
                                {{$blog->title}}
                            </h2>
                            <p class="h4 card-text">
                                {{$blog->activity_type}}
                            </p>
                            <p class="card-text">
                                {{$blog->excerpt}}
                                {{--TODO maximum erop zetten--}}
                            </p>

                            <div class="container float-right">
                                <h5></h5>
                            </div>
                            <a href="/projecten/{{$blog->project_id}}/blogs/{{$blog->id}}" class="btn btn-primary">Ga naar</a>
                        </div>
                    </div>
                    <hr class="my-3 col-md-9"/>

            @endforeach
        </div>
        </div>
    </main>
@endsection

