<?php

class QuerySimple extends QueryAbstract implements IQuery {

    public function getQueryParams() {
        return $this->getParams();
    }
}