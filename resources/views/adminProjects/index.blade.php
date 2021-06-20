@extends('layouts.app')

@section('content')
    <div class="col-12 text-center">
        <h1 class="bg-light">Projecten adminpagina</h1>
        <p class="text-dark">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
            eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
            sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.

        </p>
    </div>
    <hr class="my-5"/>
    <div class="container">
        <div class=" border-primary border bg-light rounded">
            <h2 class="card-header mb-3 bg-info">Filter</h2>
            <div class="form-group">
                {{--            filter--}}
                <form action="" method="GET">
                    {{--                    Searchbar--}}
                    <h3 class="col-md-2">Search:</h3>
                    <input type="text" class="mb-1 col-md-10 form-control border-dark" name="search" id="search"/>

                    <label class="col-md-1 mb-3" for="verified">verified:</label>
                    <input class="form-check-input" type="radio" name="verify" value="1"/>
                    <label class="col-2 mb-3" for="verified">not verified:</label>
                    <input class="form-check-input" type="radio" name="verify" value="0"/>
                    <div class="col-md-5">
                        <select type="text" class="form-select form-select-lg mb-3" id="goalid" name="goalid">
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
                    </div>

                    <button type="submit" class="btn btn-primary ml-3">Filter</button>
                </form>
                {{--            /filter--}}
                <a class="btn btn-primary ml-3" href="{{ url('/adminProjecten') }}">Reset</a>
            </div>
        </div>
    </div>

    <div class="mt-3 col-md-12 offset-md-2">
        <div class="col-md-8">


            @foreach($projects as $project)
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
                            <a href="adminProjecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                        </div>
                    </div>
                </div>
                <hr class="my-3"/>

            @endforeach


        </div>
    </div>

@endsection
