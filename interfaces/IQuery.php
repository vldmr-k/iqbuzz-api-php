<?php

namespace wowkaster\iqbuzzapi\interfaces;

/**
 * Interface IQuery
 */
interface IQuery {

    /**
     * @return array
     */
    public function getQueryParams();

    /**
     * @return array
     */
    public function getCurlOptions();

}