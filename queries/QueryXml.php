<?php

class QueryXml extends QueryAbstract implements IQuery {

    private $rootName;

    public function setRootName($rootName) {
        $this->rootName = $rootName;
    }

    public function getQueryParams() {
        $helper = new ConvertArrayToXml();
        $helper->setRootName($this->rootName);

        return array(
            'reqStr' => $helper->convert($this->getParams())
        );
    }
}