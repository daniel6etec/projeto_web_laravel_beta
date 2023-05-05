<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
        @vite([
                'resources/js/app.js',
                'resources/css/app.css', 
                'node_modules/bootstrap/dist/css/bootstrap.min.css',
                'node_modules/bootstrap/dist/js/bootstrp.bundle.js'
                ])

        <style>
            body{
                background-color:#DDDDDD;
            }
        </style>

    

    </head>

    <body>
        <br>
       <form>
        <div class="container">
        <div class="container">
		        <div class="row">
			        <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3>Sistema Web</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><h5>Cadastro</h5></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/consulta') }}"><h5>Consultar</h5></a>
            </li>             
        </ul>
    </div>
  </div>
</nav>
</div>
		<div class="row">
			<div class="card mb-3 col-12">
        </div>
        </div>

        <?php
            use App\Models\agendamento;

            function consulta()
            {
                $consulta = DB::select('SELECT nome');
                dd($consulta);
            }

        ?>
    </body>
</html>