@extends('layouts.app')

@section('content')
    <main class="mt-3">
    <div class="col-12 text-center">
        <h1 class="bg-light">Project toevoegen</h1>
    </div>
    <hr class="my-5"/>
    <div class="container mt-5">
        <div class="row justify-content-center border-primary border bg-light rounded mb-3">
            <div class="card ">
                <form method="POST" action="/projecten" enctype="multipart/form-data">
                    @csrf
                    <!--title-->
                    <label for="title" class="h3 mb-1 mt-3">Titel:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">

                        <input class="mb-1 col-md-10 form-control border-dark" type="text" id="title" name="title"
                               value="{{old('title')}}"><br>
                        @if($errors->has('title'))
                            <p class="text-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>
                    <!--education-->
                    <label for="education" class="h3 mb-1 mt-3">Opleiding:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="input-group mb-3 col-md-10 border-dark mb-3">

                        <select class="custom-select col-md-12 border-dark" type="text" id="education"
                                name="education">
                            <option></option>
                            @foreach($educations as $education)
                                <option value="{{$education->name}}">{{$education->name}}</option>
                            @endforeach
                        </select>
                        @if($errors->has('education'))
                            <p class="text-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>

                    <!--excerpt-->
                    <label for="excerpt" class="h4 mb-3 mt-3">Korte beschrijving:</label><br>
                    <p>Dit komt in het overzicht te staan.</p>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">

                        <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="excerpt"
                                  name="excerpt">{{old('excerpt')}}</textarea><br>
                        @if($errors->has('excerpt'))
                            <p class="text-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                    </div>

                    <!--body-->
                    <label for="body" class="h4 mb-3 mt-3">Uitgebreidere uitleg:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">

                        <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="body"
                                  name="body">{{old('body')}}</textarea><br>
                        @if($errors->has('body'))
                            <p class="text-danger">{{$errors->first('body')}}</p>
                        @endif
                    </div>
                    <!--SDG-Goal-->
                    <label for="goalid" class="h4 mb-6 mt-3">SDG doel:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="input-group mb-3 col-md-10 border-dark mb-3">
                        <select type="text" class="custom-select col-md-12 border-dark" id="goalid" name="goalid">
                            <option></option>
                            @foreach($goals as $goal)
                                <option value="{{$goal->id}}">{{$goal->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <!--image uploading for header-->
                    <label for="image" class="h4 mb-6 mt-3">Upload cover image: (455 x 300)</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="input-group mb-3 col-md-10 border-dark mb-3">
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <!--link-->
                    <label for="reference_url" class="h3 mb-1 mt-3">Link voor extra informatie:</label><br>

                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">

                        <input class="mb-1 col-md-10 form-control border-dark" type="url" id="reference_url"
                               name="reference_url"
                               value="{{old('reference_url')}}"><br>
                        @if($errors->has('reference_url'))
                            <p class="text-danger">{{$errors->first('reference_url')}}</p>
                        @endif
                    </div>

                    <label for="verification" class="h3 mb-1 mt-3">Verificatiecode:</label>
                    <p>Als u een verificatie-code heeft, vul die hieronder in om dit project gelijk op de site toe te
                        laten.</p><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">
                        <textarea class="mb-3 col-md-10 form-control border-dark" type="text" id="verification"
                                  name="verification"></textarea><br>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-primary mb-3" type="submit" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>
    </main>
@endsection

