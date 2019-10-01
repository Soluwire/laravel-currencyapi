<?php

namespace soluwire\currencyapi\api;

class IPApi extends Api {
     /**
     * {@inheritdoc}
     */
    public $url = "http://ip-api.com/json/";
    

    function __construct($ip){
        $this->url = $this->url . $ip;
    }
}

?>