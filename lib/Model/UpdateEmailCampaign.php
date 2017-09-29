<?php
/**
 * UpdateEmailCampaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SendinBlue\Client\Model;

use \ArrayAccess;

/**
 * UpdateEmailCampaign Class Doc Comment
 *
 * @category    Class
 * @package     SendinBlue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateEmailCampaign implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'updateEmailCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tag' => 'string',
        'sender' => '\SendinBlue\Client\Model\UpdateEmailCampaignSender',
        'name' => 'string',
        'htmlContent' => 'string',
        'htmlUrl' => 'string',
        'scheduledAt' => '\DateTime',
        'subject' => 'string',
        'replyTo' => 'string',
        'toField' => 'string',
        'recipients' => '\SendinBlue\Client\Model\UpdateEmailCampaignRecipients',
        'attachmentUrl' => 'string',
        'inlineImageActivation' => 'bool',
        'mirrorActive' => 'bool',
        'recurring' => 'bool',
        'footer' => 'string',
        'header' => 'string',
        'utmCampaign' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tag' => null,
        'sender' => null,
        'name' => null,
        'htmlContent' => null,
        'htmlUrl' => 'url',
        'scheduledAt' => 'date-time',
        'subject' => null,
        'replyTo' => 'email',
        'toField' => null,
        'recipients' => null,
        'attachmentUrl' => 'url',
        'inlineImageActivation' => null,
        'mirrorActive' => null,
        'recurring' => null,
        'footer' => null,
        'header' => null,
        'utmCampaign' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'tag' => 'tag',
        'sender' => 'sender',
        'name' => 'name',
        'htmlContent' => 'htmlContent',
        'htmlUrl' => 'htmlUrl',
        'scheduledAt' => 'scheduledAt',
        'subject' => 'subject',
        'replyTo' => 'replyTo',
        'toField' => 'toField',
        'recipients' => 'recipients',
        'attachmentUrl' => 'attachmentUrl',
        'inlineImageActivation' => 'inlineImageActivation',
        'mirrorActive' => 'mirrorActive',
        'recurring' => 'recurring',
        'footer' => 'footer',
        'header' => 'header',
        'utmCampaign' => 'utmCampaign'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tag' => 'setTag',
        'sender' => 'setSender',
        'name' => 'setName',
        'htmlContent' => 'setHtmlContent',
        'htmlUrl' => 'setHtmlUrl',
        'scheduledAt' => 'setScheduledAt',
        'subject' => 'setSubject',
        'replyTo' => 'setReplyTo',
        'toField' => 'setToField',
        'recipients' => 'setRecipients',
        'attachmentUrl' => 'setAttachmentUrl',
        'inlineImageActivation' => 'setInlineImageActivation',
        'mirrorActive' => 'setMirrorActive',
        'recurring' => 'setRecurring',
        'footer' => 'setFooter',
        'header' => 'setHeader',
        'utmCampaign' => 'setUtmCampaign'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tag' => 'getTag',
        'sender' => 'getSender',
        'name' => 'getName',
        'htmlContent' => 'getHtmlContent',
        'htmlUrl' => 'getHtmlUrl',
        'scheduledAt' => 'getScheduledAt',
        'subject' => 'getSubject',
        'replyTo' => 'getReplyTo',
        'toField' => 'getToField',
        'recipients' => 'getRecipients',
        'attachmentUrl' => 'getAttachmentUrl',
        'inlineImageActivation' => 'getInlineImageActivation',
        'mirrorActive' => 'getMirrorActive',
        'recurring' => 'getRecurring',
        'footer' => 'getFooter',
        'header' => 'getHeader',
        'utmCampaign' => 'getUtmCampaign'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['htmlUrl'] = isset($data['htmlUrl']) ? $data['htmlUrl'] : null;
        $this->container['scheduledAt'] = isset($data['scheduledAt']) ? $data['scheduledAt'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['toField'] = isset($data['toField']) ? $data['toField'] : null;
        $this->container['recipients'] = isset($data['recipients']) ? $data['recipients'] : null;
        $this->container['attachmentUrl'] = isset($data['attachmentUrl']) ? $data['attachmentUrl'] : null;
        $this->container['inlineImageActivation'] = isset($data['inlineImageActivation']) ? $data['inlineImageActivation'] : false;
        $this->container['mirrorActive'] = isset($data['mirrorActive']) ? $data['mirrorActive'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : false;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['utmCampaign'] = isset($data['utmCampaign']) ? $data['utmCampaign'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag Tag of the campaign
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets sender
     * @return \SendinBlue\Client\Model\UpdateEmailCampaignSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \SendinBlue\Client\Model\UpdateEmailCampaignSender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the campaign
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets htmlContent
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }

    /**
     * Sets htmlContent
     * @param string $htmlContent Body of the message (HTML version). REQUIRED if htmlUrl is empty
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;

        return $this;
    }

    /**
     * Gets htmlUrl
     * @return string
     */
    public function getHtmlUrl()
    {
        return $this->container['htmlUrl'];
    }

    /**
     * Sets htmlUrl
     * @param string $htmlUrl Url which contents the body of the email message. REQUIRED if htmlContent is empty
     * @return $this
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->container['htmlUrl'] = $htmlUrl;

        return $this;
    }

    /**
     * Gets scheduledAt
     * @return \DateTime
     */
    public function getScheduledAt()
    {
        return $this->container['scheduledAt'];
    }

    /**
     * Sets scheduledAt
     * @param \DateTime $scheduledAt Date and time on which the campaign has to run (YYYY-MM-DDTHH:mm:ss.SSSZ)
     * @return $this
     */
    public function setScheduledAt($scheduledAt)
    {
        $this->container['scheduledAt'] = $scheduledAt;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject of the campaign
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets replyTo
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     * @param string $replyTo Email on which campaign recipients will be able to reply to
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets toField
     * @return string
     */
    public function getToField()
    {
        return $this->container['toField'];
    }

    /**
     * Sets toField
     * @param string $toField This is to personalize the «To» Field. If you want to include the first name and last name of your recipient, add [FNAME] [LNAME]. To use the contact attributes here, these must already exist in SendinBlue account
     * @return $this
     */
    public function setToField($toField)
    {
        $this->container['toField'] = $toField;

        return $this;
    }

    /**
     * Gets recipients
     * @return \SendinBlue\Client\Model\UpdateEmailCampaignRecipients
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     * @param \SendinBlue\Client\Model\UpdateEmailCampaignRecipients $recipients
     * @return $this
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets attachmentUrl
     * @return string
     */
    public function getAttachmentUrl()
    {
        return $this->container['attachmentUrl'];
    }

    /**
     * Sets attachmentUrl
     * @param string $attachmentUrl Absolute url of the attachment. Url not allowed from local machine. File must be hosted somewhere.Possilbe extension values are xlsx, xls, ods, docx, docm, doc, csv, pdf, txt, gif, jpg, jpeg, png, tif, tiff and rtf
     * @return $this
     */
    public function setAttachmentUrl($attachmentUrl)
    {
        $this->container['attachmentUrl'] = $attachmentUrl;

        return $this;
    }

    /**
     * Gets inlineImageActivation
     * @return bool
     */
    public function getInlineImageActivation()
    {
        return $this->container['inlineImageActivation'];
    }

    /**
     * Sets inlineImageActivation
     * @param bool $inlineImageActivation Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email. You cannot send a campaign of more than 4MB with images embedded in the email. Campaigns with the images embedded in the email must be sent to less than 5000 contacts.
     * @return $this
     */
    public function setInlineImageActivation($inlineImageActivation)
    {
        $this->container['inlineImageActivation'] = $inlineImageActivation;

        return $this;
    }

    /**
     * Gets mirrorActive
     * @return bool
     */
    public function getMirrorActive()
    {
        return $this->container['mirrorActive'];
    }

    /**
     * Sets mirrorActive
     * @param bool $mirrorActive Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
     * @return $this
     */
    public function setMirrorActive($mirrorActive)
    {
        $this->container['mirrorActive'] = $mirrorActive;

        return $this;
    }

    /**
     * Gets recurring
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     * @param bool $recurring FOR TRIGGER ONLY ! Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

        return $this;
    }

    /**
     * Gets footer
     * @return string
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     * @param string $footer Footer of the email campaign
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets header
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param string $header Header of the email campaign
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets utmCampaign
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utmCampaign'];
    }

    /**
     * Sets utmCampaign
     * @param string $utmCampaign Customize the utm_campaign value. If this field is empty, the campaign name will be used. Only alphanumeric characters and spaces are allowed
     * @return $this
     */
    public function setUtmCampaign($utmCampaign)
    {
        $this->container['utmCampaign'] = $utmCampaign;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


