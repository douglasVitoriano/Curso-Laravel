<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de Rotas</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container my-5" >
    <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token()}}">

        <div class="form-group">
            <label for="first_name">Primeiro Nome</label>
            <input type="text" name="first_name" id="fist_name" class="form-control" value="Douglas">
        </div>
        <div class="form-group">
            <label for="last_name">Segundo Nome</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="Vitoriano">
        </div>
        <div class="form-group">
            <label for="email">e-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="cursos@upinside.com.br">
        </div>
        <button class=''>Enviar!</button>
    </form>
</div>
    <script>src="{{asset('js/app.js')}}"</script>
</body>
</html>