@extends('layouts.app')

@section('content')
    <hr class="my-5"/>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul>


                    @foreach($projects as $project)
                        <div class="box">
                            <li><a href="adminProjects/{{$project->id}}"><b><h4>{{$project->title}}</h4></b></a><br>
                                <h5>{{$project->excerpt}}</h5></li>
                                <h5>verified  {{$project->verified}}</h5>
                                <h5>goalid  {{$project->goalid}}</h5>
                        </div>
                    @endforeach


                </ul>
            </div>
            <div class="col-md-4">
                <div class="form-group row">
                    <form action="" method="GET">
                        {{--                        <input type="text" name="category" required/>--}}
                        <h4>Filter</h4>
                        <label for="verified">verified:</label>
                        <input type="radio" name="verify" value="1"/>
                        <label for="verified">not verified:</label>
                        <input type="radio" name="verify" value="0"/>

                        <select type="text" class="custom-select" id="goalid" name="goalid">
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


                        <button type="submit">Filter</button>
                    </form>

                    <h5>verified:{{$filterarray[0]}}</h5>

                    <h5>goalid:{{$filterarray[1]}}</h5>
                    <a href="{{ url('/adminProjects') }}">Reset</a>

                </div>
            </div>
        </div>

    </div>
@endsection
