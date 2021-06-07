@extends('layouts.app')

@section('content')
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

                                <label for="body" class="h4 mb-6 mt-3">SDG categorie:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="input-group mb-3 col-md-10 border-dark mb-3">

{{--                                    <div class="input-group-prepend border-dark">--}}
{{--                                        <label class="input-group-text border-dark" for="goalid">Sdg categorie:</label>--}}
{{--                                    </div>--}}

                                    <select type="text" class="custom-select col-md-12 border-dark" id="goalid" name="goalid">
                                        <option value="1">1.Geen armoede</option>
                                        <option value="2">2.Geen honger</option>
                                        <option value="3">3.Goede gezondheid & welzijn</option>
                                        <option value="4">4.Kwaliteitsonderwijs</option>
                                        <option value="5">5.Gendergelijkheid</option>
                                        <option value="6">6.Schoon water en sanitair</option>
                                        <option value="7">7.Betaalbare- en duurzame energie</option>
                                        <option value="8">8.Eerlijk werk en economische groei</option>
                                        <option value="9">9.Industrie, Innovatie en Infrastructuur</option>
                                        <option value="10">10.Ongelijkheid verminderen</option>
                                        <option value="11">11.Duurzame Steden en Gemeenschappen</option>
                                        <option value="12">12.Verantwoorde Consumptie en Productie</option>
                                        <option value="13">13.Klimaatactie</option>
                                        <option value="14">14.Leven in het water</option>
                                        <option value="15">15.Leven op het Land</option>
                                        <option value="16">16.Vrede, justitie en sterke publieke diensten</option>
                                        <option value="17">17.Partnerschap om doelstellingen te bereiken</option>
                                    </select>
                                </div>

                                <label for="title" class="h3 mb-1 mt-3">Opleidingen:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="input-group mb-3 col-md-10 border-dark mb-3">
{{--                                    <div class="input-group-prepend border-dark">--}}
{{--                                        <label class="input-group-text border-dark" for="excerpt">Opleiding:</label>--}}
{{--                                    </div>--}}

                                    <select type="text" class="custom-select col-md-12 border-dark" id="excerpt" name="excerpt">
                                        <option value="Opleidingen"></option>
                                        <option value="HZ onderzoeksgroepen">HZ onderzoeksgroepen</option>
                                        <option value="Campusvoorzieningen">Campusvoorzieningen</option>
                                        <option value="Financiën">Financiën</option>
                                        <option value="ICT">ICT</option>
                                        <option value="Marketing, Communicatie en Internationalisering">Marketing, Communicatie en Internationalisering</option>
                                        <option value="Onderwijs, Onderzoek en Kwaliteit">Onderwijs, Onderzoek en Kwaliteit</option>
                                        <option value="PO&O">PO&O</option>
                                        <option value="Studentvoorzieningen">Studentvoorzieningen</option>
                                    </select>
                                </div>

                                <label for="title" class="h3 mb-1 mt-3">Verified:</label><br>
                                <hr class="my-3 col-md-10">
                                <div class="form-group row ml-3">
{{--                                    <label for="verified" class="h4 mb-3 mt-3">verified:</label><br>--}}
                                    <textarea class="mb-3 col-md-10 form-control border-dark" type="text" id="verified" name="verified">{{"0"}}</textarea><br>

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

