@extends('layouts.app')

@section('content')
    <div class="col-12 text-center">
        <h1 class="bg-light">Project toevoegen</h1>
    </div>
    <hr class="my-5" />
    <div class="container mt-5">
{{--        <div class="row">--}}

{{--            <div class="col-md-12">--}}
                <div class="row justify-content-center border-primary border bg-light rounded mb-3">
{{--                    <div class="">--}}
                        <div class="card ">
                            <form method="POST" action="/projecten">
                                @csrf

                                <label for="title" class="h3 mb-1 mt-3">Title:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                    <input class="mb-1 col-md-10 form-control border-dark" type="text" id="title" name="title" value="{{old('title')}}"><br>
                                    @if($errors->has('title'))
                                        <p class="text-danger">{{$errors->first('title')}}</p>
                                    @endif
                                </div>

{{--                                <div class="input-group mb-3 col-md-10 border-dark mb-3">--}}
{{--                                    <div class="input-group-prepend border-dark">--}}
{{--                                        <label class="input-group-text border-dark" for="excerpt">Opleiding:</label>--}}
{{--                                    </div>--}}

{{--                                    <select type="text" class="custom-select col-md-12 border-dark" id="excerpt" name="excerpt">--}}
{{--                                        <option value="Opleidingen"></option>--}}
{{--                                        <option value="HZ onderzoeksgroepen">HZ onderzoeksgroepen</option>--}}
{{--                                        <option value="Campusvoorzieningen">Campusvoorzieningen</option>--}}
{{--                                        <option value="Financiën">Financiën</option>--}}
{{--                                        <option value="ICT">ICT</option>--}}
{{--                                        <option value="Marketing, Communicatie en Internationalisering">Marketing, Communicatie en Internationalisering</option>--}}
{{--                                        <option value="Onderwijs, Onderzoek en Kwaliteit">Onderwijs, Onderzoek en Kwaliteit</option>--}}
{{--                                        <option value="PO&O">PO&O</option>--}}
{{--                                        <option value="Studentvoorzieningen">Studentvoorzieningen</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}

                                <label for="body" class="h4 mb-3 mt-3">Body:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">

                                    <textarea class="mb-1 col-md-10 form-control border-dark" type="text" id="body" name="body">{{old('body')}}</textarea><br>
                                    @if($errors->has('body'))
                                        <p class="text-danger">{{$errors->first('body')}}</p>
                                    @endif
                                </div>

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

                    <label for="reference_url" class="h3 mb-1 mt-3">URL (voor meer info idk)</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">

                        <input class="mb-1 col-md-10 form-control border-dark" type="url" id="reference_url" name="reference_url"
                               value="{{old('reference_url')}}"><br>
                        @if($errors->has('reference_url'))
                            <p class="text-danger">{{$errors->first('reference_url')}}</p>
                        @endif
                    </div>

                    <label for="contact_name" class="h3 mb-1 mt-3">Naam:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">
                        <input class="mb-1 col-md-10 form-control border-dark" type="text" id="contact_name" name="contact_name"
                               value="{{old('contact_name')}}"><br>
                        @if($errors->has('contact_name'))
                            <p class="text-danger">{{$errors->first('contact_name')}}</p>
                        @endif
                    </div>

                    <label for="contact_email" class="h3 mb-1 mt-3">E-mail:</label><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">
                        <input class="mb-1 col-md-10 form-control border-dark" type="email" id="contact_email" name="contact_email"
                               value="{{old('contact_email')}}"><br>
                        @if($errors->has('contact_email'))
                            <p class="text-danger">{{$errors->first('contact_email')}}</p>
                        @endif
                    </div>

                    <label for="verification" class="h3 mb-1 mt-3">Verificatiecode:</label>
                    <p>Als u een verificatie-code heeft, vul die hieronder in om dit project gelijk op de site toe te laten.</p><br>
                    <hr class="my-3 col-md-10">
                    <div class="form-group row ml-3">
                        <textarea class="mb-3 col-md-10 form-control border-dark" type="text" id="verification"
                                  name="verification"></textarea><br>
                    </div>

                                <div>
                                    <input type="file" name="fileToUpload" id="fileToUpload">
                                </div>

                                <div class="text-center">
                                    <input class="btn btn-primary mb-3" type="submit" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

