<?php
/**
 * IntegrationApiTest
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
 * Please update the test case below to test the endpoint.
 */

namespace TalonOne\Client;

use \TalonOne\Client\Configuration;
use \TalonOne\Client\ApiException;
use \TalonOne\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * IntegrationApiTest Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IntegrationApiTest extends TestCase
{

    /**
     * @var IntegrationApi
     */
    protected $apiInstance;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        // Configure Host, API key, & API key prefix for integration authentication
        $config = \TalonOne\Client\Configuration::getDefaultConfiguration()
        ->setHost('http://host.docker.internal:9000')
        ->setApiKeyPrefix('Authorization', 'ApiKey-v1')
        ->setApiKey('Authorization', getenv('IAPI_KEY'));

        // Initiating an integration api instance with the config
        $this->apiInstance = new \TalonOne\Client\Api\IntegrationApi(
            // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
            // This is optional, `GuzzleHttp\Client` will be used as default when `null` is passed.
            null, // new YouClientImplementation(),
            $config
        );
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for createAudienceV2
     *
     * Create audience.
     *
     */
    public function testCreateAudienceV2()
    {
    }

    /**
     * Test case for createCouponReservation
     *
     * Create coupon reservation.
     *
     */
    public function testCreateCouponReservation()
    {
    }

    /**
     * Test case for createReferral
     *
     * Create referral code for an advocate.
     *
     */
    public function testCreateReferral()
    {
    }

    /**
     * Test case for createReferralsForMultipleAdvocates
     *
     * Create referral codes for multiple advocates.
     *
     */
    public function testCreateReferralsForMultipleAdvocates()
    {
    }

    /**
     * Test case for deleteAudienceMembershipsV2
     *
     * Delete audience memberships.
     *
     */
    public function testDeleteAudienceMembershipsV2()
    {
    }

    /**
     * Test case for deleteAudienceV2
     *
     * Delete audience.
     *
     */
    public function testDeleteAudienceV2()
    {
    }

    /**
     * Test case for deleteCouponReservation
     *
     * Delete coupon reservations.
     *
     */
    public function testDeleteCouponReservation()
    {
    }

    /**
     * Test case for deleteCustomerData
     *
     * Delete customer's personal data.
     *
     */
    public function testDeleteCustomerData()
    {
    }

    /**
     * Test case for getCustomerInventory
     *
     * List customer data.
     *
     */
    public function testGetCustomerInventory()
    {
    }

    /**
     * Test case for getCustomerSession
     *
     * Get customer session.
     *
     */
    public function testGetCustomerSession()
    { 
        $customer_session_id = 'customer_session_id_example_php_5_t'; // string | The unique identifier for this session

        try {
            // using `getCustomerSession` function
            $customer_session = $this->apiInstance->getCustomerSession($customer_session_id);
            
            // print_r($customer_session);

            $this->assertNotNull($customer_session);
        } catch (Exception $e) {
            echo 'Exception when calling IntegrationApi->getCustomerSession: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for getLoyaltyBalances
     *
     * Get customer's loyalty points.
     *
     */
    public function testGetLoyaltyBalances()
    {
    }

    /**
     * Test case for getLoyaltyCardBalances
     *
     * Get card's point balances.
     *
     */
    public function testGetLoyaltyCardBalances()
    {
    }

    /**
     * Test case for getLoyaltyCardTransactions
     *
     * List card's transactions.
     *
     */
    public function testGetLoyaltyCardTransactions()
    {
    }

    /**
     * Test case for getLoyaltyProgramProfileTransactions
     *
     * List customer's loyalty transactions.
     *
     */
    public function testGetLoyaltyProgramProfileTransactions()
    {
    }

    /**
     * Test case for getReservedCustomers
     *
     * List customers that have this coupon reserved.
     *
     */
    public function testGetReservedCustomers()
    {
    }

    /**
     * Test case for linkLoyaltyCardToProfile
     *
     * Link customer profile to card.
     *
     */
    public function testLinkLoyaltyCardToProfile()
    {
    }

    /**
     * Test case for reopenCustomerSession
     *
     * Reopen customer session.
     *
     */
    public function testReopenCustomerSession() {
        $customer_session_id = 'customer_session_id_example_php_5_t'; // string | The unique identifier for this session

        try {
            // using `reopenCustomerSession` function
            $response = $this->apiInstance->reopenCustomerSession($customer_session_id);

            // print_r($response);

            $this->assertNotNull($response);
        } catch (Exception $e) {
           echo 'Exception when calling IntegrationApi->reopenCustomerSession: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for returnCartItems
     *
     * Return cart items.
     *
     */
    public function testReturnCartItems()
    {
    }

    /**
     * Test case for syncCatalog
     *
     * Sync cart item catalog.
     *
     */
    public function testSyncCatalog()
    {
    }

    /**
     * Test case for trackEvent
     *
     * Track event.
     *
     */
    public function testTrackEvent()
    {
    }

    /**
     * Test case for trackEventV2
     *
     * Track event V2.
     *
     */
    public function testTrackEventV2()
    {
    }

    /**
     * Test case for updateAudienceCustomersAttributes
     *
     * Update profile attributes for all customers in audience.
     *
     */
    public function testUpdateAudienceCustomersAttributes()
    {
    }

    /**
     * Test case for updateAudienceV2
     *
     * Update audience name.
     *
     */
    public function testUpdateAudienceV2()
    {
    }

    /**
     * Test case for updateCustomerProfileAudiences
     *
     * Update multiple customer profiles' audiences.
     *
     */
    public function testUpdateCustomerProfileAudiences()
    {
    }

    /**
     * Test case for updateCustomerProfileV2
     *
     * Update customer profile.
     *
     */
    public function testUpdateCustomerProfileV2()
    {
    }

    /**
     * Test case for updateCustomerProfilesV2
     *
     * Update multiple customer profiles.
     *
     */
    public function testUpdateCustomerProfilesV2()
    {
    }

    /**
     * Test case for updateCustomerSessionV2
     *
     * Update customer session.
     *
     */
    public function testUpdateCustomerSessionV2()
    {
        $customer_session_id = 'customer_session_id_example_php_5_t'; // string | The unique identifier for this session
        $customer_session = new \TalonOne\Client\Model\NewCustomerSessionV2([
            'profileId' => 'example_prof_id',
            'couponCodes' => [
                'Cool-Summer!'
            ],
            'state' => 'closed',
            'cartItems' => [
                new \TalonOne\Client\Model\CartItem([
                    'name' => 'Hawaiian Pizza',
                    'sku' => 'piz-hw-001',
                    'quantity' => 1,
                    'price' => 5.85
                ])
            ]
        ]);
        $body = new \TalonOne\Client\Model\IntegrationRequest([
        'customerSession' => $customer_session,
        // Optional list of requested information to be present on the response.
        // See lib/Model/IntegrationRequest.php#getResponseContentAllowableValues for full list
        // 'responseContent' => [
        //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_CUSTOMER_SESSION,
        //     \TalonOne\Client\Model\IntegrationRequest::RESPONSE_CONTENT_COUPONS
        // ]
        ]);

        try {
            // Create/Update a customer session using `updateCustomerSessionV2` function
            $integration_state = $this->apiInstance->updateCustomerSessionV2($customer_session_id, $body);
            
            // print_r($integration_state);

            // Parsing the returned effects list, please consult https://developers.talon.one/Integration-API/handling-effects-v2 for the full list of effects and their corresponding properties
            foreach ($integration_state->getEffects() as $effect) {
                if ("addLoyaltyPoints" == $effect->getEffectType()) {
                    // Initiating right props instance according to the effect type
                    $props = new \TalonOne\Client\Model\AddLoyaltyPointsEffectProps((array) $effect->getProps());

                    // Access the specific effect's properties
                    echo $props->getName(), ':: ', $props->getRecipientIntegrationId(), ' just earned ',  $props->getValue(), ' points', PHP_EOL;
                }
                if ("acceptCoupon" == $effect->getEffectType()) {
                    // Initiating right props instance according to the effect type
                    $props = new \TalonOne\Client\Model\AcceptCouponEffectProps((array) $effect->getProps());
                    // work with AcceptCouponEffectProps' properties
                    // ...
                }
            }
        } catch (Exception $e) {
            echo 'Exception when calling IntegrationApi->updateCustomerSessionV2: ', $e->getMessage(), PHP_EOL;
        }
    }
}
