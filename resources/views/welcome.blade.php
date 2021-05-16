@extends('layouts.app')

@section('content')
    <header>


        <!--Main layout-->
        <main class="mt-3">

            <div class="container col-10">

                <header class="masthead">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h1 class="bg-light">SDG-Tool</h1>
                            <h3 class="text-dark bg-light">welkom!</h3>
                        </div>
                    </div>
                </header>

            </div>
            <div class="container col-10">
                <hr class="mt-3"/>
                <!--Section: Content-->
                <section>
                    <div class="row">
                        <div class="col-md-6 gx-5 mb-4">
                            <h4><strong>doelen?</strong></h4>
                            <p class="text-dark">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                            </p>
                        </div>

                        <div class="col-md-6 gx-5 mb-4">
                            <h4><strong>opleidingen?</strong></h4>
                            <p class="text-dark">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque voluptate
                                nesciunt laborum incidunt. Officia, quam consectetur. Earum eligendi aliquam illum
                                alias, unde optio accusantium soluta, iusto molestiae adipisci et?
                            </p>
                        </div>
                    </div>
                </section>
                <!--Section: Content-->

                <hr class="mt-3"/>

                <!--Section: Content-->
                <section class="text-center">
                    <h4 class="mb-5"><strong>laatste projecten!</strong></h4>
                    <div class="row">


                        @foreach($projects as $project)

                            <div class="col-lg-4 col-md-12 mb-4">
                                <div class="card">
                                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                        <img
                                            src="https://mdbootstrap.com/img/new/standard/nature/184.jpg"
                                            class="img-fluid"
                                        />
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <li>{{$project->title}}</li>
                                        </h5>
                                        <p class="card-text">
                                            {{$project->excerpt}}
                                        </p>
                                        <a href="projecten/{{$project->id}}" class="btn btn-primary">Ga naar</a>
                                    </div>
                                </div>
                            </div>


                        @endforeach

                    </div>
                </section>
                <!--Section: Content-->

                <hr class="my-3"/>

                <figure>
                    <div class="graphic">

                        <div class="row">
                            <h6>Doel 1</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
           <span class="value">57%</span>
        </span><span class="block" title="4-6 Maanden">
           <span class="value">3%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
           <span class="value">8%</span>
        </span>
                                <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                        <div class="row">
                            <h6>Doel 2</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
            <span class="value">29%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
            <span class="value">21%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">19%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                        <div class="row">
                            <h6>Doel 3</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                        <div class="row">
                            <h6>Doel 4</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                        <div class="row">
                            <h6>Doel 5</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">2</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>
                        <div class="row">
                            <h6>Doel 6</h6>
                            <div class="chart">
        <span class="block" title="0-3 Maanden">
             <span class="value">8%</span>
        </span>
                                <span class="block" title="4-6 Maanden">
             <span class="value">11%</span>
        </span>
                                <span class="block" title="7-12 Maanden">
             <span class="value">34%</span>
        </span>
                                 <span class="block" title="1-2 Jaar">
           <span class="value">2%</span>
        </span>
                                <span class="block" title="2+ Jaar">
           <span class="value">2%</span>
        </span>
                            </div>
                        </div>

                    </div>

                    <div class="x-axis">
                        <h3>X-Axis Title</h3>
                        <ul class="legend">
                            <li>0-3 Maanden</li>
                            <li>4-6 Maanden</li>
                            <li>7-12 Maanden</li>
                            <li>1-2 jaar</li>
                            <li>2+ Jaar</li>
                        </ul>
                    </div>

                </figure>
                {{--graph--}}
                <script>
                    $(document).ready(function () {
                        $('.value').each(function () {
                            let text = $(this).text();
                            $(this).parent().css('width', text);
                        });

                        $('.block').tooltip();
                    });
                </script>

            </div>
        </main>
        <!--Main layout-->

@endsection
