<?php

/**
 * Class ConvertArrayToXml
 */
class ConvertArrayToXml implements IConvert {

    private $version = '1.0';
    private $encoding = 'UTF-8';
    private $rootName = 'root';

    /**
     * @param $data
     * @return mixed
     */
    public function convert($data) {
        $writer = new SimpleXMLElement("<?xml version=\"{$this->version}\"?><{$this->rootName}></{$this->rootName}>");
        if (is_array($data)) {
            $this->getXML($data, $writer);
        }

        return $writer->asXML();
    }

    /**
     * @param $version
     */
    public function setVersion($version) {
        $this->version = $version;
    }

    /**
     * @param $encoding
     */
    public function setEncoding($encoding) {
        $this->encoding = $encoding;
    }

    /**
     * @param $rootName
     */
    public function setRootName($rootName) {
        $this->rootName = $rootName;
    }

    /**
     * @param $data
     * @param $writer
     */
    private function getXml($data, &$writer) {
        foreach($data as $key => $value) {
            if(is_array($value)) {
                if(!is_numeric($key)){
                    $subnode = $writer->addChild($key);
                    $this->getXml($value, $subnode);
                } else {
                    $key = current(array_keys($value));
                    $value = current($value);

                    if(!is_array($value)) {
                        $writer->addChild($key, $value);
                    } else {
                        $subnode = $writer->addChild($key);
                        $this->getXml($value, $subnode);
                    }
                }
            } else {
                $writer->addChild($key, $value);
            }
        }
    }

}
