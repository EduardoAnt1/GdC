<?php

function routes()
{
    return require 'routes.php';
}

function exactMatchUriInArrayRoutes($uri,$routes){
    if(array_key_exists($uri, $routes)){
        return [$uri => $routes[$uri] ];
    }
    return [];
}

function regularExpressionMatchArrayRoutes($uri,$routes){
    return array_filter(
        $routes,
        function ($value) use ($uri){
           $regex = str_replace('/','\/',ltrim($value,'/')); 
           return preg_match('/^'.$regex.'$/', ltrim($uri,'/'));
        },
        ARRAY_FILTER_USE_KEY
    );
}

function params($uri,$matchesUri){
    if(!empty($matchesUri)){
        $matchedToGetParams = array_keys($matchesUri)[0];
        return array_diff(
            $uri,
            explode('/',ltrim($matchedToGetParams,'/'))
        );
    }
    return [];
}

function formate_params($uri,$params){
    $paramsData = [];
    foreach($params as $index => $param){
        $paramsData[$uri[$index -1]] = $param;
    }
    return $paramsData;  
}

function router() 
{
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $routes = routes();

    $matchesUri = exactMatchUriInArrayRoutes($uri,$routes); 
    $paramss = [];
    if(empty($matchesUri)){
        $matchesUri = regularExpressionMatchArrayRoutes($uri,$routes);
        $uri = explode('/',ltrim($uri,'/'));
        $params = params($uri,$matchesUri);
        $params = formate_params($uri,$params);
    }

    if(!empty($matchesUri)){
        return controller($matchesUri,$params);
    }

    throw new Exception('Algo deu errado');
}