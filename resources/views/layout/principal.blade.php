<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">Estoque laravel</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos">Listagem</a></li>
                </ul>

            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>© Livro de Laravel da Casa do Código.</p>
        </footer>

    </div>
</body>
</html>