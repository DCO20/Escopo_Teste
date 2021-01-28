<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Cadastro de candidatos</title>

    <script src="https://kit.fontawesome.com/b0d8aefb17.js" crossorigin="anonymous"></script>

  </head>
  <body>
    @include('includes.alerts')
    <div class="container mt-16 shadow" style="margin-top: 16px">
        <div class="row">
            <div class="col-12" style="margin-top: 16px">
                <h4 class="text-center" style="color: blueviolet">Cadastro de candidatos</h4>
                <a href="{{route('logout')}}" style="text-decoration: none"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Sair</a>
									<form id="logout-form" method="POST" action="{{route('logout')}}" >
										@csrf
                  </form>
                  {!! Form::open(['route' => 'candidates.store', 'files' => true]) !!}
                <div class="mb-3" style="margin-top: 8px">
                    <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                    {!! Form::text('name', null,  [ 'class' => 'form-control']) !!}
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email:</label>
                    {!! Form::text('email', null,  [ 'class' => 'form-control']) !!}
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Idade:</label>
                    {!! Form::text('age', null,  [ 'class' => 'form-control']) !!}
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Url LinkedIn:</label>
                    {!! Form::text('url_linkedin', null,  [ 'class' => 'form-control']) !!}
                  </div>
                  <div class="mb-3">
                    <div class="input-group">
                  
                      {!! Form::select('technology_id', $tecs, 0, ['class' => 'custom-select']) !!}
                      </div> 
                  </div>
                  <div class="mb-3">
                    {!! Form::submit('Cadastar', [ 'class' => 'btn btn-success']) !!}
                  </div>
                  {!! Form::close() !!}
            </div>  
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>