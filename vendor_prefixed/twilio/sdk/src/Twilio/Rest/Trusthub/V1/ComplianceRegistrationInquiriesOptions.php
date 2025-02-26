<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Trusthub\V1;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class ComplianceRegistrationInquiriesOptions
{
    /**
     * @param string $businessIdentityType
     * @param string $businessRegistrationAuthority
     * @param string $businessLegalName he name of the business or organization using the Tollfree number.
     * @param string $notificationEmail he email address to receive the notification about the verification result.
     * @param bool $acceptedNotificationReceipt The email address to receive the notification about the verification result.
     * @param string $businessRegistrationNumber Business registration number of the business
     * @param string $businessWebsiteUrl The URL of the business website
     * @param string $friendlyName Friendly name for your business information
     * @param string $authorizedRepresentative1FirstName First name of the authorized representative
     * @param string $authorizedRepresentative1LastName Last name of the authorized representative
     * @param string $authorizedRepresentative1Phone Phone number of the authorized representative
     * @param string $authorizedRepresentative1Email Email address of the authorized representative
     * @param string $authorizedRepresentative1DateOfBirth Birthdate of the authorized representative
     * @param string $addressStreet Street address of the business
     * @param string $addressStreetSecondary Street address of the business
     * @param string $addressCity City of the business
     * @param string $addressSubdivision State or province of the business
     * @param string $addressPostalCode Postal code of the business
     * @param string $addressCountryCode Country code of the business
     * @param string $emergencyAddressStreet Street address of the business
     * @param string $emergencyAddressStreetSecondary Street address of the business
     * @param string $emergencyAddressCity City of the business
     * @param string $emergencyAddressSubdivision State or province of the business
     * @param string $emergencyAddressPostalCode Postal code of the business
     * @param string $emergencyAddressCountryCode Country code of the business
     * @param bool $useAddressAsEmergencyAddress Use the business address as the emergency address
     * @param string $fileName The name of the verification document to upload
     * @param string $file The verification document to upload
     * @param string $firstName The first name of the Individual User.
     * @param string $lastName The last name of the Individual User.
     * @param string $dateOfBirth The date of birth of the Individual User.
     * @param string $individualEmail The email address of the Individual User.
     * @param string $individualPhone The phone number of the Individual User.
     * @param bool $isIsvEmbed Indicates if the inquiry is being started from an ISV embedded component.
     * @param string $isvRegisteringForSelfOrTenant Indicates if the isv registering for self or tenant.
     * @param string $statusCallbackUrl The url we call to inform you of bundle changes.
     * @return CreateComplianceRegistrationInquiriesOptions Options builder
     */
    public static function create(string $businessIdentityType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessRegistrationAuthority = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessLegalName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $notificationEmail = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $acceptedNotificationReceipt = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $businessRegistrationNumber = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessWebsiteUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1FirstName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1LastName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1Phone = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1Email = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1DateOfBirth = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressStreet = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressStreetSecondary = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressCity = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressSubdivision = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressPostalCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressCountryCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressStreet = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressStreetSecondary = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressCity = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressSubdivision = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressPostalCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressCountryCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $useAddressAsEmergencyAddress = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $fileName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $file = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $firstName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $lastName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $dateOfBirth = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $individualEmail = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $individualPhone = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $isIsvEmbed = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $isvRegisteringForSelfOrTenant = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallbackUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Trusthub\V1\CreateComplianceRegistrationInquiriesOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Trusthub\V1\CreateComplianceRegistrationInquiriesOptions($businessIdentityType, $businessRegistrationAuthority, $businessLegalName, $notificationEmail, $acceptedNotificationReceipt, $businessRegistrationNumber, $businessWebsiteUrl, $friendlyName, $authorizedRepresentative1FirstName, $authorizedRepresentative1LastName, $authorizedRepresentative1Phone, $authorizedRepresentative1Email, $authorizedRepresentative1DateOfBirth, $addressStreet, $addressStreetSecondary, $addressCity, $addressSubdivision, $addressPostalCode, $addressCountryCode, $emergencyAddressStreet, $emergencyAddressStreetSecondary, $emergencyAddressCity, $emergencyAddressSubdivision, $emergencyAddressPostalCode, $emergencyAddressCountryCode, $useAddressAsEmergencyAddress, $fileName, $file, $firstName, $lastName, $dateOfBirth, $individualEmail, $individualPhone, $isIsvEmbed, $isvRegisteringForSelfOrTenant, $statusCallbackUrl);
    }
}
class CreateComplianceRegistrationInquiriesOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $businessIdentityType
     * @param string $businessRegistrationAuthority
     * @param string $businessLegalName he name of the business or organization using the Tollfree number.
     * @param string $notificationEmail he email address to receive the notification about the verification result.
     * @param bool $acceptedNotificationReceipt The email address to receive the notification about the verification result.
     * @param string $businessRegistrationNumber Business registration number of the business
     * @param string $businessWebsiteUrl The URL of the business website
     * @param string $friendlyName Friendly name for your business information
     * @param string $authorizedRepresentative1FirstName First name of the authorized representative
     * @param string $authorizedRepresentative1LastName Last name of the authorized representative
     * @param string $authorizedRepresentative1Phone Phone number of the authorized representative
     * @param string $authorizedRepresentative1Email Email address of the authorized representative
     * @param string $authorizedRepresentative1DateOfBirth Birthdate of the authorized representative
     * @param string $addressStreet Street address of the business
     * @param string $addressStreetSecondary Street address of the business
     * @param string $addressCity City of the business
     * @param string $addressSubdivision State or province of the business
     * @param string $addressPostalCode Postal code of the business
     * @param string $addressCountryCode Country code of the business
     * @param string $emergencyAddressStreet Street address of the business
     * @param string $emergencyAddressStreetSecondary Street address of the business
     * @param string $emergencyAddressCity City of the business
     * @param string $emergencyAddressSubdivision State or province of the business
     * @param string $emergencyAddressPostalCode Postal code of the business
     * @param string $emergencyAddressCountryCode Country code of the business
     * @param bool $useAddressAsEmergencyAddress Use the business address as the emergency address
     * @param string $fileName The name of the verification document to upload
     * @param string $file The verification document to upload
     * @param string $firstName The first name of the Individual User.
     * @param string $lastName The last name of the Individual User.
     * @param string $dateOfBirth The date of birth of the Individual User.
     * @param string $individualEmail The email address of the Individual User.
     * @param string $individualPhone The phone number of the Individual User.
     * @param bool $isIsvEmbed Indicates if the inquiry is being started from an ISV embedded component.
     * @param string $isvRegisteringForSelfOrTenant Indicates if the isv registering for self or tenant.
     * @param string $statusCallbackUrl The url we call to inform you of bundle changes.
     */
    public function __construct(string $businessIdentityType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessRegistrationAuthority = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessLegalName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $notificationEmail = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $acceptedNotificationReceipt = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $businessRegistrationNumber = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $businessWebsiteUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1FirstName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1LastName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1Phone = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1Email = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $authorizedRepresentative1DateOfBirth = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressStreet = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressStreetSecondary = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressCity = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressSubdivision = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressPostalCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $addressCountryCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressStreet = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressStreetSecondary = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressCity = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressSubdivision = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressPostalCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $emergencyAddressCountryCode = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $useAddressAsEmergencyAddress = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $fileName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $file = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $firstName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $lastName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $dateOfBirth = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $individualEmail = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $individualPhone = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $isIsvEmbed = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $isvRegisteringForSelfOrTenant = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallbackUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['businessIdentityType'] = $businessIdentityType;
        $this->options['businessRegistrationAuthority'] = $businessRegistrationAuthority;
        $this->options['businessLegalName'] = $businessLegalName;
        $this->options['notificationEmail'] = $notificationEmail;
        $this->options['acceptedNotificationReceipt'] = $acceptedNotificationReceipt;
        $this->options['businessRegistrationNumber'] = $businessRegistrationNumber;
        $this->options['businessWebsiteUrl'] = $businessWebsiteUrl;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['authorizedRepresentative1FirstName'] = $authorizedRepresentative1FirstName;
        $this->options['authorizedRepresentative1LastName'] = $authorizedRepresentative1LastName;
        $this->options['authorizedRepresentative1Phone'] = $authorizedRepresentative1Phone;
        $this->options['authorizedRepresentative1Email'] = $authorizedRepresentative1Email;
        $this->options['authorizedRepresentative1DateOfBirth'] = $authorizedRepresentative1DateOfBirth;
        $this->options['addressStreet'] = $addressStreet;
        $this->options['addressStreetSecondary'] = $addressStreetSecondary;
        $this->options['addressCity'] = $addressCity;
        $this->options['addressSubdivision'] = $addressSubdivision;
        $this->options['addressPostalCode'] = $addressPostalCode;
        $this->options['addressCountryCode'] = $addressCountryCode;
        $this->options['emergencyAddressStreet'] = $emergencyAddressStreet;
        $this->options['emergencyAddressStreetSecondary'] = $emergencyAddressStreetSecondary;
        $this->options['emergencyAddressCity'] = $emergencyAddressCity;
        $this->options['emergencyAddressSubdivision'] = $emergencyAddressSubdivision;
        $this->options['emergencyAddressPostalCode'] = $emergencyAddressPostalCode;
        $this->options['emergencyAddressCountryCode'] = $emergencyAddressCountryCode;
        $this->options['useAddressAsEmergencyAddress'] = $useAddressAsEmergencyAddress;
        $this->options['fileName'] = $fileName;
        $this->options['file'] = $file;
        $this->options['firstName'] = $firstName;
        $this->options['lastName'] = $lastName;
        $this->options['dateOfBirth'] = $dateOfBirth;
        $this->options['individualEmail'] = $individualEmail;
        $this->options['individualPhone'] = $individualPhone;
        $this->options['isIsvEmbed'] = $isIsvEmbed;
        $this->options['isvRegisteringForSelfOrTenant'] = $isvRegisteringForSelfOrTenant;
        $this->options['statusCallbackUrl'] = $statusCallbackUrl;
    }
    /**
     * @param string $businessIdentityType
     * @return $this Fluent Builder
     */
    public function setBusinessIdentityType(string $businessIdentityType) : self
    {
        $this->options['businessIdentityType'] = $businessIdentityType;
        return $this;
    }
    /**
     * @param string $businessRegistrationAuthority
     * @return $this Fluent Builder
     */
    public function setBusinessRegistrationAuthority(string $businessRegistrationAuthority) : self
    {
        $this->options['businessRegistrationAuthority'] = $businessRegistrationAuthority;
        return $this;
    }
    /**
     * he name of the business or organization using the Tollfree number.
     *
     * @param string $businessLegalName he name of the business or organization using the Tollfree number.
     * @return $this Fluent Builder
     */
    public function setBusinessLegalName(string $businessLegalName) : self
    {
        $this->options['businessLegalName'] = $businessLegalName;
        return $this;
    }
    /**
     * he email address to receive the notification about the verification result.
     *
     * @param string $notificationEmail he email address to receive the notification about the verification result.
     * @return $this Fluent Builder
     */
    public function setNotificationEmail(string $notificationEmail) : self
    {
        $this->options['notificationEmail'] = $notificationEmail;
        return $this;
    }
    /**
     * The email address to receive the notification about the verification result.
     *
     * @param bool $acceptedNotificationReceipt The email address to receive the notification about the verification result.
     * @return $this Fluent Builder
     */
    public function setAcceptedNotificationReceipt(bool $acceptedNotificationReceipt) : self
    {
        $this->options['acceptedNotificationReceipt'] = $acceptedNotificationReceipt;
        return $this;
    }
    /**
     * Business registration number of the business
     *
     * @param string $businessRegistrationNumber Business registration number of the business
     * @return $this Fluent Builder
     */
    public function setBusinessRegistrationNumber(string $businessRegistrationNumber) : self
    {
        $this->options['businessRegistrationNumber'] = $businessRegistrationNumber;
        return $this;
    }
    /**
     * The URL of the business website
     *
     * @param string $businessWebsiteUrl The URL of the business website
     * @return $this Fluent Builder
     */
    public function setBusinessWebsiteUrl(string $businessWebsiteUrl) : self
    {
        $this->options['businessWebsiteUrl'] = $businessWebsiteUrl;
        return $this;
    }
    /**
     * Friendly name for your business information
     *
     * @param string $friendlyName Friendly name for your business information
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * First name of the authorized representative
     *
     * @param string $authorizedRepresentative1FirstName First name of the authorized representative
     * @return $this Fluent Builder
     */
    public function setAuthorizedRepresentative1FirstName(string $authorizedRepresentative1FirstName) : self
    {
        $this->options['authorizedRepresentative1FirstName'] = $authorizedRepresentative1FirstName;
        return $this;
    }
    /**
     * Last name of the authorized representative
     *
     * @param string $authorizedRepresentative1LastName Last name of the authorized representative
     * @return $this Fluent Builder
     */
    public function setAuthorizedRepresentative1LastName(string $authorizedRepresentative1LastName) : self
    {
        $this->options['authorizedRepresentative1LastName'] = $authorizedRepresentative1LastName;
        return $this;
    }
    /**
     * Phone number of the authorized representative
     *
     * @param string $authorizedRepresentative1Phone Phone number of the authorized representative
     * @return $this Fluent Builder
     */
    public function setAuthorizedRepresentative1Phone(string $authorizedRepresentative1Phone) : self
    {
        $this->options['authorizedRepresentative1Phone'] = $authorizedRepresentative1Phone;
        return $this;
    }
    /**
     * Email address of the authorized representative
     *
     * @param string $authorizedRepresentative1Email Email address of the authorized representative
     * @return $this Fluent Builder
     */
    public function setAuthorizedRepresentative1Email(string $authorizedRepresentative1Email) : self
    {
        $this->options['authorizedRepresentative1Email'] = $authorizedRepresentative1Email;
        return $this;
    }
    /**
     * Birthdate of the authorized representative
     *
     * @param string $authorizedRepresentative1DateOfBirth Birthdate of the authorized representative
     * @return $this Fluent Builder
     */
    public function setAuthorizedRepresentative1DateOfBirth(string $authorizedRepresentative1DateOfBirth) : self
    {
        $this->options['authorizedRepresentative1DateOfBirth'] = $authorizedRepresentative1DateOfBirth;
        return $this;
    }
    /**
     * Street address of the business
     *
     * @param string $addressStreet Street address of the business
     * @return $this Fluent Builder
     */
    public function setAddressStreet(string $addressStreet) : self
    {
        $this->options['addressStreet'] = $addressStreet;
        return $this;
    }
    /**
     * Street address of the business
     *
     * @param string $addressStreetSecondary Street address of the business
     * @return $this Fluent Builder
     */
    public function setAddressStreetSecondary(string $addressStreetSecondary) : self
    {
        $this->options['addressStreetSecondary'] = $addressStreetSecondary;
        return $this;
    }
    /**
     * City of the business
     *
     * @param string $addressCity City of the business
     * @return $this Fluent Builder
     */
    public function setAddressCity(string $addressCity) : self
    {
        $this->options['addressCity'] = $addressCity;
        return $this;
    }
    /**
     * State or province of the business
     *
     * @param string $addressSubdivision State or province of the business
     * @return $this Fluent Builder
     */
    public function setAddressSubdivision(string $addressSubdivision) : self
    {
        $this->options['addressSubdivision'] = $addressSubdivision;
        return $this;
    }
    /**
     * Postal code of the business
     *
     * @param string $addressPostalCode Postal code of the business
     * @return $this Fluent Builder
     */
    public function setAddressPostalCode(string $addressPostalCode) : self
    {
        $this->options['addressPostalCode'] = $addressPostalCode;
        return $this;
    }
    /**
     * Country code of the business
     *
     * @param string $addressCountryCode Country code of the business
     * @return $this Fluent Builder
     */
    public function setAddressCountryCode(string $addressCountryCode) : self
    {
        $this->options['addressCountryCode'] = $addressCountryCode;
        return $this;
    }
    /**
     * Street address of the business
     *
     * @param string $emergencyAddressStreet Street address of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressStreet(string $emergencyAddressStreet) : self
    {
        $this->options['emergencyAddressStreet'] = $emergencyAddressStreet;
        return $this;
    }
    /**
     * Street address of the business
     *
     * @param string $emergencyAddressStreetSecondary Street address of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressStreetSecondary(string $emergencyAddressStreetSecondary) : self
    {
        $this->options['emergencyAddressStreetSecondary'] = $emergencyAddressStreetSecondary;
        return $this;
    }
    /**
     * City of the business
     *
     * @param string $emergencyAddressCity City of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressCity(string $emergencyAddressCity) : self
    {
        $this->options['emergencyAddressCity'] = $emergencyAddressCity;
        return $this;
    }
    /**
     * State or province of the business
     *
     * @param string $emergencyAddressSubdivision State or province of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressSubdivision(string $emergencyAddressSubdivision) : self
    {
        $this->options['emergencyAddressSubdivision'] = $emergencyAddressSubdivision;
        return $this;
    }
    /**
     * Postal code of the business
     *
     * @param string $emergencyAddressPostalCode Postal code of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressPostalCode(string $emergencyAddressPostalCode) : self
    {
        $this->options['emergencyAddressPostalCode'] = $emergencyAddressPostalCode;
        return $this;
    }
    /**
     * Country code of the business
     *
     * @param string $emergencyAddressCountryCode Country code of the business
     * @return $this Fluent Builder
     */
    public function setEmergencyAddressCountryCode(string $emergencyAddressCountryCode) : self
    {
        $this->options['emergencyAddressCountryCode'] = $emergencyAddressCountryCode;
        return $this;
    }
    /**
     * Use the business address as the emergency address
     *
     * @param bool $useAddressAsEmergencyAddress Use the business address as the emergency address
     * @return $this Fluent Builder
     */
    public function setUseAddressAsEmergencyAddress(bool $useAddressAsEmergencyAddress) : self
    {
        $this->options['useAddressAsEmergencyAddress'] = $useAddressAsEmergencyAddress;
        return $this;
    }
    /**
     * The name of the verification document to upload
     *
     * @param string $fileName The name of the verification document to upload
     * @return $this Fluent Builder
     */
    public function setFileName(string $fileName) : self
    {
        $this->options['fileName'] = $fileName;
        return $this;
    }
    /**
     * The verification document to upload
     *
     * @param string $file The verification document to upload
     * @return $this Fluent Builder
     */
    public function setFile(string $file) : self
    {
        $this->options['file'] = $file;
        return $this;
    }
    /**
     * The first name of the Individual User.
     *
     * @param string $firstName The first name of the Individual User.
     * @return $this Fluent Builder
     */
    public function setFirstName(string $firstName) : self
    {
        $this->options['firstName'] = $firstName;
        return $this;
    }
    /**
     * The last name of the Individual User.
     *
     * @param string $lastName The last name of the Individual User.
     * @return $this Fluent Builder
     */
    public function setLastName(string $lastName) : self
    {
        $this->options['lastName'] = $lastName;
        return $this;
    }
    /**
     * The date of birth of the Individual User.
     *
     * @param string $dateOfBirth The date of birth of the Individual User.
     * @return $this Fluent Builder
     */
    public function setDateOfBirth(string $dateOfBirth) : self
    {
        $this->options['dateOfBirth'] = $dateOfBirth;
        return $this;
    }
    /**
     * The email address of the Individual User.
     *
     * @param string $individualEmail The email address of the Individual User.
     * @return $this Fluent Builder
     */
    public function setIndividualEmail(string $individualEmail) : self
    {
        $this->options['individualEmail'] = $individualEmail;
        return $this;
    }
    /**
     * The phone number of the Individual User.
     *
     * @param string $individualPhone The phone number of the Individual User.
     * @return $this Fluent Builder
     */
    public function setIndividualPhone(string $individualPhone) : self
    {
        $this->options['individualPhone'] = $individualPhone;
        return $this;
    }
    /**
     * Indicates if the inquiry is being started from an ISV embedded component.
     *
     * @param bool $isIsvEmbed Indicates if the inquiry is being started from an ISV embedded component.
     * @return $this Fluent Builder
     */
    public function setIsIsvEmbed(bool $isIsvEmbed) : self
    {
        $this->options['isIsvEmbed'] = $isIsvEmbed;
        return $this;
    }
    /**
     * Indicates if the isv registering for self or tenant.
     *
     * @param string $isvRegisteringForSelfOrTenant Indicates if the isv registering for self or tenant.
     * @return $this Fluent Builder
     */
    public function setIsvRegisteringForSelfOrTenant(string $isvRegisteringForSelfOrTenant) : self
    {
        $this->options['isvRegisteringForSelfOrTenant'] = $isvRegisteringForSelfOrTenant;
        return $this;
    }
    /**
     * The url we call to inform you of bundle changes.
     *
     * @param string $statusCallbackUrl The url we call to inform you of bundle changes.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackUrl(string $statusCallbackUrl) : self
    {
        $this->options['statusCallbackUrl'] = $statusCallbackUrl;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(\ShopMagicTwilioVendor\Twilio\Values::of($this->options), '', ' ');
        return '[Twilio.Trusthub.V1.CreateComplianceRegistrationInquiriesOptions ' . $options . ']';
    }
}
