<?php

class IQBuzzResponse {

    private $xmlString;

    public function __construct($xmlString) {
        $this->xmlString = $xmlString;
    }

    public function toArray() {
        $converter = new ConvertXmlToArray();
        return $converter->convert($this->xmlString);
    }

    public function toXml() {
        return $this->xmlString;
    }
}