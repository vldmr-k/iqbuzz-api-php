<?php

namespace wowkaster\iqbuzzapi\queries;

use wowkaster\iqbuzzapi\interfaces\IQuery;

class QuerySimple extends QueryAbstract implements IQuery {

    public function getQueryParams() {
        return $this->getParams();
    }

    public function getCurlOptions() {
        return [];
    }
}