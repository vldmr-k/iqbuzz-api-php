<?php

namespace wowkaster\iqbuzzapi;

class IQBuzzRequest {

    /**
     * @var array
     */
    private $params = array();

    /**
     * @var
     */
    private $url;

    /**
     * @var
     */
    private $responseCode;

    /**
     * @var array
     */
    private $errors = array();

    /**
     * @var array
     */
    private $options = array(
        CURLOPT_RETURNTRANSFER => 1
    );

    /**
     * @param $key
     * @param $value
     */
    public function setOptions($key, $value) {
        $this->options[$key] = $value;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setParam($key, $value) {
        $this->params[$key] = $value;
    }

    /**
     * @param $url
     */
    public function setUr($url) {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    private function getQueryString() {

        $queryPair = array();
        foreach($this->params as $key => $value) {
            $queryPair[] = $key.'='.$value;
        }

        return $this->filterQueryString(implode('&', $queryPair));
    }

    /**
     * @return string
     */
    public function getResult() {
        $curl = curl_init();

        $queryString = $this->getQueryString();

        if(isset($this->options[CURLOPT_POST]) && $this->options[CURLOPT_POST]) {
            $this->setOptions(CURLOPT_URL,  $this->url);
            $this->setOptions(CURLOPT_POST,  1);
            $this->setOptions(CURLOPT_POSTFIELDS,  $queryString);
        } else {
            $this->setOptions(CURLOPT_URL,  $this->url.'?'.$queryString);
        }

        curl_setopt_array($curl, $this->options);
        $resp = curl_exec($curl);
        curl_close($curl);
        return $resp;
    }

    /**
     * @param $string
     * @return string
     */
    private function filterQueryString($string) {
        return preg_replace("#[\r|\n|\t|\s]#", '', $string);
    }

}