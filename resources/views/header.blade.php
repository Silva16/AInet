
@extends('head')
<body>
<div class="header">
    <ul>

        <li ><a href="#">Página principal</a></li>
        <li><a href="resources/views/projects/list">Projectos</a></li>
        <li id="search">
            <input type="text" class="search-query" placeholder="Search">
        </li>
        <li>
            <input type="button" class="button" value="Login" onclick="msg()">
        </li>
    </ul>
</div>
<div class="logo">
    <img  id="logo" src="css/imagens/logo.png">
</div>
<div id="barra">

</div>


@yield('content')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>