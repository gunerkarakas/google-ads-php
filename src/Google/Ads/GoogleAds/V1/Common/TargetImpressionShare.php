<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/bidding.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An automated bidding strategy that sets bids so that a certain percentage of
 * search ads are shown at the top of the first page (or other targeted
 * location).
 * Next Id = 4
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.TargetImpressionShare</code>
 */
class TargetImpressionShare extends \Google\Protobuf\Internal\Message
{
    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     */
    private $location = 0;
    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value location_fraction_micros = 2;</code>
     */
    private $location_fraction_micros = null;
    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     */
    private $cpc_bid_ceiling_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location
     *           The targeted location on the search results page.
     *     @type \Google\Protobuf\Int64Value $location_fraction_micros
     *           The desired fraction of ads to be shown in the targeted location in micros.
     *           E.g. 1% equals 10,000.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           The highest CPC bid the automated bidding system is permitted to specify.
     *           This is a required field entered by the advertiser that sets the ceiling
     *           and specified in local micros.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The targeted location on the search results page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation location = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\TargetImpressionShareLocationEnum_TargetImpressionShareLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value location_fraction_micros = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLocationFractionMicros()
    {
        return $this->location_fraction_micros;
    }

    /**
     * Returns the unboxed value from <code>getLocationFractionMicros()</code>

     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value location_fraction_micros = 2;</code>
     * @return int|string|null
     */
    public function getLocationFractionMicrosValue()
    {
        $wrapper = $this->getLocationFractionMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value location_fraction_micros = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLocationFractionMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->location_fraction_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The desired fraction of ads to be shown in the targeted location in micros.
     * E.g. 1% equals 10,000.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value location_fraction_micros = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setLocationFractionMicrosValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setLocationFractionMicros($wrappedVar);
    }

    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidCeilingMicros()
    {
        return $this->cpc_bid_ceiling_micros;
    }

    /**
     * Returns the unboxed value from <code>getCpcBidCeilingMicros()</code>

     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @return int|string|null
     */
    public function getCpcBidCeilingMicrosValue()
    {
        $wrapper = $this->getCpcBidCeilingMicros();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The highest CPC bid the automated bidding system is permitted to specify.
     * This is a required field entered by the advertiser that sets the ceiling
     * and specified in local micros.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCpcBidCeilingMicrosValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\Int64Value(['value' => $var]);
        return $this->setCpcBidCeilingMicros($wrappedVar);
    }

}

