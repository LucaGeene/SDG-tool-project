@extends('layouts.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                                            {{$project->title}}
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
                <div>
                    <h1 class="bg-light">Bijdrage van projecten aan doelen</h1>
                    <canvas id="countProjectsChart"></canvas>

                    <script>
                        const labels = [
                            @foreach($goals as $goal)
                                '{{$goal->title}}',
                            @endforeach
                        ];
                        const data = {
                            labels: labels,
                            datasets: [{
                                label: 'Aantal projecten/activiteiten',
                                backgroundColor: [
                                    @foreach($goals as $goal)
                                        '{{$goal->color}}40',
                                    @endforeach
                                ],
                                borderColor: [
                                    @foreach($goals as $goal)
                                        '{{$goal->color}}',
                                    @endforeach
                                ],
                                borderWidth: 1,
                                data: [
                                    @foreach($projects as $project)

                                        @endforeach
                                    10, 10, 10, 10, 10, 30, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10],
                            }]
                        };
                        const config = {
                                type: 'bar',
                                data,
                                options: {
                                    // onClick: function(context) {
                                    //     let index = context.findIndexFrom;
                                    //     alert(index);
                                    // }
                            },
                        };

                        // function goToGoal(evt, item) {
                        //     let id = item[0]['_model'].label;
                        //     this.selectedIndex = id;
                        //     alert('id');
                        // }

                        // === include 'setup' then 'config' above ===

                        let myChart = new Chart(
                            document.getElementById('countProjectsChart'),
                            config
                        );

                        let g = document.getElementById('countProjectsChart');
                        for (let i = 0, len = g.children.length; i < len; i++)
                        {

                            // TODO add clickable bars, to redirect to clicked goal.
                            (function(index){
                                g.children[i].onclick = function(){
                                    alert('lol')  ;
                                }

                            })(i);
                        }
                    </script>
                </div>
                <hr class="my-3"/>

            </div>
        </main>
        <!--Main layout-->

@endsection
