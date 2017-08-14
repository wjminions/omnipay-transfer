<?php

namespace Omnipay\Transfer\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Transfer\Helper;

/**
 * Class ApprovedPurchaseResponse
 * @package Omnipay\Transfer\Message
 */
class ApprovedPurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{

    public function isSuccessful()
    {
        return false;
    }

    public function isRedirect()
    {
        return true;
    }

    public function getRedirectUrl()
    {
        return $this->data['transfer_url'];
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }

    public function getRedirectData()
    {
        return $this->data;
    }

    public function getRedirectHtml()
    {
        return false;
    }
}
