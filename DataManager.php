<?php

class DataManager
{
    const DATA_FILE = 'data/response.json';

    private $data;

    public function __construct($dataInput)
    {
        $this->data = $dataInput;
        return $this;
    }

    public function save() 
    {
        try {
            $jsonData       = json_encode($this->data);
            $file           = fopen(self::DATA_FILE, 'a');
            fwrite($file, $jsonData);
            fclose($file);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function debugData() 
    {
        var_dump($this->data);
    }
}
