<?php

require('../lib/View/View.php');

use lib\View\View as View;

$rotas = [
    '/' => function () {

        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/index.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

         // lib\View\View::front('../views/front/site/index.phtml');

        View::front('site/index');
    },
    'site/index' => function () {
        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/index.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

        View::front('site/index');
    },
    'site/sobre' => function () {
        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/sobre.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

        View::front('site/sobre');
    },
    'site/servicos' => function () {
        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/servicos.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

        View::front('site/servicos');
    },
    'site/contato' => function () {
        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/contato.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

        View::front('site/contato');
    },
    'site/cadastro' => function () {
        // include( '../views/front/layout/_topo.phtml' );
        // include( '../views/front/site/cadastro.phtml' );
        // include( '../views/front/layout/_rodape.phtml' );

        View::front('site/cadastro');
    },
];

$r = ( isset( $_GET[ 'r' ] ) && strlen( $_GET[ 'r' ] ) > 0 ) ? $_GET[ 'r' ] : '/';

if ( array_key_exists( $r, $rotas ) ) 
{

    if ( !is_callable( $rotas[ $r ] ) ) {
        header( "HTTP/1.0 500 Fatal Error" );
        exit();
    }

    $rotas[ $r ]();

} 
else 
{
    header( "HTTP/1.0 404 Not Found" );
    exit();
}