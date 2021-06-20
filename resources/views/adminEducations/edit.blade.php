@extends('layouts.app')

@section('content')
    <main class="mt-3">
    <div class="col-12 text-center">
        <h1 class="bg-light">Opleiding aanpassen</h1>
    </div>
    <hr class="my-5" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                        <div class="card border-primary">
                            <form method="POST" action="/adminOpleidingen/{{$educations->id}}">
                                @csrf
                                @method('PUT')

                               <!-- Editing input for the education name -->
                                <div class="form-group row ml-3">
                                    <label for="name" class="h3 mb-1 mt-3">Naam Opleiding:</label><br>
                                    <input type="text" id="name" name="name" class="mb-1 col-md-10 form-control border-dark" value="{{$educations->name}}"><br>
                                    @if($errors->has('name'))
                                        <p>{{$errors->first('name')}}</p>
                                    @endif
                                </div>

                                <!--Editing textarea for the education description-->
                                <div class="form-group row ml-3">
                                    <label for="description" class="h3 mb-1 mt-3">Description:</label><br>
                                    <textarea id="description" class="mb-1 col-md-10 form-control border-dark" name="description">{{$educations->description}}</textarea><br>
                                    @if($errors->has('description'))
                                        <p>{{$errors->first('description')}}</p>
                                    @endif
                                </div>

                                <!--Editing textarea for the education body-->
                                <div class="form-group row ml-3">
                                    <label for="body" class="h3 mb-1 mt-3">Body:</label><br>
                                    <textarea  id="body" class="mb-1 col-md-10 form-control border-dark" name="body">{{$educations->body}}</textarea><br>
                                    @if($errors->has('body'))
                                        <p>{{$errors->first('body')}}</p>
                                    @endif
                                </div>

                                <!--Submit button for saving made changes-->
                                <div class="form-group ml-3">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>

                            </form>

                            <!--Delete button for the selected education-->
                            <div class="form-group ml-3">
                                <form method="POST" action="/adminOpleidingen/{{$educations->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-primary" type="submit">delete</button>
                                </form>
                            </div>
                        </div>
                </div>
        </div>
    </div>
    </main>
@endsection

