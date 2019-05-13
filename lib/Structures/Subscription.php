<?php

namespace StackPay\Payments\Structures;

use StackPay\Payments\Interfaces;

class Subscription implements Interfaces\Subscription
{
    public $id;
    public $paymentMethod;
    public $paymentPlan;
    public $externalID;
    public $amount;
    public $splitAmount;
    public $splitMerchant;
    public $downPaymentAmount;
    public $downPaymentTransaction;
    public $scheduledTransactions;
    public $day;
    public $currencyCode;
    public $completionFee;

    public function id()
    {
        return $this->id;
    }
    
    public function paymentMethod()
    {
        return $this->paymentMethod;
    }
    
    public function paymentPlan()
    {
        return $this->paymentPlan;
    }

    public function externalID()
    {
        return $this->externalID;
    }

    public function amount()
    {
        return $this->amount;
    }

    public function splitAmount()
    {
        return $this->splitAmount;
    }

    public function splitMerchant()
    {
        return $this->splitMerchant;
    }

    public function completionFee()
    {
        return $this->completionFee;
    }

    public function downPaymentAmount()
    {
        return $this->downPaymentAmount;
    }

    public function downPaymentTransaction()
    {
        return $this->downPaymentTransaction;
    }

    public function scheduledTransactions()
    {
        return $this->scheduledTransactions;
    }

    public function day()
    {
        return $this->day;
    }

    public function currencyCode()
    {
        return $this->currencyCode;
    }

    // --------

    public function setID($id = null)
    {
        $this->id = $id;

        return $this;
    }

    public function setPaymentMethod(Interfaces\PaymentMethod $paymentMethod = null)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function setPaymentPlan(Interfaces\PaymentPlan $paymentPlan = null)
    {
        $this->paymentPlan = $paymentPlan;

        return $this;
    }

    public function setExternalID($externalID = null)
    {
        $this->externalID = $externalID;

        return $this;
    }

    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    public function setSplitMerchant(Interfaces\Merchant $splitMerchant = null)
    {
        $this->splitMerchant = $splitMerchant;

        return $this;
    }

    public function setSplitAmount($splitAmount = null)
    {
        $this->splitAmount = $splitAmount;

        return $this;
    }

    public function setCompletionFee($completionFee = null)
    {
        $this->completionFee = $completionFee;

        return $this;
    }

    public function setDownPaymentAmount($downPaymentAmount = null)
    {
        $this->downPaymentAmount = $downPaymentAmount;

        return $this;
    }

    public function setDownPaymentTransaction(Interfaces\Transaction $downPaymentTransaction = null)
    {
        $this->downPaymentTransaction = $downPaymentTransaction;

        return $this;
    }

    public function setScheduledTransactions(array $scheduledTransactions = null)
    {
        $this->scheduledTransactions = $scheduledTransactions;

        return $this;
    }

    public function setDay($day = null)
    {
        $this->day = $day;

        return $this;
    }

    public function setCurrencyCode($currencyCode = null)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }
}
