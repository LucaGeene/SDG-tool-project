@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <form method="POST" action="/opleidingen" class="needs-validation" novalidate>
                                @csrf

{{--                                Creating input for the education name                                --}}
                                <div class="form-group flex-row-reverse">
                                    <label for="name" class="text-md-right">Naam Opleiding:</label><br>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    @if ($errors->has('name'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

{{--                                Creating textarea for the education description                                --}}
                                <div class="form-group flex-row-reverse">
                                    <label for="description" class="text-md-right">Description:</label><br>
                                    <textarea class="form-control" id="description" name="description" required>{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>

{{--                                Creating textarea for the education description                                --}}
                                <div class="form-group flex-row-reverse">
                                    <label for="body" class="col-form-label text-md-right">Body:</label><br>
                                    <textarea class="form-control" id="body" name="body">{{old('body')}}</textarea>
                                    @if ($errors->has('body'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('body') }}
                                        </div>
                                    @endif
                                </div>

{{--                                Submit button for saving made creations                                --}}
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

