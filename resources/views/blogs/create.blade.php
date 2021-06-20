@extends('layouts.app')

@section('content')
    <main class="mt-3">
        <div class="col-12 text-center">
            <h1 class="bg-light">Blog-activiteit toevoegen voor bij het project</h1>
        </div>
        <hr class="my-5"/>
        <div class="container mt-5">
            <div class="row justify-content-center border-primary border bg-light rounded mb-3">
                <div class="card ">
                    <form method="POST" action="/projecten/{{$project}}/blogs" enctype="multipart/form-data">
                        @csrf

                        <label for="title" class="h3 mb-1 mt-3">Titel:</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">

                            <input class="mb-1 col-md-10 form-control border-dark" type="text" id="title" name="title"
                                   value="{{old('title')}}" required><br>
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>

                        <label for="activity_type" class="h4 mb-6 mt-3">Type activiteit</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="input-group mb-3 col-md-10 border-dark mb-3">
                            <select type="text" class="custom-select col-md-12 border-dark" id="activity_type"
                                    name="activity_type" required>
                                <option></option>
                                <option value="Cursus">Cursus</option>
                                <option value="Minor">Minor</option>
                                <option value="Afstudeerproject">Afstudeerproject</option>
                                <option value="Onderzoeksproject">Onderzoeksproject</option>
                                <option value="Event">Event</option>
                                <option value="Beleid">Beleid</option>
                                <option value="Bedrijfsvoering">Bedrijfsvoering</option>
                                <option value="Overig">Overig</option>
                            </select>
                        </div>


                        <label for="excerpt" class="h4 mb-3 mt-3">Korte beschrijving:</label><br>
                        <p>Dit komt in het overzicht te staan.</p>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">

                        <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="excerpt"
                                  name="excerpt" required>{{old('excerpt')}}</textarea><br>
                            @if($errors->has('excerpt'))
                                <p class="text-danger">{{$errors->first('excerpt')}}</p>
                            @endif
                        </div>

                        <label for="body" class="h4 mb-3 mt-3">Wat heb je gedaan en wat was de impact?</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">

                        <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="body"
                                  name="body" required>{{old('body')}}</textarea><br>
                            @if($errors->has('body'))
                                <p class="text-danger">{{$errors->first('body')}}</p>
                            @endif
                        </div>


                        <label for="reference_url" class="h3 mb-1 mt-3">URL (voor meer info idk)</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">

                            <input class="mb-1 col-md-10 form-control border-dark" type="url" id="reference_url"
                                   name="reference_url"
                                   value="{{old('reference_url')}}"><br>
                            @if($errors->has('reference_url'))
                                <p class="text-danger">{{$errors->first('reference_url')}}</p>
                            @endif
                        </div>

                        <label for="contact_name" class="h3 mb-1 mt-3">Naam:</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">
                            <input class="mb-1 col-md-10 form-control border-dark" type="text" id="contact_name"
                                   name="contact_name"
                                   value="{{old('contact_name')}}"><br>
                            @if($errors->has('contact_name'))
                                <p class="text-danger">{{$errors->first('contact_name')}}</p>
                            @endif
                        </div>

                        <label for="contact_email" class="h3 mb-1 mt-3">E-mail:</label><br>
                        <hr class="my-3 col-md-10">
                        <div class="form-group row ml-3">
                            <input class="mb-1 col-md-10 form-control border-dark" type="email" id="contact_email"
                                   name="contact_email"
                                   value="{{old('contact_email')}}"><br>
                            @if($errors->has('contact_email'))
                                <p class="text-danger">{{$errors->first('contact_email')}}</p>
                            @endif

                            <div class="text-center">
                                <input class="btn btn-primary mb-3" type="submit" value="Submit">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
@endsection
