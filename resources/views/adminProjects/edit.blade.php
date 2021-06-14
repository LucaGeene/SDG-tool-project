@extends('layouts.app')

@section('content')
    <div class="col-12 text-center">
        <h1 class="bg-light">Project aanpassen</h1>
    </div>
    <hr class="my-5" />
    <div class="container">
            <div class="col-md-8">
                <div class="row justify-content-center">
                        <div class="card border-primary">
                            <form method="POST" action="/admin/{{$project->id}}">
                                @csrf
                                @method('PUT')


                                <label for="title" class="h3 mb-1 mt-3">Titel:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                    <input class="mb-1 col-md-10 form-control border-dark" type="text" id="title" name="title"
                                           value="{{$project->title}}"><br>
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{$errors->first('title')}}</p>
                                    @endif
                                </div>

                                <label for="education" class="h3 mb-1 mt-3">Opleiding:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                    <select class="mb-1 col-md-10 form-control border-dark" type="text" id="education"
                                            name="education">
                                        <option value="{{$project->education}}">{{$project->education}}</option>
                                        <option disabled>---------</option>
                                        @foreach($educations as $education)
                                            <option value="{{$education->name}}">{{$education->name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('education'))
                                        <p class="text-danger">{{$errors->first('title')}}</p>
                                    @endif
                                </div>

                                <label for="excerpt" class="h4 mb-3 mt-3">Korte beschrijving:</label><br>
                                <p>Dit komt in het overzicht te staan.</p>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="excerpt"
                                  name="excerpt">{{$project->excerpt}}</textarea><br>
                                    @if($errors->has('excerpt'))
                                        <p class="text-danger">{{$errors->first('excerpt')}}</p>
                                    @endif
                                </div>

                                <label for="body" class="h4 mb-3 mt-3">Uitgebreid uitleg:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                        <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="body"
                                  name="body">{{$project->body}}</textarea><br>
                                    @if($errors->has('body'))
                                        <p class="text-danger">{{$errors->first('body')}}</p>
                                    @endif
                                </div>


                                <label for="goalid" class="h4 mb-6 mt-3">SDG doel:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="input-group mb-3 col-md-10 border-dark mb-3">
                                    <select type="text" class="custom-select col-md-12 border-dark" id="goalid" name="goalid">
                                        <option value="{{$project->goalid}}">{{$project->goalid}}</option>
                                        <option disabled>---------</option>
                                        @foreach($goals as $goal)
                                            <option value="{{$goal->id}}">{{$goal->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label for="reference_url" class="h3 mb-1 mt-3">URL (voor meer info idk)</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                    <input class="mb-1 col-md-10 form-control border-dark" type="url" id="reference_url" name="reference_url"
                                           value="{{$project->reference_url}}"><br>
                                    @if($errors->has('reference_url'))
                                        <p class="text-danger">{{$errors->first('reference_url')}}</p>
                                    @endif
                                </div>

                                <label for="contact_name" class="h3 mb-1 mt-3">Naam:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">
                                    <input class="mb-1 col-md-10 form-control border-dark" type="text" id="contact_name" name="contact_name"
                                           value="{{$project->contact_name}}"><br>
                                    @if($errors->has('contact_name'))
                                        <p class="text-danger">{{$errors->first('contact_name')}}</p>
                                    @endif
                                </div>

                                <label for="contact_email" class="h3 mb-1 mt-3">E-mail:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">
                                    <input class="mb-1 col-md-10 form-control border-dark" type="email" id="contact_email" name="contact_email"
                                           value="{{$project->contact_email}}"><br>
                                    @if($errors->has('contact_email'))
                                        <p class="text-danger">{{$errors->first('contact_email')}}</p>
                                    @endif
                                </div>

                                @if($project->verified == 0)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="verified" id="Verified" value="1" >
                                        <label class="form-check-label" for="Verified">
                                            Geverifieerd
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="verified" id="NotVerified" value="0" checked>
                                        <label class="form-check-label" for="NotVerified">
                                            Niet geverifieerd
                                        </label>
                                @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verified" id="Verified" value="1" checked>
                                                <label class="form-check-label" for="Verified">
                                                    Geverifieerd
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verified" id="NotVerified" value="0">
                                                <label class="form-check-label" for="NotVerified">
                                                    Niet geverifieerd
                                                </label>
                                @endif


                                <div class="form-group row ml-3">
                                    <label for="verified" class="h3 mb-1 mt-3">verified:</label><br>
                                    <textarea type="text" id="verified" class="mb-1 col-md-10 form-control border-dark"
                                              name="verified">{{$project->verified}}</textarea><br>
                                </div>

                                <div class="form-group ml-3">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>
                                            </div>
                                    </div>
                            </form>
                            <div class="form-group ml-3">
                                <form method="POST" action="/admin/{{ $project->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>


            <div class="col-md-4">

            </div>

        </div>
    </div>

@endsection
