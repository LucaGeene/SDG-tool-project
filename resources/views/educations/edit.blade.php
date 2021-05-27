@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <form method="POST" action="/opleidingen/{{$education->id}}">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Naam Opleiding:</label><br>
                                    <input type="text" id="name" name="name" value="{{$education->name}}"><br>
                                    @if($errors->has('name'))
                                        <p>{{$errors->first('name')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description:</label><br>
                                    <textarea id="description" name="description">{{$education->description}}</textarea><br>
                                    @if($errors->has('description'))
                                        <p>{{$errors->first('description')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="body" class="col-md-4 col-form-label text-md-right">Body:</label><br>
                                    <textarea  id="body" name="body">{{$education->body}}</textarea><br>
                                    @if($errors->has('body'))
                                        <p>{{$errors->first('body')}}</p>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <div class="text-center">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

