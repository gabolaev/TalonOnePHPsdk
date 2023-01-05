<?php
/**
 * UpdateReferral
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
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerSession](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2) endpoint is `https://mycompany.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 1.0.0
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
 * UpdateReferral Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateReferral implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateReferral';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'friendProfileIntegrationId' => 'string',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'usageLimit' => 'int',
        'attributes' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'friendProfileIntegrationId' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'usageLimit' => null,
        'attributes' => null
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
        'friendProfileIntegrationId' => 'friendProfileIntegrationId',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'usageLimit' => 'usageLimit',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'friendProfileIntegrationId' => 'setFriendProfileIntegrationId',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'usageLimit' => 'setUsageLimit',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'friendProfileIntegrationId' => 'getFriendProfileIntegrationId',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'usageLimit' => 'getUsageLimit',
        'attributes' => 'getAttributes'
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
        $this->container['friendProfileIntegrationId'] = isset($data['friendProfileIntegrationId']) ? $data['friendProfileIntegrationId'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['usageLimit'] = isset($data['usageLimit']) ? $data['usageLimit'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['friendProfileIntegrationId']) && (mb_strlen($this->container['friendProfileIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'friendProfileIntegrationId', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['usageLimit']) && ($this->container['usageLimit'] > 999999)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['usageLimit']) && ($this->container['usageLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be bigger than or equal to 0.";
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
     * Gets friendProfileIntegrationId
     *
     * @return string|null
     */
    public function getFriendProfileIntegrationId()
    {
        return $this->container['friendProfileIntegrationId'];
    }

    /**
     * Sets friendProfileIntegrationId
     *
     * @param string|null $friendProfileIntegrationId An optional Integration ID of the Friend's Profile.
     *
     * @return $this
     */
    public function setFriendProfileIntegrationId($friendProfileIntegrationId)
    {
        if (!is_null($friendProfileIntegrationId) && (mb_strlen($friendProfileIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $friendProfileIntegrationId when calling UpdateReferral., must be smaller than or equal to 1000.');
        }

        $this->container['friendProfileIntegrationId'] = $friendProfileIntegrationId;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Timestamp at which point the referral code becomes valid.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate Expiry date of the referral code. Referral never expires if this is omitted, zero, or negative.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets usageLimit
     *
     * @return int|null
     */
    public function getUsageLimit()
    {
        return $this->container['usageLimit'];
    }

    /**
     * Sets usageLimit
     *
     * @param int|null $usageLimit The number of times a referral code can be used. This can be set to 0 for no limit, but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usageLimit)
    {

        if (!is_null($usageLimit) && ($usageLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling UpdateReferral., must be smaller than or equal to 999999.');
        }
        if (!is_null($usageLimit) && ($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling UpdateReferral., must be bigger than or equal to 0.');
        }

        $this->container['usageLimit'] = $usageLimit;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes Arbitrary properties associated with this item.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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

