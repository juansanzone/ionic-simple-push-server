<?php

class WebHookManager
{
    private $hookResponse = array();

    public function __construct()
    {
        $bodyData = json_decode(file_get_contents('php://input'), true);

        if (!is_null($bodyData)) {
            $this->hookResponse = $bodyData;
        } else {
            $this->hookResponse = false;
        }
    }

    public function getResponse() 
    {
        return $this->hookResponse;
    }
}
