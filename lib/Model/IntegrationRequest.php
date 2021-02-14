<?php
/**
 * IntegrationRequest
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
 * The Talon.One API is used to manage applications and campaigns, as well as to integrate with your application. The operations in the _Integration API_ section are used to integrate with our platform, while the other operations are used to manage applications and campaigns.  ### Where is the API?  The API is available at the same hostname as these docs. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerProfile][] operation is `https://mycompany.talon.one/v1/customer_profiles/id`  [updateCustomerProfile]: #operation--v1-customer_profiles--integrationId--put
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
 * IntegrationRequest Class Doc Comment
 *
 * @category Class
 * @description The body of a V2 integration API request (customer session update). Next to the customer session details, this contains an optional listing of extra properties that should be returned in the response.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customerSession' => '\TalonOne\Client\Model\NewCustomerSessionV2',
        'responseContent' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'customerSession' => null,
        'responseContent' => null
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
        'customerSession' => 'customerSession',
        'responseContent' => 'responseContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerSession' => 'setCustomerSession',
        'responseContent' => 'setResponseContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerSession' => 'getCustomerSession',
        'responseContent' => 'getResponseContent'
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

    const RESPONSE_CONTENT_CUSTOMER_SESSION = 'customerSession';
    const RESPONSE_CONTENT_CUSTOMER_PROFILE = 'customerProfile';
    const RESPONSE_CONTENT_COUPONS = 'coupons';
    const RESPONSE_CONTENT_TRIGGERED_CAMPAIGNS = 'triggeredCampaigns';
    const RESPONSE_CONTENT_REFERRAL = 'referral';
    const RESPONSE_CONTENT_LOYALTY = 'loyalty';
    const RESPONSE_CONTENT_EVENT = 'event';
    const RESPONSE_CONTENT_RULE_FAILURE_REASONS = 'ruleFailureReasons';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResponseContentAllowableValues()
    {
        return [
            self::RESPONSE_CONTENT_CUSTOMER_SESSION,
            self::RESPONSE_CONTENT_CUSTOMER_PROFILE,
            self::RESPONSE_CONTENT_COUPONS,
            self::RESPONSE_CONTENT_TRIGGERED_CAMPAIGNS,
            self::RESPONSE_CONTENT_REFERRAL,
            self::RESPONSE_CONTENT_LOYALTY,
            self::RESPONSE_CONTENT_EVENT,
            self::RESPONSE_CONTENT_RULE_FAILURE_REASONS,
        ];
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
        $this->container['customerSession'] = isset($data['customerSession']) ? $data['customerSession'] : null;
        $this->container['responseContent'] = isset($data['responseContent']) ? $data['responseContent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerSession'] === null) {
            $invalidProperties[] = "'customerSession' can't be null";
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
     * Gets customerSession
     *
     * @return \TalonOne\Client\Model\NewCustomerSessionV2
     */
    public function getCustomerSession()
    {
        return $this->container['customerSession'];
    }

    /**
     * Sets customerSession
     *
     * @param \TalonOne\Client\Model\NewCustomerSessionV2 $customerSession customerSession
     *
     * @return $this
     */
    public function setCustomerSession($customerSession)
    {
        $this->container['customerSession'] = $customerSession;

        return $this;
    }

    /**
     * Gets responseContent
     *
     * @return string[]|null
     */
    public function getResponseContent()
    {
        return $this->container['responseContent'];
    }

    /**
     * Sets responseContent
     *
     * @param string[]|null $responseContent Optional list of requested information to be present on the response related to the customer session update. Currently supported: \"customerSession\", \"customerProfile\", \"coupons\", \"triggeredCampaigns\", \"referral\", \"loyalty\", \"event\" and \"ruleFailureReasons\".
     *
     * @return $this
     */
    public function setResponseContent($responseContent)
    {
        $allowedValues = $this->getResponseContentAllowableValues();
        if (!is_null($responseContent) && array_diff($responseContent, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'responseContent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['responseContent'] = $responseContent;

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


