<?php
/**
 * AccountDashboardStatistic
 *
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you access the Campaign Manager at `https://yourbaseurl.talon.one/`, the URL for the [updateCustomerSessionV2](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint is `https://yourbaseurl.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TalonOne\Client\Model;

use \ArrayAccess;
use \TalonOne\Client\ObjectSerializer;

/**
 * AccountDashboardStatistic Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountDashboardStatistic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountDashboardStatistic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'revenue' => '\TalonOne\Client\Model\AccountDashboardStatisticRevenue[]',
        'discounts' => '\TalonOne\Client\Model\AccountDashboardStatisticDiscount[]',
        'loyaltyPoints' => '\TalonOne\Client\Model\AccountDashboardStatisticLoyaltyPoints[]',
        'referrals' => '\TalonOne\Client\Model\AccountDashboardStatisticReferrals[]',
        'apiCalls' => '\TalonOne\Client\Model\AccountDashboardStatisticApiCalls[]',
        'campaigns' => '\TalonOne\Client\Model\AccountDashboardStatisticCampaigns'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'revenue' => null,
        'discounts' => null,
        'loyaltyPoints' => null,
        'referrals' => null,
        'apiCalls' => null,
        'campaigns' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'revenue' => 'revenue',
        'discounts' => 'discounts',
        'loyaltyPoints' => 'loyaltyPoints',
        'referrals' => 'referrals',
        'apiCalls' => 'apiCalls',
        'campaigns' => 'campaigns'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'revenue' => 'setRevenue',
        'discounts' => 'setDiscounts',
        'loyaltyPoints' => 'setLoyaltyPoints',
        'referrals' => 'setReferrals',
        'apiCalls' => 'setApiCalls',
        'campaigns' => 'setCampaigns'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'revenue' => 'getRevenue',
        'discounts' => 'getDiscounts',
        'loyaltyPoints' => 'getLoyaltyPoints',
        'referrals' => 'getReferrals',
        'apiCalls' => 'getApiCalls',
        'campaigns' => 'getCampaigns'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['loyaltyPoints'] = isset($data['loyaltyPoints']) ? $data['loyaltyPoints'] : null;
        $this->container['referrals'] = isset($data['referrals']) ? $data['referrals'] : null;
        $this->container['apiCalls'] = isset($data['apiCalls']) ? $data['apiCalls'] : null;
        $this->container['campaigns'] = isset($data['campaigns']) ? $data['campaigns'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaigns'] === null) {
            $invalidProperties[] = "'campaigns' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets revenue
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticRevenue[]|null
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticRevenue[]|null $revenue Aggregated statistic for account revenue.
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticDiscount[]|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticDiscount[]|null $discounts Aggregated statistic for account discount.
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets loyaltyPoints
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticLoyaltyPoints[]|null
     */
    public function getLoyaltyPoints()
    {
        return $this->container['loyaltyPoints'];
    }

    /**
     * Sets loyaltyPoints
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticLoyaltyPoints[]|null $loyaltyPoints Aggregated statistic for account loyalty points.
     *
     * @return $this
     */
    public function setLoyaltyPoints($loyaltyPoints)
    {
        $this->container['loyaltyPoints'] = $loyaltyPoints;

        return $this;
    }

    /**
     * Gets referrals
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticReferrals[]|null
     */
    public function getReferrals()
    {
        return $this->container['referrals'];
    }

    /**
     * Sets referrals
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticReferrals[]|null $referrals Aggregated statistic for account referrals.
     *
     * @return $this
     */
    public function setReferrals($referrals)
    {
        $this->container['referrals'] = $referrals;

        return $this;
    }

    /**
     * Gets apiCalls
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticApiCalls[]|null
     */
    public function getApiCalls()
    {
        return $this->container['apiCalls'];
    }

    /**
     * Sets apiCalls
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticApiCalls[]|null $apiCalls Aggregated statistic for the number of account API calls.
     *
     * @return $this
     */
    public function setApiCalls($apiCalls)
    {
        $this->container['apiCalls'] = $apiCalls;

        return $this;
    }

    /**
     * Gets campaigns
     *
     * @return \TalonOne\Client\Model\AccountDashboardStatisticCampaigns
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * Sets campaigns
     *
     * @param \TalonOne\Client\Model\AccountDashboardStatisticCampaigns $campaigns campaigns
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


