<?php
    namespace App;
    use Composer\DependencyResolver\Request;

    class Route{
        public function initRoutes(){
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            );   

            $routes['home'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'SobreNos'
            );   
  }
        public function getUrl(){
            return parse_url( $_SERVER{'REQUEST_URI'}, PHP_URL_PATH);
        }
    }
?>