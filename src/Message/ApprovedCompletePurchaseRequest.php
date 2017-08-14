<?php

namespace Omnipay\Transfer\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Transfer\Helper;

/**
 * Class ApprovedCompletePurchaseRequest
 * @package Omnipay\Transfer\Message
 */
class ApprovedCompletePurchaseRequest extends AbstractApprovedRequest
{

    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->getRequestParams();
    }


    public function setRequestParams($value)
    {
        $this->setParameter('request_params', $value);
    }


    public function getRequestParams()
    {
        return $this->getParameter('request_params');
    }


    public function getRequestParam($key)
    {
        $params = $this->getRequestParams();
        if (isset($params[$key])) {
            return $params[$key];
        } else {
            return null;
        }
    }


    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     *
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        $data['is_paid'] = false;
        if (isset($data['sign']) && $data['sign'] == md5($data['pay_id'] . $this->getCode()) && $data['success']) {
            $data['is_paid'] = true;
        }

        return $this->response = new ApprovedCompletePurchaseResponse($this, $data);
    }
}
