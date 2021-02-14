<?php
/**
 * Campaign
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
 * Campaign Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Campaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'applicationId' => 'int',
        'userId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'attributes' => 'object',
        'state' => 'string',
        'activeRulesetId' => 'int',
        'tags' => 'string[]',
        'features' => 'string[]',
        'couponSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'referralSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'limits' => '\TalonOne\Client\Model\LimitConfig[]',
        'campaignGroups' => 'int[]',
        'couponRedemptionCount' => 'int',
        'referralRedemptionCount' => 'int',
        'discountCount' => 'float',
        'discountEffectCount' => 'int',
        'couponCreationCount' => 'int',
        'referralCreationCount' => 'int',
        'createdLoyaltyPointsCount' => 'float',
        'createdLoyaltyPointsEffectCount' => 'int',
        'redeemedLoyaltyPointsCount' => 'float',
        'redeemedLoyaltyPointsEffectCount' => 'int',
        'lastActivity' => '\DateTime',
        'updated' => '\DateTime',
        'createdBy' => 'string',
        'updatedBy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'applicationId' => null,
        'userId' => null,
        'name' => null,
        'description' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'attributes' => null,
        'state' => null,
        'activeRulesetId' => null,
        'tags' => null,
        'features' => null,
        'couponSettings' => null,
        'referralSettings' => null,
        'limits' => null,
        'campaignGroups' => null,
        'couponRedemptionCount' => null,
        'referralRedemptionCount' => null,
        'discountCount' => null,
        'discountEffectCount' => null,
        'couponCreationCount' => null,
        'referralCreationCount' => null,
        'createdLoyaltyPointsCount' => null,
        'createdLoyaltyPointsEffectCount' => null,
        'redeemedLoyaltyPointsCount' => null,
        'redeemedLoyaltyPointsEffectCount' => null,
        'lastActivity' => 'date-time',
        'updated' => 'date-time',
        'createdBy' => null,
        'updatedBy' => null
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
        'id' => 'id',
        'created' => 'created',
        'applicationId' => 'applicationId',
        'userId' => 'userId',
        'name' => 'name',
        'description' => 'description',
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'attributes' => 'attributes',
        'state' => 'state',
        'activeRulesetId' => 'activeRulesetId',
        'tags' => 'tags',
        'features' => 'features',
        'couponSettings' => 'couponSettings',
        'referralSettings' => 'referralSettings',
        'limits' => 'limits',
        'campaignGroups' => 'campaignGroups',
        'couponRedemptionCount' => 'couponRedemptionCount',
        'referralRedemptionCount' => 'referralRedemptionCount',
        'discountCount' => 'discountCount',
        'discountEffectCount' => 'discountEffectCount',
        'couponCreationCount' => 'couponCreationCount',
        'referralCreationCount' => 'referralCreationCount',
        'createdLoyaltyPointsCount' => 'createdLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'createdLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'redeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'redeemedLoyaltyPointsEffectCount',
        'lastActivity' => 'lastActivity',
        'updated' => 'updated',
        'createdBy' => 'createdBy',
        'updatedBy' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'applicationId' => 'setApplicationId',
        'userId' => 'setUserId',
        'name' => 'setName',
        'description' => 'setDescription',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'attributes' => 'setAttributes',
        'state' => 'setState',
        'activeRulesetId' => 'setActiveRulesetId',
        'tags' => 'setTags',
        'features' => 'setFeatures',
        'couponSettings' => 'setCouponSettings',
        'referralSettings' => 'setReferralSettings',
        'limits' => 'setLimits',
        'campaignGroups' => 'setCampaignGroups',
        'couponRedemptionCount' => 'setCouponRedemptionCount',
        'referralRedemptionCount' => 'setReferralRedemptionCount',
        'discountCount' => 'setDiscountCount',
        'discountEffectCount' => 'setDiscountEffectCount',
        'couponCreationCount' => 'setCouponCreationCount',
        'referralCreationCount' => 'setReferralCreationCount',
        'createdLoyaltyPointsCount' => 'setCreatedLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'setCreatedLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'setRedeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'setRedeemedLoyaltyPointsEffectCount',
        'lastActivity' => 'setLastActivity',
        'updated' => 'setUpdated',
        'createdBy' => 'setCreatedBy',
        'updatedBy' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'applicationId' => 'getApplicationId',
        'userId' => 'getUserId',
        'name' => 'getName',
        'description' => 'getDescription',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'attributes' => 'getAttributes',
        'state' => 'getState',
        'activeRulesetId' => 'getActiveRulesetId',
        'tags' => 'getTags',
        'features' => 'getFeatures',
        'couponSettings' => 'getCouponSettings',
        'referralSettings' => 'getReferralSettings',
        'limits' => 'getLimits',
        'campaignGroups' => 'getCampaignGroups',
        'couponRedemptionCount' => 'getCouponRedemptionCount',
        'referralRedemptionCount' => 'getReferralRedemptionCount',
        'discountCount' => 'getDiscountCount',
        'discountEffectCount' => 'getDiscountEffectCount',
        'couponCreationCount' => 'getCouponCreationCount',
        'referralCreationCount' => 'getReferralCreationCount',
        'createdLoyaltyPointsCount' => 'getCreatedLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'getCreatedLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'getRedeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'getRedeemedLoyaltyPointsEffectCount',
        'lastActivity' => 'getLastActivity',
        'updated' => 'getUpdated',
        'createdBy' => 'getCreatedBy',
        'updatedBy' => 'getUpdatedBy'
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

    const STATE_ENABLED = 'enabled';
    const STATE_DISABLED = 'disabled';
    const STATE_ARCHIVED = 'archived';
    const FEATURES_COUPONS = 'coupons';
    const FEATURES_REFERRALS = 'referrals';
    const FEATURES_LOYALTY = 'loyalty';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_DISABLED,
            self::STATE_ARCHIVED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeaturesAllowableValues()
    {
        return [
            self::FEATURES_COUPONS,
            self::FEATURES_REFERRALS,
            self::FEATURES_LOYALTY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'enabled';
        $this->container['activeRulesetId'] = isset($data['activeRulesetId']) ? $data['activeRulesetId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['couponSettings'] = isset($data['couponSettings']) ? $data['couponSettings'] : null;
        $this->container['referralSettings'] = isset($data['referralSettings']) ? $data['referralSettings'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['campaignGroups'] = isset($data['campaignGroups']) ? $data['campaignGroups'] : null;
        $this->container['couponRedemptionCount'] = isset($data['couponRedemptionCount']) ? $data['couponRedemptionCount'] : null;
        $this->container['referralRedemptionCount'] = isset($data['referralRedemptionCount']) ? $data['referralRedemptionCount'] : null;
        $this->container['discountCount'] = isset($data['discountCount']) ? $data['discountCount'] : null;
        $this->container['discountEffectCount'] = isset($data['discountEffectCount']) ? $data['discountEffectCount'] : null;
        $this->container['couponCreationCount'] = isset($data['couponCreationCount']) ? $data['couponCreationCount'] : null;
        $this->container['referralCreationCount'] = isset($data['referralCreationCount']) ? $data['referralCreationCount'] : null;
        $this->container['createdLoyaltyPointsCount'] = isset($data['createdLoyaltyPointsCount']) ? $data['createdLoyaltyPointsCount'] : null;
        $this->container['createdLoyaltyPointsEffectCount'] = isset($data['createdLoyaltyPointsEffectCount']) ? $data['createdLoyaltyPointsEffectCount'] : null;
        $this->container['redeemedLoyaltyPointsCount'] = isset($data['redeemedLoyaltyPointsCount']) ? $data['redeemedLoyaltyPointsCount'] : null;
        $this->container['redeemedLoyaltyPointsEffectCount'] = isset($data['redeemedLoyaltyPointsEffectCount']) ? $data['redeemedLoyaltyPointsEffectCount'] : null;
        $this->container['lastActivity'] = isset($data['lastActivity']) ? $data['lastActivity'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
        }
        if ($this->container['limits'] === null) {
            $invalidProperties[] = "'limits' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique ID for this entity.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The exact moment this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets applicationId
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     *
     * @param int $applicationId The ID of the application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name A friendly name for this campaign.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Campaign., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A detailed description of the campaign.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime|null $startTime Datetime when the campaign will become active.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime|null $endTime Datetime when the campaign will become in-active.
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

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
     * @param object|null $attributes Arbitrary properties associated with this campaign
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state A disabled or archived campaign is not evaluated for rules or coupons.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets activeRulesetId
     *
     * @return int|null
     */
    public function getActiveRulesetId()
    {
        return $this->container['activeRulesetId'];
    }

    /**
     * Sets activeRulesetId
     *
     * @param int|null $activeRulesetId ID of Ruleset this campaign applies on customer session evaluation.
     *
     * @return $this
     */
    public function setActiveRulesetId($activeRulesetId)
    {
        $this->container['activeRulesetId'] = $activeRulesetId;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags A list of tags for the campaign.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets features
     *
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[] $features A list of features for the campaign.
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $allowedValues = $this->getFeaturesAllowableValues();
        if (array_diff($features, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'features', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets couponSettings
     *
     * @return \TalonOne\Client\Model\CodeGeneratorSettings|null
     */
    public function getCouponSettings()
    {
        return $this->container['couponSettings'];
    }

    /**
     * Sets couponSettings
     *
     * @param \TalonOne\Client\Model\CodeGeneratorSettings|null $couponSettings couponSettings
     *
     * @return $this
     */
    public function setCouponSettings($couponSettings)
    {
        $this->container['couponSettings'] = $couponSettings;

        return $this;
    }

    /**
     * Gets referralSettings
     *
     * @return \TalonOne\Client\Model\CodeGeneratorSettings|null
     */
    public function getReferralSettings()
    {
        return $this->container['referralSettings'];
    }

    /**
     * Sets referralSettings
     *
     * @param \TalonOne\Client\Model\CodeGeneratorSettings|null $referralSettings referralSettings
     *
     * @return $this
     */
    public function setReferralSettings($referralSettings)
    {
        $this->container['referralSettings'] = $referralSettings;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \TalonOne\Client\Model\LimitConfig[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\LimitConfig[] $limits The set of limits that will operate for this campaign
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets campaignGroups
     *
     * @return int[]|null
     */
    public function getCampaignGroups()
    {
        return $this->container['campaignGroups'];
    }

    /**
     * Sets campaignGroups
     *
     * @param int[]|null $campaignGroups The IDs of the campaign groups that own this entity.
     *
     * @return $this
     */
    public function setCampaignGroups($campaignGroups)
    {
        $this->container['campaignGroups'] = $campaignGroups;

        return $this;
    }

    /**
     * Gets couponRedemptionCount
     *
     * @return int|null
     */
    public function getCouponRedemptionCount()
    {
        return $this->container['couponRedemptionCount'];
    }

    /**
     * Sets couponRedemptionCount
     *
     * @param int|null $couponRedemptionCount Number of coupons redeemed in the campaign.
     *
     * @return $this
     */
    public function setCouponRedemptionCount($couponRedemptionCount)
    {
        $this->container['couponRedemptionCount'] = $couponRedemptionCount;

        return $this;
    }

    /**
     * Gets referralRedemptionCount
     *
     * @return int|null
     */
    public function getReferralRedemptionCount()
    {
        return $this->container['referralRedemptionCount'];
    }

    /**
     * Sets referralRedemptionCount
     *
     * @param int|null $referralRedemptionCount Number of referral codes redeemed in the campaign.
     *
     * @return $this
     */
    public function setReferralRedemptionCount($referralRedemptionCount)
    {
        $this->container['referralRedemptionCount'] = $referralRedemptionCount;

        return $this;
    }

    /**
     * Gets discountCount
     *
     * @return float|null
     */
    public function getDiscountCount()
    {
        return $this->container['discountCount'];
    }

    /**
     * Sets discountCount
     *
     * @param float|null $discountCount Total amount of discounts redeemed in the campaign.
     *
     * @return $this
     */
    public function setDiscountCount($discountCount)
    {
        $this->container['discountCount'] = $discountCount;

        return $this;
    }

    /**
     * Gets discountEffectCount
     *
     * @return int|null
     */
    public function getDiscountEffectCount()
    {
        return $this->container['discountEffectCount'];
    }

    /**
     * Sets discountEffectCount
     *
     * @param int|null $discountEffectCount Total number of times discounts were redeemed in this campaign.
     *
     * @return $this
     */
    public function setDiscountEffectCount($discountEffectCount)
    {
        $this->container['discountEffectCount'] = $discountEffectCount;

        return $this;
    }

    /**
     * Gets couponCreationCount
     *
     * @return int|null
     */
    public function getCouponCreationCount()
    {
        return $this->container['couponCreationCount'];
    }

    /**
     * Sets couponCreationCount
     *
     * @param int|null $couponCreationCount Total number of coupons created by rules in this campaign.
     *
     * @return $this
     */
    public function setCouponCreationCount($couponCreationCount)
    {
        $this->container['couponCreationCount'] = $couponCreationCount;

        return $this;
    }

    /**
     * Gets referralCreationCount
     *
     * @return int|null
     */
    public function getReferralCreationCount()
    {
        return $this->container['referralCreationCount'];
    }

    /**
     * Sets referralCreationCount
     *
     * @param int|null $referralCreationCount Total number of referrals created by rules in this campaign.
     *
     * @return $this
     */
    public function setReferralCreationCount($referralCreationCount)
    {
        $this->container['referralCreationCount'] = $referralCreationCount;

        return $this;
    }

    /**
     * Gets createdLoyaltyPointsCount
     *
     * @return float|null
     */
    public function getCreatedLoyaltyPointsCount()
    {
        return $this->container['createdLoyaltyPointsCount'];
    }

    /**
     * Sets createdLoyaltyPointsCount
     *
     * @param float|null $createdLoyaltyPointsCount Total number of loyalty points created by rules in this campaign.
     *
     * @return $this
     */
    public function setCreatedLoyaltyPointsCount($createdLoyaltyPointsCount)
    {
        $this->container['createdLoyaltyPointsCount'] = $createdLoyaltyPointsCount;

        return $this;
    }

    /**
     * Gets createdLoyaltyPointsEffectCount
     *
     * @return int|null
     */
    public function getCreatedLoyaltyPointsEffectCount()
    {
        return $this->container['createdLoyaltyPointsEffectCount'];
    }

    /**
     * Sets createdLoyaltyPointsEffectCount
     *
     * @param int|null $createdLoyaltyPointsEffectCount Total number of loyalty point creation effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setCreatedLoyaltyPointsEffectCount($createdLoyaltyPointsEffectCount)
    {
        $this->container['createdLoyaltyPointsEffectCount'] = $createdLoyaltyPointsEffectCount;

        return $this;
    }

    /**
     * Gets redeemedLoyaltyPointsCount
     *
     * @return float|null
     */
    public function getRedeemedLoyaltyPointsCount()
    {
        return $this->container['redeemedLoyaltyPointsCount'];
    }

    /**
     * Sets redeemedLoyaltyPointsCount
     *
     * @param float|null $redeemedLoyaltyPointsCount Total number of loyalty points redeemed by rules in this campaign.
     *
     * @return $this
     */
    public function setRedeemedLoyaltyPointsCount($redeemedLoyaltyPointsCount)
    {
        $this->container['redeemedLoyaltyPointsCount'] = $redeemedLoyaltyPointsCount;

        return $this;
    }

    /**
     * Gets redeemedLoyaltyPointsEffectCount
     *
     * @return int|null
     */
    public function getRedeemedLoyaltyPointsEffectCount()
    {
        return $this->container['redeemedLoyaltyPointsEffectCount'];
    }

    /**
     * Sets redeemedLoyaltyPointsEffectCount
     *
     * @param int|null $redeemedLoyaltyPointsEffectCount Total number of loyalty point redemption effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setRedeemedLoyaltyPointsEffectCount($redeemedLoyaltyPointsEffectCount)
    {
        $this->container['redeemedLoyaltyPointsEffectCount'] = $redeemedLoyaltyPointsEffectCount;

        return $this;
    }

    /**
     * Gets lastActivity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['lastActivity'];
    }

    /**
     * Sets lastActivity
     *
     * @param \DateTime|null $lastActivity Timestamp of the most recent event received by this campaign.
     *
     * @return $this
     */
    public function setLastActivity($lastActivity)
    {
        $this->container['lastActivity'] = $lastActivity;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated Timestamp of the most recent update to the campaign or any of its elements.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy Name of the user who created this campaign if available.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets updatedBy
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
     * Sets updatedBy
     *
     * @param string|null $updatedBy Name of the user who last updated this campaign if available.
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;

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


