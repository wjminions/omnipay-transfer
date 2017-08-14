<?php

namespace Omnipay\Transfer;

use Omnipay\Common\AbstractGateway;

/**
 * Class ApprovedGateway
 * @package Omnipay\Transfer
 */
class ApprovedGateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Transfer_Approved';
    }


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


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Transfer\Message\ApprovedPurchaseRequest', $parameters);
    }


    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Transfer\Message\ApprovedCompletePurchaseRequest', $parameters);
    }
}
