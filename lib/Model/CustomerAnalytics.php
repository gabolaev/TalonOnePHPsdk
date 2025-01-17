<?php
/**
 * CustomerAnalytics
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
 * CustomerAnalytics Class Doc Comment
 *
 * @category Class
 * @description A summary report of customer activity for a given time range.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerAnalytics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acceptedCoupons' => 'int',
        'createdCoupons' => 'int',
        'freeItems' => 'int',
        'totalOrders' => 'int',
        'totalDiscountedOrders' => 'int',
        'totalRevenue' => 'float',
        'totalDiscounts' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'acceptedCoupons' => null,
        'createdCoupons' => null,
        'freeItems' => null,
        'totalOrders' => null,
        'totalDiscountedOrders' => null,
        'totalRevenue' => null,
        'totalDiscounts' => null
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
        'acceptedCoupons' => 'acceptedCoupons',
        'createdCoupons' => 'createdCoupons',
        'freeItems' => 'freeItems',
        'totalOrders' => 'totalOrders',
        'totalDiscountedOrders' => 'totalDiscountedOrders',
        'totalRevenue' => 'totalRevenue',
        'totalDiscounts' => 'totalDiscounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptedCoupons' => 'setAcceptedCoupons',
        'createdCoupons' => 'setCreatedCoupons',
        'freeItems' => 'setFreeItems',
        'totalOrders' => 'setTotalOrders',
        'totalDiscountedOrders' => 'setTotalDiscountedOrders',
        'totalRevenue' => 'setTotalRevenue',
        'totalDiscounts' => 'setTotalDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptedCoupons' => 'getAcceptedCoupons',
        'createdCoupons' => 'getCreatedCoupons',
        'freeItems' => 'getFreeItems',
        'totalOrders' => 'getTotalOrders',
        'totalDiscountedOrders' => 'getTotalDiscountedOrders',
        'totalRevenue' => 'getTotalRevenue',
        'totalDiscounts' => 'getTotalDiscounts'
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
        $this->container['acceptedCoupons'] = isset($data['acceptedCoupons']) ? $data['acceptedCoupons'] : null;
        $this->container['createdCoupons'] = isset($data['createdCoupons']) ? $data['createdCoupons'] : null;
        $this->container['freeItems'] = isset($data['freeItems']) ? $data['freeItems'] : null;
        $this->container['totalOrders'] = isset($data['totalOrders']) ? $data['totalOrders'] : null;
        $this->container['totalDiscountedOrders'] = isset($data['totalDiscountedOrders']) ? $data['totalDiscountedOrders'] : null;
        $this->container['totalRevenue'] = isset($data['totalRevenue']) ? $data['totalRevenue'] : null;
        $this->container['totalDiscounts'] = isset($data['totalDiscounts']) ? $data['totalDiscounts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['acceptedCoupons'] === null) {
            $invalidProperties[] = "'acceptedCoupons' can't be null";
        }
        if ($this->container['createdCoupons'] === null) {
            $invalidProperties[] = "'createdCoupons' can't be null";
        }
        if ($this->container['freeItems'] === null) {
            $invalidProperties[] = "'freeItems' can't be null";
        }
        if ($this->container['totalOrders'] === null) {
            $invalidProperties[] = "'totalOrders' can't be null";
        }
        if ($this->container['totalDiscountedOrders'] === null) {
            $invalidProperties[] = "'totalDiscountedOrders' can't be null";
        }
        if ($this->container['totalRevenue'] === null) {
            $invalidProperties[] = "'totalRevenue' can't be null";
        }
        if ($this->container['totalDiscounts'] === null) {
            $invalidProperties[] = "'totalDiscounts' can't be null";
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
     * Gets acceptedCoupons
     *
     * @return int
     */
    public function getAcceptedCoupons()
    {
        return $this->container['acceptedCoupons'];
    }

    /**
     * Sets acceptedCoupons
     *
     * @param int $acceptedCoupons Total accepted coupons for this customer.
     *
     * @return $this
     */
    public function setAcceptedCoupons($acceptedCoupons)
    {
        $this->container['acceptedCoupons'] = $acceptedCoupons;

        return $this;
    }

    /**
     * Gets createdCoupons
     *
     * @return int
     */
    public function getCreatedCoupons()
    {
        return $this->container['createdCoupons'];
    }

    /**
     * Sets createdCoupons
     *
     * @param int $createdCoupons Total created coupons for this customer.
     *
     * @return $this
     */
    public function setCreatedCoupons($createdCoupons)
    {
        $this->container['createdCoupons'] = $createdCoupons;

        return $this;
    }

    /**
     * Gets freeItems
     *
     * @return int
     */
    public function getFreeItems()
    {
        return $this->container['freeItems'];
    }

    /**
     * Sets freeItems
     *
     * @param int $freeItems Total free items given to this customer.
     *
     * @return $this
     */
    public function setFreeItems($freeItems)
    {
        $this->container['freeItems'] = $freeItems;

        return $this;
    }

    /**
     * Gets totalOrders
     *
     * @return int
     */
    public function getTotalOrders()
    {
        return $this->container['totalOrders'];
    }

    /**
     * Sets totalOrders
     *
     * @param int $totalOrders Total orders made by this customer.
     *
     * @return $this
     */
    public function setTotalOrders($totalOrders)
    {
        $this->container['totalOrders'] = $totalOrders;

        return $this;
    }

    /**
     * Gets totalDiscountedOrders
     *
     * @return int
     */
    public function getTotalDiscountedOrders()
    {
        return $this->container['totalDiscountedOrders'];
    }

    /**
     * Sets totalDiscountedOrders
     *
     * @param int $totalDiscountedOrders Total orders made by this customer that had a discount.
     *
     * @return $this
     */
    public function setTotalDiscountedOrders($totalDiscountedOrders)
    {
        $this->container['totalDiscountedOrders'] = $totalDiscountedOrders;

        return $this;
    }

    /**
     * Gets totalRevenue
     *
     * @return float
     */
    public function getTotalRevenue()
    {
        return $this->container['totalRevenue'];
    }

    /**
     * Sets totalRevenue
     *
     * @param float $totalRevenue Total Revenue across all closed sessions.
     *
     * @return $this
     */
    public function setTotalRevenue($totalRevenue)
    {
        $this->container['totalRevenue'] = $totalRevenue;

        return $this;
    }

    /**
     * Gets totalDiscounts
     *
     * @return float
     */
    public function getTotalDiscounts()
    {
        return $this->container['totalDiscounts'];
    }

    /**
     * Sets totalDiscounts
     *
     * @param float $totalDiscounts The sum of discounts that were given across all closed sessions.
     *
     * @return $this
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->container['totalDiscounts'] = $totalDiscounts;

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


