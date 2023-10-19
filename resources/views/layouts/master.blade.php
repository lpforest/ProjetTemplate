
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! Html::style('assets/css/bootstrap.css') !!}
    {!! Html::style('assets/css/monStyle.css') !!}
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet'
          type='text/css'>
</head>
<body class="body">
<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar+ bvn"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">PROJET LARAVEL_10</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-target">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/listerOeuvres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Oeuvres</a></li>
                    <li><a href="{{url('/listerVisiteurs')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Visiteurs</a></li>
                    <li><a href="{{url('/listerTickets')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Lister Tickets</a></li>
                    <li><a href="{{url('/ajouterOeuvres')}}" data-toggle="collapse" data-target=".navbar-collapse.in">Ajouter Tickets</a></li>


            </div>

        </div><!--/.container-fluid -->
    </nav>
</div>
<div class="container">
    @yield('content')

</div>
{!! Html::script('assets/js/bootstrap.min.js') !!}
{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>
