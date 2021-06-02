@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <form method="POST" action="/admin/{{$project->id}}">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">Title:</label><br>
                                    <input type="text" id="title" name="title" value="{{$project->title}}"><br>
                                    @if($errors->has('title'))
                                        <p>{{$errors->first('title')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="exerpt" class="col-md-4 col-form-label text-md-right">Excerpt:</label><br>
                                    <textarea type="text" id="excerpt" name="excerpt">{{$project->excerpt}}</textarea><br>
                                    @if($errors->has('title'))
                                        <p>{{$errors->first('excerpt')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="body" class="col-md-4 col-form-label text-md-right">Body:</label><br>
                                    <textarea type="text" id="body" name="body">{{$project->body}}</textarea><br>
                                    @if($errors->has('title'))
                                        <p>{{$errors->first('body')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="goalid" class="col-md-4 col-form-label text-md-right">goalid:</label><br>
                                    <textarea type="text" id="goalid" name="goalid">{{$project->goalid}}</textarea><br>
                                    @if($errors->has('title'))
                                        <p>{{$errors->first('goalid')}}</p>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <label for="verified" class="col-md-4 col-form-label text-md-right">verified:</label><br>
                                    <textarea type="text" id="verified" name="verified">{{$project->verified}}</textarea><br>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Submit">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group row">
                    <form method="POST" action="/admin/{{ $project->id }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
