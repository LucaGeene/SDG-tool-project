@extends('layouts.app')

@section('content')
    <main>
        <div
            class="bg-image thumbnail-bg row "
            style="
    background-image: url(/assets/hz-middelburg.png);
    height: 355px;
    background-repeat: no-repeat;
    background-size: cover">
        <div class="text-center align-self-center">
            <h1>{{$project->title}}</h1>
        </div>
        </div>
        <hr/>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <br><h5>{{$project->body}}</h5>
                    <p>Meer info: <a href="{{$project->reference_url}}">{{$project->reference_url}}</a></p>
                    <hr>
                    <div>
                        <div class="rounded"><a href="/doelen/{{$project->goalid}}">
                                <img src="/assets/{{$project->goalid}}.png" class="img-fluid rounded"></a></div>
                    </div>
                    <hr>
                    <div class="mt-3">
                        <h3>Opleiding: {{$project->education}}</h3>
                    </div>
                </div>
                <div class="col-1">
                    <hr style="border-left: 1px solid;
                    height: 100%;
                    width: 1px;">
                </div>
                <div class="col-4 mt-3">

{{--                    BUTTON BELANGRIJK VOOR BLOGS--}}
                    <a class="btn btn-primary ml-3" href="/projecten/{{$project->id}}/blogs">Alle blogs</a>
                    <div class="row">
                    @foreach($blogs as $blog)
                        @if($blog->project_id === $project->id)


                        <div class="box">
                            <div class="card-body">
                                <h3 class="card-title">
                                    {{$blog->title}}
                                </h3>
                                <p class="h4 card-text">
                                    {{$blog->activity_type}}
                                </p>
                                <p class="card-text">
                                    {{$blog->excerpt}}
                                    {{--TODO maximum erop zetten--}}
                                </p>

                                <a href="/projecten/{{$blog->project_id}}/blogs/{{$blog->id}}" class="btn btn-primary mb-3">Ga naar</a>
                                <p class="card-footer">
                                    Contact
                                    <br>
                                    {{$blog->contact_name}}; <a>{{$blog->contact_email}}</a>
                                </p>
                            </div>
                        </div>
                        <hr class="my-3"/>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
