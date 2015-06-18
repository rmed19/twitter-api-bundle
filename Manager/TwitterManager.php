<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Nm\TwitterApiBundle\Manager;

/**
 * Description of TwitterManager
 *
 * @author mr
 */
class TwitterManager extends BaseManager {
    
    public function getStatuses()
    {
        return new StatusesManager($this->client);
    }
}
