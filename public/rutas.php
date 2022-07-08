<?php 
    require "../utils/autoload.php";

    Routes::AddView("/","paginaPrincipal");
    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    Routes::AddView("/altaUsuario","altaUsuario");
    
    Routes::Run();

       