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
				<div class="card-body">
					<h4 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h4>
					<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label><br>
    <input type="text" class="form-control" id="txtNome" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Telefone:</label><br>
  <input type="text" class="form-control" placeHOLDER="(XX) XXXXX-XXXX" id="txtTelefone">
  </div>
  
  <label for="exampleInputPassword1" class="form-label">Origem:</label><br>
  <select id="txtOrigem" class="form-select">
<option>Celular</option>
<option>Telefone Fixo</option>
  </select>

  <div class="mb-3"><br>
  <label for="exampleInputPassword1" class="form-label">Data do Contato:</label><br>
  <input type="date" class="form-control" id="dateContato">
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Observações:</label>
  <textarea class="form-control" id="txtObservacao" rows="3"></textarea>
  </div>
   
   <button type="submit" class="btn btn-primary"><h5>Cadastrar</5></button>
</form>

</div>
    </body>
</html>