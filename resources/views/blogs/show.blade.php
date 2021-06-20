@extends('layouts.app')

@section('content')
    <main class="mt-3">
        <div class="col-12 text-center">
            <h1 class="bg-light">{{$blog->title}}</h1>
        </div>
        <hr class="my-5"/>

        <div class="container">
            <div class="row">
                <div class="col-md-8">
{{--                    <h4>{{$blog->excerpt}}</h4>--}}
                    <h5>{{$blog->body}}</h5>
                    <hr>

                    <div class="col-md-4">
                        <form action="/projecten/{{$blog->project_id}}/blogs/{{$blog->id}}" method="post"
                              onsubmit="return do_check();">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Verwijder deze blog</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact gegevens:</h3>
                    <hr>
                    <h5>
                    Naam: {{$blog->contact_name}}<br>
                    Email: {{$blog->contact_email}}
                        <hr>
                    Meer info: <a href="{{$blog->reference_url}}" >{{$blog->reference_url}}</a>
                        <hr>
                    </h5>
                </div>
            </div>

        </div>

    </main>
    <script>
        <!--requests a password when deleting a blog-->
        function do_check() {
            let return_value = prompt("Vul de code in om het te verwijderen");
            if (return_value === "1234")
                return true;
            else
                return false;

        }
    </script>

@endsection
