@extends('layouts.app')

@section('content')
    <main class="">
        <div
            class="bg-image thumbnail-bg row "
            style="
    background-image: url('https://mdbcdn.b-cdn.net/img/Photos/Others/images/76.jpg');
    height: 355px;
    object-fit: cover;
  "
        >
            <div class="col-12 text-center align-self-center">
                <h1 class="">{{$project->title}}</h1>
            </div>
        </div>

        <hr/>

        <div class="container">
            <div class="col-md-4">
                <a id='current-page' class="btn btn-primary" href="{{$project->id}}/edit">edit</a>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <br>
                    @if($project->verified == 1)
                        <h3> &#9745; Dit project is geverifieerd</h3>
                    @else
                        <h3> &#9746; Dit project is <b style="color: red">niet</b> geverifieerd</h3>
                    @endif
                    <hr>
                    <br>
                    <h5>{{$project->body}}</h5>
                    <hr class="">
                    <div class="">
                        <div class="rounded"><a href="/doelen/{{$project->goalid}}">
                                <img src="/assets/{{$project->goalid}}.png" class="img-fluid rounded"></a></div>
                    </div>
                    <hr class="">
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
                    <a class="btn btn-primary" href="/adminProjecten/{{$project->id}}/blogs">Start je blog</a>
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
