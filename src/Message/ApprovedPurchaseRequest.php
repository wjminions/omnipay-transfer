<?php

namespace Omnipay\Transfer\Message;

use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Transfer\Helper;

/**
 * Class ApprovedPurchaseRequest
 *
 * @package Omnipay\Transfer\Message
 */
class ApprovedPurchaseRequest extends AbstractApprovedRequest
{

    /**
     * @return mixed
     */
    public function getData()
    {
        $this->validateData();

        $data = array(
            'transfer_url' => $this->getTransferUrl()
        );

        return $data;
    }

    private function validateData()
    {
        $this->validate(
            'transfer_url'
        );
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed $data The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        return $this->response = new ApprovedPurchaseResponse($this, $data);
    }
}
