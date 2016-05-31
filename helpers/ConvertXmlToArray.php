<?php


namespace wowkaster\iqbuzzapi\helpers;
use wowkaster\iqbuzzapi\interfaces\IConvert;

/**
 * Class ConvertXmlToArray
 */
class ConvertXmlToArray implements IConvert {

    /**
     * @param $xmlString
     * @return array
     */
    public function convert($xmlString) {
        $xmlString = simplexml_load_string($xmlString);
        //hack
        $json = json_encode($xmlString);
        return json_decode($json,TRUE);
    }
}