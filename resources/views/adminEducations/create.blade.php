@extends('layouts.app')

@section('content')

    <main class="mt-3">
    <div class="col-12 text-center">
        <h1 class="bg-light">Voeg een opleiding toe</h1>
    </div>
    <hr class="my-5" />

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card border-primary">
                            <form method="POST" action="/adminOpleidingen">
                                @csrf

                                <!--Creating input for the education name-->
                                <div class="form-group flex-row-reverse ml-3">
                                    <label for="name" class="h3 mb-1 mt-3">Naam Opleiding:</label><br>
                                    <hr class="my-3">
                                    <input type="text" class="mb-1 col-md-10 form-control border-dark" id="name" name="name" required>
                                    @if ($errors->has('name'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>

                                <!--Creating textarea for the education description-->
                                <div class="form-group flex-row-reverse ml-3">
                                    <label for="description" class="h3 mb-1 mt-3">Description:</label><br>
                                    <hr class="my-3">
                                    <textarea class="mb-1 col-md-10 form-control border-dark" id="description" name="description" required>{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('description') }}
                                        </div>
                                    @endif
                                </div>

                                <!--Creating textarea for the education description-->
                                <div class="form-group flex-row-reverse ml-3">
                                    <label for="body" class="h3 mb-1 mt-3">Body:</label><br>
                                    <hr class="my-3">
                                    <textarea class="mb-1 col-md-10 form-control border-dark" id="body" name="body">{{old('body')}}</textarea>
                                    @if ($errors->has('body'))
                                        <div class="error" style="color: red">
                                            {{ $errors->first('body') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="input-group mb-3">
                                    <div class="text-center ml-3">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
@endsection

