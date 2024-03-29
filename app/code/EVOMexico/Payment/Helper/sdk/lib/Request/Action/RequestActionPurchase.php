<?php

namespace EVOMexico\Payment\Helper\sdk\lib\Request\Action;


use EVOMexico\Payment\Helper\sdk\lib\Payments;

class RequestActionPurchase extends RequestActionAuth {

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_PURCHASE;
    }

}
