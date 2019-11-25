<?php

namespace Drupal\movie_module\Controller;

use Symfony\Component\HttpFoundation\Response;



class MoviesController{

    public function movie(){
        return new Response("movie");
    }

}