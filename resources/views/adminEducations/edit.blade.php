@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <form method="POST" action="/adminOpleidingen/{{$educations->id}}">
                                @csrf
                                @method('PUT')

{{--                                Editing input for the education name                                --}}
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Naam Opleiding:</label><br>
                                    <input type="text" id="name" name="name" value="{{$educations->name}}"><br>
                                    @if($errors->has('name'))
                                        <p>{{$errors->first('name')}}</p>
                                    @endif
                                </div>

{{--                                Editing textarea for the education description                                --}}
                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description:</label><br>
                                    <textarea id="description" name="description">{{$educations->description}}</textarea><br>
                                    @if($errors->has('description'))
                                        <p>{{$errors->first('description')}}</p>
                                    @endif
                                </div>

{{--                                Editing textarea for the education body                                --}}
                                <div class="form-group row">
                                    <label for="body" class="col-md-4 col-form-label text-md-right">Body:</label><br>
                                    <textarea  id="body" name="body">{{$educations->body}}</textarea><br>
                                    @if($errors->has('body'))
                                        <p>{{$errors->first('body')}}</p>
                                    @endif
                                </div>

{{--                                Submit button for saving made changes                                --}}
                                <div class="text-center">
                                    <input type="submit" value="Submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

{{--            Delete button for the selected education            --}}
            <div class="col-md-4">
                <div class="form-group row">
                    <form method="POST" action="/adminOpleidingen/{{$educations->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

