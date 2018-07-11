<?php

use Postr\Utils;
use Postr\Core\HttpClient;
use Postr\Enums\HttpVerbs;

class Postr extends HttpClient {

    public function get($uri, $params = array())
    {
        return $this->call($uri, HttpVerbs::get, $params);
    }

    public function post($uri, $params = array())
    {
        return $this->call($uri, HttpVerbs::post, $params);
    }

    public function put($uri, $params = array())
    {
        return $this->call($uri, HttpVerbs::put, $params);
    }

    public function delete($uri, $params = array())
    {
        return $this->call($uri, HttpVerbs::delete, $params);
    }
}