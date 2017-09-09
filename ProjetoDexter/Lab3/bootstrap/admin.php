<?php

require('../lib/View/View.php');

use lib\View\View as View;


$rotas = [

    '/' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/home/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('home/index');
    },

    /*
     * rotas/cliente
     */

    'cliente/index' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/clientes/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('clientes/index');
    },

    'cliente/inserir' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/clientes/insert.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('clientes/insert');
    },

    'cliente/editar' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/clientes/edit.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('clientes/editar');
    },

    /*
     * rotas/faleConosco
     */

    'faleConosco/index' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/faleConosco/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('faleConosco/index');
    },

    'faleConosco/see' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/faleConosco/see.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('faleConosco/see');
    },

    /*
     * rotas/funcionalidade
     */

    'funcionalidade/index' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionalidades/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionalidades/index');
    },

    'funcionalidade/inserir' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionalidades/insert.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionalidades/insert');
    },

    'funcionalidade/editar' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionalidades/edit.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionalidades/editar');
    },

    /*
     * rotas/funcionario
     */

    'funcionario/index' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionario/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionarios/index');
    },

    'funcionario/inserir' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionario/insert.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionarios/insert');
    },

    'funcionario/editar' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/funcionario/edit.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('funcionarios/editar');
    },

    /*
     * rotas/servico
     */

    'servico/index' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/servicos/index.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('servicos/index');
    },

    'servico/inserir' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/servicos/insert.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('servicos/insert');
    },

    'servico/editar' => function () {
        // include('../views/admin/layout/_topo.phtml');
        // include('../views/admin/servicos/edit.phtml');
        // include('../views/admin/layout/_rodape.phtml');

        View::admin('servicos/editar');
    },
];

$r = (isset($_GET['r']) && strlen($_GET['r']) > 0) ? $_GET['r'] : '/';
if (array_key_exists($r, $rotas)) {

    if (!is_callable($rotas[$r])) {
        header("HTTP/1.0 500 Fatal Error");
        exit();
    }

    $rotas[$r]();

} else {
    header("HTTP/1.0 404 Not Found");
    exit();
}