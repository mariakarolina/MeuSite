<?php

//Meu código PHP vem aqui.khjgvbjhgv

//Manu meu amorrrrrrrrr!!!

$pg = isset($_GET['pg']);

if ($pg) {

    switch ($_GET['pg']) {

        case 'inicio':
//Incluir a página inicio
            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'sobre':
//Incluir a página sobre
            include_once 'paginas/includes/header.php';
            include_once 'paginas/sobre.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'servicos':
//Incluir a página serviços
            include_once 'paginas/includes/header.php';
            include_once 'paginas/servicos.php';
            include_once 'paginas/includes/footer.php';
            break;


        case 'produtos':
//Incluir a página produtos
            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'contato':
//Incluir a página contato
            include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'login':
//Incluir a página login
            include_once 'paginas/login.php';
            break;
        case 'login2':
//Incluir a página login2
            include_once 'paginas/login2.php';
            break;
        case 'login3':
//Incluir a página login3
            include_once 'paginas/login3.php';
            break;
        case 'login4':
//Incluir a página login4
            include_once 'paginas/login4.php';
            break;

        default:
//Pagina de Erro.
            echo 'pagina não encontrada <br>se lascou';
            break;
    }
} else {
    include_once 'paginas/includes/header.php';
    include_once 'paginas/inicio.php';
    include_once 'paginas/includes/footer.php';
}
