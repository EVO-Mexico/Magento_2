<?php

namespace EVOMexico\Payment\Helper\sdk\lib\Request\Action;

use EVOMexico\Payment\Helper\sdk\lib\Payments;
use EVOMexico\Payment\Helper\sdk\lib\Request\RequestAction;

class RequestActionStatusCheck extends RequestAction {

    protected $_params = array(
        "merchantId" => array("type" => "mandatory"),
        "token" => array("type" => "mandatory"),
        "action" => array(
            "type" => "mandatory",
            "values" => array(Payments::ACTION_STATUS_CHECK),
        ),
        "txId" => array("type" => "optional"),
        "merchantTxId" => array("type" => "optional"),
    );

    public function __construct() {
        parent::__construct();
        $this->_data["action"] = Payments::ACTION_STATUS_CHECK;
    }

}
