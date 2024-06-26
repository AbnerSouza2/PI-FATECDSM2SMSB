<?php
require_once __DIR__."/../utils/autoload.php";

$routes = [
    '/' => 'HomeController@index',
    '/login' => 'LoginController@index',
    '/login/auth'  => 'LoginController@autenthication',
    '/cadastro' => 'CadastroController@index',
    '/proximo/validador' => 'ProximoController@validator',
    '/proximo' => 'ProximoController@index',
    '/acesso' => 'CadastraFinalController@insert',
    '/acessomed' => 'CadastramedFinalController@insert',
    '/home' => 'LogoutController@index',
    '/cadastromed' => 'CadastromedController@index',
    '/consulta' => 'ConsultaController@index',
    '/proximomed/validador' => 'ProximoMedController@validator',
    '/proximomed' => 'ProximoMedController@index',
    '/editaconsulta' => 'EditaconsultaController@index',
    '/buscapaciente' => 'EditaconsultaController@buscapaciente',
    '/buscapaciente/{id}' => 'AtualizaconsultaController@index',
    '/atualizapaciente/{id}' => 'AtualizaconsultaController@atualizapaciente',
    '/visualizaconsulta' => 'VisualizaconsultaController@index',
    '/agendaconsulta/confirma' => 'ConfirmaconsultaController@index',
    '/funcionario' => 'FuncionarioController@index'
];