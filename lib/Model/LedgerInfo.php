<?php
/**
 * LedgerInfo
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
 * LedgerInfo Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LedgerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LedgerInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currentBalance' => 'float',
        'pendingBalance' => 'float',
        'expiredBalance' => 'float',
        'spentBalance' => 'float',
        'tentativeCurrentBalance' => 'float',
        'currentTier' => '\TalonOne\Client\Model\Tier',
        'pointsToNextTier' => 'float',
        'projection' => '\TalonOne\Client\Model\LoyaltyProjection'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currentBalance' => null,
        'pendingBalance' => null,
        'expiredBalance' => null,
        'spentBalance' => null,
        'tentativeCurrentBalance' => null,
        'currentTier' => null,
        'pointsToNextTier' => null,
        'projection' => null
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
        'currentBalance' => 'currentBalance',
        'pendingBalance' => 'pendingBalance',
        'expiredBalance' => 'expiredBalance',
        'spentBalance' => 'spentBalance',
        'tentativeCurrentBalance' => 'tentativeCurrentBalance',
        'currentTier' => 'currentTier',
        'pointsToNextTier' => 'pointsToNextTier',
        'projection' => 'projection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currentBalance' => 'setCurrentBalance',
        'pendingBalance' => 'setPendingBalance',
        'expiredBalance' => 'setExpiredBalance',
        'spentBalance' => 'setSpentBalance',
        'tentativeCurrentBalance' => 'setTentativeCurrentBalance',
        'currentTier' => 'setCurrentTier',
        'pointsToNextTier' => 'setPointsToNextTier',
        'projection' => 'setProjection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currentBalance' => 'getCurrentBalance',
        'pendingBalance' => 'getPendingBalance',
        'expiredBalance' => 'getExpiredBalance',
        'spentBalance' => 'getSpentBalance',
        'tentativeCurrentBalance' => 'getTentativeCurrentBalance',
        'currentTier' => 'getCurrentTier',
        'pointsToNextTier' => 'getPointsToNextTier',
        'projection' => 'getProjection'
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
        $this->container['currentBalance'] = isset($data['currentBalance']) ? $data['currentBalance'] : null;
        $this->container['pendingBalance'] = isset($data['pendingBalance']) ? $data['pendingBalance'] : null;
        $this->container['expiredBalance'] = isset($data['expiredBalance']) ? $data['expiredBalance'] : null;
        $this->container['spentBalance'] = isset($data['spentBalance']) ? $data['spentBalance'] : null;
        $this->container['tentativeCurrentBalance'] = isset($data['tentativeCurrentBalance']) ? $data['tentativeCurrentBalance'] : null;
        $this->container['currentTier'] = isset($data['currentTier']) ? $data['currentTier'] : null;
        $this->container['pointsToNextTier'] = isset($data['pointsToNextTier']) ? $data['pointsToNextTier'] : null;
        $this->container['projection'] = isset($data['projection']) ? $data['projection'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currentBalance'] === null) {
            $invalidProperties[] = "'currentBalance' can't be null";
        }
        if ($this->container['pendingBalance'] === null) {
            $invalidProperties[] = "'pendingBalance' can't be null";
        }
        if ($this->container['expiredBalance'] === null) {
            $invalidProperties[] = "'expiredBalance' can't be null";
        }
        if ($this->container['spentBalance'] === null) {
            $invalidProperties[] = "'spentBalance' can't be null";
        }
        if ($this->container['tentativeCurrentBalance'] === null) {
            $invalidProperties[] = "'tentativeCurrentBalance' can't be null";
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
     * Gets currentBalance
     *
     * @return float
     */
    public function getCurrentBalance()
    {
        return $this->container['currentBalance'];
    }

    /**
     * Sets currentBalance
     *
     * @param float $currentBalance Sum of currently active points.
     *
     * @return $this
     */
    public function setCurrentBalance($currentBalance)
    {
        $this->container['currentBalance'] = $currentBalance;

        return $this;
    }

    /**
     * Gets pendingBalance
     *
     * @return float
     */
    public function getPendingBalance()
    {
        return $this->container['pendingBalance'];
    }

    /**
     * Sets pendingBalance
     *
     * @param float $pendingBalance Sum of pending points.
     *
     * @return $this
     */
    public function setPendingBalance($pendingBalance)
    {
        $this->container['pendingBalance'] = $pendingBalance;

        return $this;
    }

    /**
     * Gets expiredBalance
     *
     * @return float
     */
    public function getExpiredBalance()
    {
        return $this->container['expiredBalance'];
    }

    /**
     * Sets expiredBalance
     *
     * @param float $expiredBalance Sum of expired points.
     *
     * @return $this
     */
    public function setExpiredBalance($expiredBalance)
    {
        $this->container['expiredBalance'] = $expiredBalance;

        return $this;
    }

    /**
     * Gets spentBalance
     *
     * @return float
     */
    public function getSpentBalance()
    {
        return $this->container['spentBalance'];
    }

    /**
     * Sets spentBalance
     *
     * @param float $spentBalance Sum of spent points.
     *
     * @return $this
     */
    public function setSpentBalance($spentBalance)
    {
        $this->container['spentBalance'] = $spentBalance;

        return $this;
    }

    /**
     * Gets tentativeCurrentBalance
     *
     * @return float
     */
    public function getTentativeCurrentBalance()
    {
        return $this->container['tentativeCurrentBalance'];
    }

    /**
     * Sets tentativeCurrentBalance
     *
     * @param float $tentativeCurrentBalance Sum of currently active points, including points added and deducted in open sessions.
     *
     * @return $this
     */
    public function setTentativeCurrentBalance($tentativeCurrentBalance)
    {
        $this->container['tentativeCurrentBalance'] = $tentativeCurrentBalance;

        return $this;
    }

    /**
     * Gets currentTier
     *
     * @return \TalonOne\Client\Model\Tier|null
     */
    public function getCurrentTier()
    {
        return $this->container['currentTier'];
    }

    /**
     * Sets currentTier
     *
     * @param \TalonOne\Client\Model\Tier|null $currentTier currentTier
     *
     * @return $this
     */
    public function setCurrentTier($currentTier)
    {
        $this->container['currentTier'] = $currentTier;

        return $this;
    }

    /**
     * Gets pointsToNextTier
     *
     * @return float|null
     */
    public function getPointsToNextTier()
    {
        return $this->container['pointsToNextTier'];
    }

    /**
     * Sets pointsToNextTier
     *
     * @param float|null $pointsToNextTier Points required to move up a tier.
     *
     * @return $this
     */
    public function setPointsToNextTier($pointsToNextTier)
    {
        $this->container['pointsToNextTier'] = $pointsToNextTier;

        return $this;
    }

    /**
     * Gets projection
     *
     * @return \TalonOne\Client\Model\LoyaltyProjection|null
     */
    public function getProjection()
    {
        return $this->container['projection'];
    }

    /**
     * Sets projection
     *
     * @param \TalonOne\Client\Model\LoyaltyProjection|null $projection projection
     *
     * @return $this
     */
    public function setProjection($projection)
    {
        $this->container['projection'] = $projection;

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


