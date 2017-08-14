<?php

namespace Omnipay\Transfer\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Transfer\Helper;

/**
 * Class AbstractApprovedRequest
 * @package Omnipay\Transfer\Message
 */
abstract class AbstractApprovedRequest extends AbstractRequest
{
    public function setTransferUrl($value)
    {
        return $this->setParameter('transfer_url', $value);
    }

    public function getTransferUrl()
    {
        return $this->getParameter('transfer_url');
    }


    public function setCode($value)
    {
        return $this->setParameter('code', $value);
    }

    public function getCode()
    {
        return $this->getParameter('code');
    }
}
