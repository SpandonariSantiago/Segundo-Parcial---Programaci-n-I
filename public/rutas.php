<?php 
    require "../utils/autoload.php";

    Routes::AddView("/","paginaPrincipal");
    Routes::Add("/","post","SesionControlador::CerrarSesion");  
    Routes::AddView("/login","login");
    Routes::Add("/login","post","SesionControlador::IniciarSesion");
    Routes::AddView("/altaUsuario","altaUsuario");
    Routes::Add("/altaUsuario","post","UsuarioControlador::Alta");
    Routes::AddView("/altaPublicacion","altaPublicacion");
    Routes::Add("/altaPublicacion","post","PublicacionControlador::Alta");
    
    Routes::Run();

       