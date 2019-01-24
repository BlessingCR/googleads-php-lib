<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateTimeValue extends \Google\AdsApi\AdManager\v201811\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v201811\DateTime $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v201811\DateTime $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201811\DateTime
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201811\DateTime $value
     * @return \Google\AdsApi\AdManager\v201811\DateTimeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}