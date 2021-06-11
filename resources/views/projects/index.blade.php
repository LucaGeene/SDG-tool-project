@extends('layouts.app')

@section('content')
    <hr class="my-5" />
    <div class="container border-primary border bg-light col-md-8 rounded">
        <h2 class="card-header bg-info ht-3">Filter</h2>
        <div class="row">
            <div class="col-md-4 mb-3 mt-3">
                <a id='{{ Request::path() === 'projects' ? 'current-page' : '' }}' href="projecten/create" class="btn btn-primary">Project toevoegen</a>
            </div>
            <form action="" method="GET">
                <h3 class="col-md-2">SDG-doelen:</h3>
                <select type="text" class="custom-select col-md-4 mb-3" id="goalid" name="goalid">
                    <option></option>
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
                <div class="col-md-4">
                <h3>Opleidingen:</h3>
                </div>
                <select type="text" class="custom-select col-md-4 mb-3" >
                    <option></option>
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
                <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-12">Filter</button>
                    <a href="/projecten"  class="btn btn-primary mb-12">Reset filter</a>
                </div>
            </form>
        </div>
    </div>
        <div class="mt-3 col-md-10 offset-md-2">
            <div class="col-md-10">
{{--                <ul>--}}
                    @foreach($projects as $project)
                        @if($project->verified == true)
                            <div class="mb-3">
                                <div class="card-columns">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img
                                            src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                                            class="img-fluid rounded"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{$project->title}}
                                        </h5>
                                        <p class="card-text">
                                            {{$project->excerpt}}
                                        </p>
                                        <a href="projecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3"/>
                        @endif
                    @endforeach
{{--                    @foreach($projects as $project)--}}
{{--                        @if($project->verified == true)--}}
{{--                        <div class="box">--}}
{{--                            <li><a href="projecten/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>--}}
{{--                                <h5>{{$project->excerpt}}</h5></li>--}}
{{--                        </div>--}}
{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
            </div>
        </div>

@endsection
