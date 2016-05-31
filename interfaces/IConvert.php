<?php

namespace wowkaster\iqbuzzapi\interfaces;

/**
 * Interface IConvert
 */
interface IConvert {

    /**
     * @param $data
     * @return string|array
     */
    public function convert($data);
}