<html>
    <head>

    </head>
    <body>
        @foreach ($pays as $pays)
                    <p>method: {{$user->method}}</p>
                    <p>number sent: {{$user->number_sent}}</p>
                    <p>Transection id: {{$user->transection_id}}</p>
                    <p>Name: {{$user->represent_name}}</p>
                    <p>note: {{$user->note}}</p>





                    @endforeach
    </body>
</html>