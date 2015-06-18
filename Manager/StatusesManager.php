<?php

namespace Nm\TwitterApiBundle\Manager;

/**
 * Description of StatusesManager
 *
 * @author mr
 */
class StatusesManager {

    private $client;

    public function __construct(\GuzzleHttp\Client $client) {
        $this->client = $client;
    }

    public function getHomeTimeline($count = 20) {
        return $this->client->get('statuses/home_timeline.json')->json();
    }

}
