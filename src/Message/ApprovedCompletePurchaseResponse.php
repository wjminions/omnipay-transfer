<?php

namespace Omnipay\Transfer\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Class ApprovedCompletePurchaseResponse
 * @package Omnipay\Transfer\Message
 */
class ApprovedCompletePurchaseResponse extends AbstractResponse
{

    public function isPaid()
    {
        if ($this->data['is_paid']) {
            return true;
        }

        return false;
    }


    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return true;
    }
}
