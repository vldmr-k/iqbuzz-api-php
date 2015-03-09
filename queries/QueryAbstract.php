<?php

class QueryAbstract {
    /**
     * @var string
     */
    protected $baseUrl = 'http://service.iqbuzz.ru/actions/api';

    /**
     * @var array
     */
    protected $params = array();

    /**
     * @var string
     */
    private $apiMethod;

    /**
     * @param array $params
     */
    public function setParams(array $params) {
        foreach($params as $key => $value) {
            $this->setParam($key, $value);
        }
    }

    /**
     * @return array
     */
    public function getParams() {
        return $this->params;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setParam($key, $value) {
        $this->params[$key] = $value;
    }

    /**
     * @param $method
     */
    public function setApiMethod($method) {
        $this->apiMethod = $method;
    }

    /**
     * @return string
     */
    public function getQueryUrl() {
        return strtr('{baseUrl}/{apiMethod}',
            array(
                '{baseUrl}' => $this->baseUrl,
                '{apiMethod}' => $this->apiMethod
            )
        );
    }


}