<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Nm\TwitterApiBundle\Manager;


use Symfony\Component\DependencyInjection\ContainerInterface;

use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Oauth\Oauth1;

/**
 * Description of BaseManager
 *
 * @author mr
 */
class BaseManager {

    const URL = "https://api.twitter.com/1.1/";

    protected $client;

    public function __construct(ContainerInterface $container) {
        $this->client = new Client(['base_url' => self::URL, 'defaults' => ['auth' => 'oauth']]);
        $this->authenticate($container->getParameter("nm_twitter_api"));
    }

    private function authenticate($params) {
        $oauth = new Oauth1([
            'consumer_key' => $params['consumer_key'],
            'consumer_secret' => $params['consumer_secret'],
            'token' => $params['access_token'],
            'token_secret' => $params['access_token_secret']
        ]);
        
        $this->client->getEmitter()->attach($oauth);
    }

}
