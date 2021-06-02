<?php

namespace EVOMexico\Payment\Helper\sdk\lib\Response\Error;

use EVOMexico\Payment\Helper\sdk\lib\Response;

class ResponseErrorErrors extends Response {

    public function __construct($errors = array()) {
        if (is_array($errors)) {
            foreach ($errors as $error) {
                $this->_data[$error] = $error;
            }
        } else {
            $this->_data[$errors] = $errors;
        }
    }

}
