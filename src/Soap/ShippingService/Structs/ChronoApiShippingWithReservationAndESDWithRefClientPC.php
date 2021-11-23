<?php

declare(strict_types=1);

namespace SengentoBV\ChronopostSdk\Soap\ShippingService\Structs;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientPC Structs
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientPC
 * @package ChronoApi
 * @subpackage Structs
 */
class ChronoApiShippingWithReservationAndESDWithRefClientPC extends AbstractStructBase
{
    /**
     * The refEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $refEsdClient = null;
    /**
     * The retrievalDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $retrievalDateTime = null;
    /**
     * The closingDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $closingDateTime = null;
    /**
     * The specificInstructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $specificInstructions = null;
    /**
     * The height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $height = null;
    /**
     * The width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $width = null;
    /**
     * The length
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $length = null;
    /**
     * The shipperCarriesCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCarriesCode = null;
    /**
     * The shipperBuildingFloor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperBuildingFloor = null;
    /**
     * The shipperServiceDirection
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperServiceDirection = null;
    /**
     * The nombreDePassageMaximum
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $nombreDePassageMaximum = null;
    /**
     * The ltAImprimerParChronopost
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ltAImprimerParChronopost = null;
    /**
     * The header_idEmit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $header_idEmit = null;
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The subAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $subAccount = null;
    /**
     * The header_identWebPro
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $header_identWebPro = null;
    /**
     * The shipperCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCivility = null;
    /**
     * The shipperName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperName = null;
    /**
     * The shipperName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperName2 = null;
    /**
     * The shipperAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperAdress1 = null;
    /**
     * The shipperAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperAdress2 = null;
    /**
     * The shipperZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperZipCode = null;
    /**
     * The shipperCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCity = null;
    /**
     * The shipperCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCountry = null;
    /**
     * The shipperCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperCountryName = null;
    /**
     * The shipperContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperContactName = null;
    /**
     * The shipperEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperEmail = null;
    /**
     * The shipperPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperPhone = null;
    /**
     * The shipperMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperMobilePhone = null;
    /**
     * The customerCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCivility = null;
    /**
     * The customerName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerName2 = null;
    /**
     * The customerAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerAdress1 = null;
    /**
     * The customerAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerAdress2 = null;
    /**
     * The customerZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerZipCode = null;
    /**
     * The customerCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCity = null;
    /**
     * The customerCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCountry = null;
    /**
     * The customerCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerCountryName = null;
    /**
     * The customerContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerContactName = null;
    /**
     * The customerEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerEmail = null;
    /**
     * The customerPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerPhone = null;
    /**
     * The customerMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerMobilePhone = null;
    /**
     * The customerPreAlert
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerPreAlert = null;
    /**
     * The recipientCivility
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCivility = null;
    /**
     * The recipientName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientName = null;
    /**
     * The recipientName2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientName2 = null;
    /**
     * The recipientAdress1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress1 = null;
    /**
     * The recipientAdress2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientAdress2 = null;
    /**
     * The recipientZipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientZipCode = null;
    /**
     * The recipientCity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCity = null;
    /**
     * The recipientCountry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountry = null;
    /**
     * The recipientCountryName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientCountryName = null;
    /**
     * The recipientContactName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientContactName = null;
    /**
     * The recipientEmail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientEmail = null;
    /**
     * The recipientPhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientPhone = null;
    /**
     * The recipientMobilePhone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientMobilePhone = null;
    /**
     * The recipientPreAlert
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientPreAlert = null;
    /**
     * The shipperRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipperRef = null;
    /**
     * The recipientRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $recipientRef = null;
    /**
     * The customerSkybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerSkybillNumber = null;
    /**
     * The evtCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $evtCode = null;
    /**
     * The productCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $productCode = null;
    /**
     * The shipDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipDate = null;
    /**
     * The shipHour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $shipHour = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weight = null;
    /**
     * The weightUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $weightUnit = null;
    /**
     * The insuredValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insuredValue = null;
    /**
     * The insuredCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $insuredCurrency = null;
    /**
     * The codValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codValue = null;
    /**
     * The codCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $codCurrency = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customsValue = null;
    /**
     * The customsCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customsCurrency = null;
    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $service = null;
    /**
     * The as
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $as = null;
    /**
     * The objectType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $objectType = null;
    /**
     * The content1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content1 = null;
    /**
     * The content2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content2 = null;
    /**
     * The content3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content3 = null;
    /**
     * The content4
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content4 = null;
    /**
     * The content5
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $content5 = null;
    /**
     * The portValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $portValue = null;
    /**
     * The portCurrency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $portCurrency = null;
    /**
     * The skybillRank
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillRank = null;
    /**
     * The bulkNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bulkNumber = null;
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $mode = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
    /**
     * The timeSlotStartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotStartDate = null;
    /**
     * The timeSlotEndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotEndDate = null;
    /**
     * The timeSlotTariffLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $timeSlotTariffLevel = null;
    /**
     * The expirationDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $expirationDate = null;
    /**
     * The sellByDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sellByDate = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientPC
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRefEsdClient()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRetrievalDateTime()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setClosingDateTime()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setSpecificInstructions()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setHeight()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setWidth()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setLength()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperCarriesCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperBuildingFloor()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperServiceDirection()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setNombreDePassageMaximum()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setLtAImprimerParChronopost()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setHeader_idEmit()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setAccountNumber()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setSubAccount()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setHeader_identWebPro()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperCivility()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperName2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperAdress1()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperAdress2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperZipCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperCity()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperCountry()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperCountryName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperContactName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperEmail()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperPhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperMobilePhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerCivility()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerName2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerAdress1()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerAdress2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerZipCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerCity()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerCountry()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerCountryName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerContactName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerEmail()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerPhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerMobilePhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerPreAlert()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientCivility()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientName2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientAdress1()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientAdress2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientZipCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientCity()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientCountry()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientCountryName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientContactName()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientEmail()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientPhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientMobilePhone()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientPreAlert()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipperRef()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setRecipientRef()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomerSkybillNumber()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setEvtCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setProductCode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipDate()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setShipHour()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setWeight()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setWeightUnit()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setInsuredValue()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setInsuredCurrency()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCodValue()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCodCurrency()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomsValue()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setCustomsCurrency()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setService()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setAs()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setObjectType()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setContent1()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setContent2()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setContent3()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setContent4()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setContent5()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setPortValue()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setPortCurrency()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setSkybillRank()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setBulkNumber()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setMode()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setPassword()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setModeRetour()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setTimeSlotStartDate()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setTimeSlotEndDate()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setTimeSlotTariffLevel()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setExpirationDate()
     * @uses ChronoApiShippingWithReservationAndESDWithRefClientPC::setSellByDate()
     * @param string $refEsdClient
     * @param string $retrievalDateTime
     * @param string $closingDateTime
     * @param string $specificInstructions
     * @param string $height
     * @param string $width
     * @param string $length
     * @param string $shipperCarriesCode
     * @param string $shipperBuildingFloor
     * @param string $shipperServiceDirection
     * @param string $nombreDePassageMaximum
     * @param string $ltAImprimerParChronopost
     * @param string $header_idEmit
     * @param string $accountNumber
     * @param string $subAccount
     * @param string $header_identWebPro
     * @param string $shipperCivility
     * @param string $shipperName
     * @param string $shipperName2
     * @param string $shipperAdress1
     * @param string $shipperAdress2
     * @param string $shipperZipCode
     * @param string $shipperCity
     * @param string $shipperCountry
     * @param string $shipperCountryName
     * @param string $shipperContactName
     * @param string $shipperEmail
     * @param string $shipperPhone
     * @param string $shipperMobilePhone
     * @param string $customerCivility
     * @param string $customerName
     * @param string $customerName2
     * @param string $customerAdress1
     * @param string $customerAdress2
     * @param string $customerZipCode
     * @param string $customerCity
     * @param string $customerCountry
     * @param string $customerCountryName
     * @param string $customerContactName
     * @param string $customerEmail
     * @param string $customerPhone
     * @param string $customerMobilePhone
     * @param string $customerPreAlert
     * @param string $recipientCivility
     * @param string $recipientName
     * @param string $recipientName2
     * @param string $recipientAdress1
     * @param string $recipientAdress2
     * @param string $recipientZipCode
     * @param string $recipientCity
     * @param string $recipientCountry
     * @param string $recipientCountryName
     * @param string $recipientContactName
     * @param string $recipientEmail
     * @param string $recipientPhone
     * @param string $recipientMobilePhone
     * @param string $recipientPreAlert
     * @param string $shipperRef
     * @param string $recipientRef
     * @param string $customerSkybillNumber
     * @param string $evtCode
     * @param string $productCode
     * @param string $shipDate
     * @param string $shipHour
     * @param string $weight
     * @param string $weightUnit
     * @param string $insuredValue
     * @param string $insuredCurrency
     * @param string $codValue
     * @param string $codCurrency
     * @param string $customsValue
     * @param string $customsCurrency
     * @param string $service
     * @param string $as
     * @param string $objectType
     * @param string $content1
     * @param string $content2
     * @param string $content3
     * @param string $content4
     * @param string $content5
     * @param string $portValue
     * @param string $portCurrency
     * @param string $skybillRank
     * @param string $bulkNumber
     * @param string $mode
     * @param string $password
     * @param string $modeRetour
     * @param string $timeSlotStartDate
     * @param string $timeSlotEndDate
     * @param string $timeSlotTariffLevel
     * @param string $expirationDate
     * @param string $sellByDate
     */
    public function __construct(?string $refEsdClient = null, ?string $retrievalDateTime = null, ?string $closingDateTime = null, ?string $specificInstructions = null, ?string $height = null, ?string $width = null, ?string $length = null, ?string $shipperCarriesCode = null, ?string $shipperBuildingFloor = null, ?string $shipperServiceDirection = null, ?string $nombreDePassageMaximum = null, ?string $ltAImprimerParChronopost = null, ?string $header_idEmit = null, ?string $accountNumber = null, ?string $subAccount = null, ?string $header_identWebPro = null, ?string $shipperCivility = null, ?string $shipperName = null, ?string $shipperName2 = null, ?string $shipperAdress1 = null, ?string $shipperAdress2 = null, ?string $shipperZipCode = null, ?string $shipperCity = null, ?string $shipperCountry = null, ?string $shipperCountryName = null, ?string $shipperContactName = null, ?string $shipperEmail = null, ?string $shipperPhone = null, ?string $shipperMobilePhone = null, ?string $customerCivility = null, ?string $customerName = null, ?string $customerName2 = null, ?string $customerAdress1 = null, ?string $customerAdress2 = null, ?string $customerZipCode = null, ?string $customerCity = null, ?string $customerCountry = null, ?string $customerCountryName = null, ?string $customerContactName = null, ?string $customerEmail = null, ?string $customerPhone = null, ?string $customerMobilePhone = null, ?string $customerPreAlert = null, ?string $recipientCivility = null, ?string $recipientName = null, ?string $recipientName2 = null, ?string $recipientAdress1 = null, ?string $recipientAdress2 = null, ?string $recipientZipCode = null, ?string $recipientCity = null, ?string $recipientCountry = null, ?string $recipientCountryName = null, ?string $recipientContactName = null, ?string $recipientEmail = null, ?string $recipientPhone = null, ?string $recipientMobilePhone = null, ?string $recipientPreAlert = null, ?string $shipperRef = null, ?string $recipientRef = null, ?string $customerSkybillNumber = null, ?string $evtCode = null, ?string $productCode = null, ?string $shipDate = null, ?string $shipHour = null, ?string $weight = null, ?string $weightUnit = null, ?string $insuredValue = null, ?string $insuredCurrency = null, ?string $codValue = null, ?string $codCurrency = null, ?string $customsValue = null, ?string $customsCurrency = null, ?string $service = null, ?string $as = null, ?string $objectType = null, ?string $content1 = null, ?string $content2 = null, ?string $content3 = null, ?string $content4 = null, ?string $content5 = null, ?string $portValue = null, ?string $portCurrency = null, ?string $skybillRank = null, ?string $bulkNumber = null, ?string $mode = null, ?string $password = null, ?string $modeRetour = null, ?string $timeSlotStartDate = null, ?string $timeSlotEndDate = null, ?string $timeSlotTariffLevel = null, ?string $expirationDate = null, ?string $sellByDate = null)
    {
        $this
            ->setRefEsdClient($refEsdClient)
            ->setRetrievalDateTime($retrievalDateTime)
            ->setClosingDateTime($closingDateTime)
            ->setSpecificInstructions($specificInstructions)
            ->setHeight($height)
            ->setWidth($width)
            ->setLength($length)
            ->setShipperCarriesCode($shipperCarriesCode)
            ->setShipperBuildingFloor($shipperBuildingFloor)
            ->setShipperServiceDirection($shipperServiceDirection)
            ->setNombreDePassageMaximum($nombreDePassageMaximum)
            ->setLtAImprimerParChronopost($ltAImprimerParChronopost)
            ->setHeader_idEmit($header_idEmit)
            ->setAccountNumber($accountNumber)
            ->setSubAccount($subAccount)
            ->setHeader_identWebPro($header_identWebPro)
            ->setShipperCivility($shipperCivility)
            ->setShipperName($shipperName)
            ->setShipperName2($shipperName2)
            ->setShipperAdress1($shipperAdress1)
            ->setShipperAdress2($shipperAdress2)
            ->setShipperZipCode($shipperZipCode)
            ->setShipperCity($shipperCity)
            ->setShipperCountry($shipperCountry)
            ->setShipperCountryName($shipperCountryName)
            ->setShipperContactName($shipperContactName)
            ->setShipperEmail($shipperEmail)
            ->setShipperPhone($shipperPhone)
            ->setShipperMobilePhone($shipperMobilePhone)
            ->setCustomerCivility($customerCivility)
            ->setCustomerName($customerName)
            ->setCustomerName2($customerName2)
            ->setCustomerAdress1($customerAdress1)
            ->setCustomerAdress2($customerAdress2)
            ->setCustomerZipCode($customerZipCode)
            ->setCustomerCity($customerCity)
            ->setCustomerCountry($customerCountry)
            ->setCustomerCountryName($customerCountryName)
            ->setCustomerContactName($customerContactName)
            ->setCustomerEmail($customerEmail)
            ->setCustomerPhone($customerPhone)
            ->setCustomerMobilePhone($customerMobilePhone)
            ->setCustomerPreAlert($customerPreAlert)
            ->setRecipientCivility($recipientCivility)
            ->setRecipientName($recipientName)
            ->setRecipientName2($recipientName2)
            ->setRecipientAdress1($recipientAdress1)
            ->setRecipientAdress2($recipientAdress2)
            ->setRecipientZipCode($recipientZipCode)
            ->setRecipientCity($recipientCity)
            ->setRecipientCountry($recipientCountry)
            ->setRecipientCountryName($recipientCountryName)
            ->setRecipientContactName($recipientContactName)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientPhone($recipientPhone)
            ->setRecipientMobilePhone($recipientMobilePhone)
            ->setRecipientPreAlert($recipientPreAlert)
            ->setShipperRef($shipperRef)
            ->setRecipientRef($recipientRef)
            ->setCustomerSkybillNumber($customerSkybillNumber)
            ->setEvtCode($evtCode)
            ->setProductCode($productCode)
            ->setShipDate($shipDate)
            ->setShipHour($shipHour)
            ->setWeight($weight)
            ->setWeightUnit($weightUnit)
            ->setInsuredValue($insuredValue)
            ->setInsuredCurrency($insuredCurrency)
            ->setCodValue($codValue)
            ->setCodCurrency($codCurrency)
            ->setCustomsValue($customsValue)
            ->setCustomsCurrency($customsCurrency)
            ->setService($service)
            ->setAs($as)
            ->setObjectType($objectType)
            ->setContent1($content1)
            ->setContent2($content2)
            ->setContent3($content3)
            ->setContent4($content4)
            ->setContent5($content5)
            ->setPortValue($portValue)
            ->setPortCurrency($portCurrency)
            ->setSkybillRank($skybillRank)
            ->setBulkNumber($bulkNumber)
            ->setMode($mode)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setTimeSlotStartDate($timeSlotStartDate)
            ->setTimeSlotEndDate($timeSlotEndDate)
            ->setTimeSlotTariffLevel($timeSlotTariffLevel)
            ->setExpirationDate($expirationDate)
            ->setSellByDate($sellByDate);
    }
    /**
     * Get refEsdClient value
     * @return string|null
     */
    public function getRefEsdClient(): ?string
    {
        return $this->refEsdClient;
    }
    /**
     * Set refEsdClient value
     * @param string $refEsdClient
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRefEsdClient(?string $refEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($refEsdClient) && !is_string($refEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refEsdClient, true), gettype($refEsdClient)), __LINE__);
        }
        $this->refEsdClient = $refEsdClient;
        
        return $this;
    }
    /**
     * Get retrievalDateTime value
     * @return string|null
     */
    public function getRetrievalDateTime(): ?string
    {
        return $this->retrievalDateTime;
    }
    /**
     * Set retrievalDateTime value
     * @param string $retrievalDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRetrievalDateTime(?string $retrievalDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($retrievalDateTime) && !is_string($retrievalDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retrievalDateTime, true), gettype($retrievalDateTime)), __LINE__);
        }
        $this->retrievalDateTime = $retrievalDateTime;
        
        return $this;
    }
    /**
     * Get closingDateTime value
     * @return string|null
     */
    public function getClosingDateTime(): ?string
    {
        return $this->closingDateTime;
    }
    /**
     * Set closingDateTime value
     * @param string $closingDateTime
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setClosingDateTime(?string $closingDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingDateTime) && !is_string($closingDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingDateTime, true), gettype($closingDateTime)), __LINE__);
        }
        $this->closingDateTime = $closingDateTime;
        
        return $this;
    }
    /**
     * Get specificInstructions value
     * @return string|null
     */
    public function getSpecificInstructions(): ?string
    {
        return $this->specificInstructions;
    }
    /**
     * Set specificInstructions value
     * @param string $specificInstructions
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setSpecificInstructions(?string $specificInstructions = null): self
    {
        // validation for constraint: string
        if (!is_null($specificInstructions) && !is_string($specificInstructions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($specificInstructions, true), gettype($specificInstructions)), __LINE__);
        }
        $this->specificInstructions = $specificInstructions;
        
        return $this;
    }
    /**
     * Get height value
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param string $height
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->height = $height;
        
        return $this;
    }
    /**
     * Get width value
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param string $width
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->width = $width;
        
        return $this;
    }
    /**
     * Get length value
     * @return string|null
     */
    public function getLength(): ?string
    {
        return $this->length;
    }
    /**
     * Set length value
     * @param string $length
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setLength(?string $length = null): self
    {
        // validation for constraint: string
        if (!is_null($length) && !is_string($length)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), gettype($length)), __LINE__);
        }
        $this->length = $length;
        
        return $this;
    }
    /**
     * Get shipperCarriesCode value
     * @return string|null
     */
    public function getShipperCarriesCode(): ?string
    {
        return $this->shipperCarriesCode;
    }
    /**
     * Set shipperCarriesCode value
     * @param string $shipperCarriesCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCarriesCode(?string $shipperCarriesCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCarriesCode) && !is_string($shipperCarriesCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCarriesCode, true), gettype($shipperCarriesCode)), __LINE__);
        }
        $this->shipperCarriesCode = $shipperCarriesCode;
        
        return $this;
    }
    /**
     * Get shipperBuildingFloor value
     * @return string|null
     */
    public function getShipperBuildingFloor(): ?string
    {
        return $this->shipperBuildingFloor;
    }
    /**
     * Set shipperBuildingFloor value
     * @param string $shipperBuildingFloor
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperBuildingFloor(?string $shipperBuildingFloor = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperBuildingFloor) && !is_string($shipperBuildingFloor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperBuildingFloor, true), gettype($shipperBuildingFloor)), __LINE__);
        }
        $this->shipperBuildingFloor = $shipperBuildingFloor;
        
        return $this;
    }
    /**
     * Get shipperServiceDirection value
     * @return string|null
     */
    public function getShipperServiceDirection(): ?string
    {
        return $this->shipperServiceDirection;
    }
    /**
     * Set shipperServiceDirection value
     * @param string $shipperServiceDirection
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperServiceDirection(?string $shipperServiceDirection = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperServiceDirection) && !is_string($shipperServiceDirection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperServiceDirection, true), gettype($shipperServiceDirection)), __LINE__);
        }
        $this->shipperServiceDirection = $shipperServiceDirection;
        
        return $this;
    }
    /**
     * Get nombreDePassageMaximum value
     * @return string|null
     */
    public function getNombreDePassageMaximum(): ?string
    {
        return $this->nombreDePassageMaximum;
    }
    /**
     * Set nombreDePassageMaximum value
     * @param string $nombreDePassageMaximum
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setNombreDePassageMaximum(?string $nombreDePassageMaximum = null): self
    {
        // validation for constraint: string
        if (!is_null($nombreDePassageMaximum) && !is_string($nombreDePassageMaximum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreDePassageMaximum, true), gettype($nombreDePassageMaximum)), __LINE__);
        }
        $this->nombreDePassageMaximum = $nombreDePassageMaximum;
        
        return $this;
    }
    /**
     * Get ltAImprimerParChronopost value
     * @return string|null
     */
    public function getLtAImprimerParChronopost(): ?string
    {
        return $this->ltAImprimerParChronopost;
    }
    /**
     * Set ltAImprimerParChronopost value
     * @param string $ltAImprimerParChronopost
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setLtAImprimerParChronopost(?string $ltAImprimerParChronopost = null): self
    {
        // validation for constraint: string
        if (!is_null($ltAImprimerParChronopost) && !is_string($ltAImprimerParChronopost)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ltAImprimerParChronopost, true), gettype($ltAImprimerParChronopost)), __LINE__);
        }
        $this->ltAImprimerParChronopost = $ltAImprimerParChronopost;
        
        return $this;
    }
    /**
     * Get header_idEmit value
     * @return string|null
     */
    public function getHeader_idEmit(): ?string
    {
        return $this->header_idEmit;
    }
    /**
     * Set header_idEmit value
     * @param string $header_idEmit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setHeader_idEmit(?string $header_idEmit = null): self
    {
        // validation for constraint: string
        if (!is_null($header_idEmit) && !is_string($header_idEmit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_idEmit, true), gettype($header_idEmit)), __LINE__);
        }
        $this->header_idEmit = $header_idEmit;
        
        return $this;
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get subAccount value
     * @return string|null
     */
    public function getSubAccount(): ?string
    {
        return $this->subAccount;
    }
    /**
     * Set subAccount value
     * @param string $subAccount
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setSubAccount(?string $subAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($subAccount) && !is_string($subAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAccount, true), gettype($subAccount)), __LINE__);
        }
        $this->subAccount = $subAccount;
        
        return $this;
    }
    /**
     * Get header_identWebPro value
     * @return string|null
     */
    public function getHeader_identWebPro(): ?string
    {
        return $this->header_identWebPro;
    }
    /**
     * Set header_identWebPro value
     * @param string $header_identWebPro
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setHeader_identWebPro(?string $header_identWebPro = null): self
    {
        // validation for constraint: string
        if (!is_null($header_identWebPro) && !is_string($header_identWebPro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($header_identWebPro, true), gettype($header_identWebPro)), __LINE__);
        }
        $this->header_identWebPro = $header_identWebPro;
        
        return $this;
    }
    /**
     * Get shipperCivility value
     * @return string|null
     */
    public function getShipperCivility(): ?string
    {
        return $this->shipperCivility;
    }
    /**
     * Set shipperCivility value
     * @param string $shipperCivility
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCivility(?string $shipperCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCivility) && !is_string($shipperCivility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCivility, true), gettype($shipperCivility)), __LINE__);
        }
        $this->shipperCivility = $shipperCivility;
        
        return $this;
    }
    /**
     * Get shipperName value
     * @return string|null
     */
    public function getShipperName(): ?string
    {
        return $this->shipperName;
    }
    /**
     * Set shipperName value
     * @param string $shipperName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperName(?string $shipperName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName) && !is_string($shipperName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), gettype($shipperName)), __LINE__);
        }
        $this->shipperName = $shipperName;
        
        return $this;
    }
    /**
     * Get shipperName2 value
     * @return string|null
     */
    public function getShipperName2(): ?string
    {
        return $this->shipperName2;
    }
    /**
     * Set shipperName2 value
     * @param string $shipperName2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperName2(?string $shipperName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperName2) && !is_string($shipperName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName2, true), gettype($shipperName2)), __LINE__);
        }
        $this->shipperName2 = $shipperName2;
        
        return $this;
    }
    /**
     * Get shipperAdress1 value
     * @return string|null
     */
    public function getShipperAdress1(): ?string
    {
        return $this->shipperAdress1;
    }
    /**
     * Set shipperAdress1 value
     * @param string $shipperAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperAdress1(?string $shipperAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress1) && !is_string($shipperAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress1, true), gettype($shipperAdress1)), __LINE__);
        }
        $this->shipperAdress1 = $shipperAdress1;
        
        return $this;
    }
    /**
     * Get shipperAdress2 value
     * @return string|null
     */
    public function getShipperAdress2(): ?string
    {
        return $this->shipperAdress2;
    }
    /**
     * Set shipperAdress2 value
     * @param string $shipperAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperAdress2(?string $shipperAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperAdress2) && !is_string($shipperAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperAdress2, true), gettype($shipperAdress2)), __LINE__);
        }
        $this->shipperAdress2 = $shipperAdress2;
        
        return $this;
    }
    /**
     * Get shipperZipCode value
     * @return string|null
     */
    public function getShipperZipCode(): ?string
    {
        return $this->shipperZipCode;
    }
    /**
     * Set shipperZipCode value
     * @param string $shipperZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperZipCode(?string $shipperZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperZipCode) && !is_string($shipperZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperZipCode, true), gettype($shipperZipCode)), __LINE__);
        }
        $this->shipperZipCode = $shipperZipCode;
        
        return $this;
    }
    /**
     * Get shipperCity value
     * @return string|null
     */
    public function getShipperCity(): ?string
    {
        return $this->shipperCity;
    }
    /**
     * Set shipperCity value
     * @param string $shipperCity
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCity(?string $shipperCity = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCity) && !is_string($shipperCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCity, true), gettype($shipperCity)), __LINE__);
        }
        $this->shipperCity = $shipperCity;
        
        return $this;
    }
    /**
     * Get shipperCountry value
     * @return string|null
     */
    public function getShipperCountry(): ?string
    {
        return $this->shipperCountry;
    }
    /**
     * Set shipperCountry value
     * @param string $shipperCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCountry(?string $shipperCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountry) && !is_string($shipperCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountry, true), gettype($shipperCountry)), __LINE__);
        }
        $this->shipperCountry = $shipperCountry;
        
        return $this;
    }
    /**
     * Get shipperCountryName value
     * @return string|null
     */
    public function getShipperCountryName(): ?string
    {
        return $this->shipperCountryName;
    }
    /**
     * Set shipperCountryName value
     * @param string $shipperCountryName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperCountryName(?string $shipperCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperCountryName) && !is_string($shipperCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperCountryName, true), gettype($shipperCountryName)), __LINE__);
        }
        $this->shipperCountryName = $shipperCountryName;
        
        return $this;
    }
    /**
     * Get shipperContactName value
     * @return string|null
     */
    public function getShipperContactName(): ?string
    {
        return $this->shipperContactName;
    }
    /**
     * Set shipperContactName value
     * @param string $shipperContactName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperContactName(?string $shipperContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperContactName) && !is_string($shipperContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperContactName, true), gettype($shipperContactName)), __LINE__);
        }
        $this->shipperContactName = $shipperContactName;
        
        return $this;
    }
    /**
     * Get shipperEmail value
     * @return string|null
     */
    public function getShipperEmail(): ?string
    {
        return $this->shipperEmail;
    }
    /**
     * Set shipperEmail value
     * @param string $shipperEmail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperEmail(?string $shipperEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperEmail) && !is_string($shipperEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperEmail, true), gettype($shipperEmail)), __LINE__);
        }
        $this->shipperEmail = $shipperEmail;
        
        return $this;
    }
    /**
     * Get shipperPhone value
     * @return string|null
     */
    public function getShipperPhone(): ?string
    {
        return $this->shipperPhone;
    }
    /**
     * Set shipperPhone value
     * @param string $shipperPhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperPhone(?string $shipperPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperPhone) && !is_string($shipperPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperPhone, true), gettype($shipperPhone)), __LINE__);
        }
        $this->shipperPhone = $shipperPhone;
        
        return $this;
    }
    /**
     * Get shipperMobilePhone value
     * @return string|null
     */
    public function getShipperMobilePhone(): ?string
    {
        return $this->shipperMobilePhone;
    }
    /**
     * Set shipperMobilePhone value
     * @param string $shipperMobilePhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperMobilePhone(?string $shipperMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperMobilePhone) && !is_string($shipperMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperMobilePhone, true), gettype($shipperMobilePhone)), __LINE__);
        }
        $this->shipperMobilePhone = $shipperMobilePhone;
        
        return $this;
    }
    /**
     * Get customerCivility value
     * @return string|null
     */
    public function getCustomerCivility(): ?string
    {
        return $this->customerCivility;
    }
    /**
     * Set customerCivility value
     * @param string $customerCivility
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCivility(?string $customerCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCivility) && !is_string($customerCivility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCivility, true), gettype($customerCivility)), __LINE__);
        }
        $this->customerCivility = $customerCivility;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get customerName2 value
     * @return string|null
     */
    public function getCustomerName2(): ?string
    {
        return $this->customerName2;
    }
    /**
     * Set customerName2 value
     * @param string $customerName2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerName2(?string $customerName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName2) && !is_string($customerName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName2, true), gettype($customerName2)), __LINE__);
        }
        $this->customerName2 = $customerName2;
        
        return $this;
    }
    /**
     * Get customerAdress1 value
     * @return string|null
     */
    public function getCustomerAdress1(): ?string
    {
        return $this->customerAdress1;
    }
    /**
     * Set customerAdress1 value
     * @param string $customerAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerAdress1(?string $customerAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAdress1) && !is_string($customerAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress1, true), gettype($customerAdress1)), __LINE__);
        }
        $this->customerAdress1 = $customerAdress1;
        
        return $this;
    }
    /**
     * Get customerAdress2 value
     * @return string|null
     */
    public function getCustomerAdress2(): ?string
    {
        return $this->customerAdress2;
    }
    /**
     * Set customerAdress2 value
     * @param string $customerAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerAdress2(?string $customerAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAdress2) && !is_string($customerAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAdress2, true), gettype($customerAdress2)), __LINE__);
        }
        $this->customerAdress2 = $customerAdress2;
        
        return $this;
    }
    /**
     * Get customerZipCode value
     * @return string|null
     */
    public function getCustomerZipCode(): ?string
    {
        return $this->customerZipCode;
    }
    /**
     * Set customerZipCode value
     * @param string $customerZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerZipCode(?string $customerZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerZipCode) && !is_string($customerZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerZipCode, true), gettype($customerZipCode)), __LINE__);
        }
        $this->customerZipCode = $customerZipCode;
        
        return $this;
    }
    /**
     * Get customerCity value
     * @return string|null
     */
    public function getCustomerCity(): ?string
    {
        return $this->customerCity;
    }
    /**
     * Set customerCity value
     * @param string $customerCity
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCity(?string $customerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCity) && !is_string($customerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCity, true), gettype($customerCity)), __LINE__);
        }
        $this->customerCity = $customerCity;
        
        return $this;
    }
    /**
     * Get customerCountry value
     * @return string|null
     */
    public function getCustomerCountry(): ?string
    {
        return $this->customerCountry;
    }
    /**
     * Set customerCountry value
     * @param string $customerCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCountry(?string $customerCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCountry) && !is_string($customerCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountry, true), gettype($customerCountry)), __LINE__);
        }
        $this->customerCountry = $customerCountry;
        
        return $this;
    }
    /**
     * Get customerCountryName value
     * @return string|null
     */
    public function getCustomerCountryName(): ?string
    {
        return $this->customerCountryName;
    }
    /**
     * Set customerCountryName value
     * @param string $customerCountryName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerCountryName(?string $customerCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCountryName) && !is_string($customerCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCountryName, true), gettype($customerCountryName)), __LINE__);
        }
        $this->customerCountryName = $customerCountryName;
        
        return $this;
    }
    /**
     * Get customerContactName value
     * @return string|null
     */
    public function getCustomerContactName(): ?string
    {
        return $this->customerContactName;
    }
    /**
     * Set customerContactName value
     * @param string $customerContactName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerContactName(?string $customerContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerContactName) && !is_string($customerContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerContactName, true), gettype($customerContactName)), __LINE__);
        }
        $this->customerContactName = $customerContactName;
        
        return $this;
    }
    /**
     * Get customerEmail value
     * @return string|null
     */
    public function getCustomerEmail(): ?string
    {
        return $this->customerEmail;
    }
    /**
     * Set customerEmail value
     * @param string $customerEmail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerEmail(?string $customerEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($customerEmail) && !is_string($customerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerEmail, true), gettype($customerEmail)), __LINE__);
        }
        $this->customerEmail = $customerEmail;
        
        return $this;
    }
    /**
     * Get customerPhone value
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }
    /**
     * Set customerPhone value
     * @param string $customerPhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerPhone(?string $customerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        $this->customerPhone = $customerPhone;
        
        return $this;
    }
    /**
     * Get customerMobilePhone value
     * @return string|null
     */
    public function getCustomerMobilePhone(): ?string
    {
        return $this->customerMobilePhone;
    }
    /**
     * Set customerMobilePhone value
     * @param string $customerMobilePhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerMobilePhone(?string $customerMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerMobilePhone) && !is_string($customerMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerMobilePhone, true), gettype($customerMobilePhone)), __LINE__);
        }
        $this->customerMobilePhone = $customerMobilePhone;
        
        return $this;
    }
    /**
     * Get customerPreAlert value
     * @return string|null
     */
    public function getCustomerPreAlert(): ?string
    {
        return $this->customerPreAlert;
    }
    /**
     * Set customerPreAlert value
     * @param string $customerPreAlert
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerPreAlert(?string $customerPreAlert = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPreAlert) && !is_string($customerPreAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPreAlert, true), gettype($customerPreAlert)), __LINE__);
        }
        $this->customerPreAlert = $customerPreAlert;
        
        return $this;
    }
    /**
     * Get recipientCivility value
     * @return string|null
     */
    public function getRecipientCivility(): ?string
    {
        return $this->recipientCivility;
    }
    /**
     * Set recipientCivility value
     * @param string $recipientCivility
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCivility(?string $recipientCivility = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCivility) && !is_string($recipientCivility)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCivility, true), gettype($recipientCivility)), __LINE__);
        }
        $this->recipientCivility = $recipientCivility;
        
        return $this;
    }
    /**
     * Get recipientName value
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }
    /**
     * Set recipientName value
     * @param string $recipientName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientName(?string $recipientName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;
        
        return $this;
    }
    /**
     * Get recipientName2 value
     * @return string|null
     */
    public function getRecipientName2(): ?string
    {
        return $this->recipientName2;
    }
    /**
     * Set recipientName2 value
     * @param string $recipientName2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientName2(?string $recipientName2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName2) && !is_string($recipientName2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName2, true), gettype($recipientName2)), __LINE__);
        }
        $this->recipientName2 = $recipientName2;
        
        return $this;
    }
    /**
     * Get recipientAdress1 value
     * @return string|null
     */
    public function getRecipientAdress1(): ?string
    {
        return $this->recipientAdress1;
    }
    /**
     * Set recipientAdress1 value
     * @param string $recipientAdress1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientAdress1(?string $recipientAdress1 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress1) && !is_string($recipientAdress1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress1, true), gettype($recipientAdress1)), __LINE__);
        }
        $this->recipientAdress1 = $recipientAdress1;
        
        return $this;
    }
    /**
     * Get recipientAdress2 value
     * @return string|null
     */
    public function getRecipientAdress2(): ?string
    {
        return $this->recipientAdress2;
    }
    /**
     * Set recipientAdress2 value
     * @param string $recipientAdress2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientAdress2(?string $recipientAdress2 = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientAdress2) && !is_string($recipientAdress2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientAdress2, true), gettype($recipientAdress2)), __LINE__);
        }
        $this->recipientAdress2 = $recipientAdress2;
        
        return $this;
    }
    /**
     * Get recipientZipCode value
     * @return string|null
     */
    public function getRecipientZipCode(): ?string
    {
        return $this->recipientZipCode;
    }
    /**
     * Set recipientZipCode value
     * @param string $recipientZipCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientZipCode(?string $recipientZipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientZipCode) && !is_string($recipientZipCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientZipCode, true), gettype($recipientZipCode)), __LINE__);
        }
        $this->recipientZipCode = $recipientZipCode;
        
        return $this;
    }
    /**
     * Get recipientCity value
     * @return string|null
     */
    public function getRecipientCity(): ?string
    {
        return $this->recipientCity;
    }
    /**
     * Set recipientCity value
     * @param string $recipientCity
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCity(?string $recipientCity = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCity) && !is_string($recipientCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCity, true), gettype($recipientCity)), __LINE__);
        }
        $this->recipientCity = $recipientCity;
        
        return $this;
    }
    /**
     * Get recipientCountry value
     * @return string|null
     */
    public function getRecipientCountry(): ?string
    {
        return $this->recipientCountry;
    }
    /**
     * Set recipientCountry value
     * @param string $recipientCountry
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCountry(?string $recipientCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountry) && !is_string($recipientCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountry, true), gettype($recipientCountry)), __LINE__);
        }
        $this->recipientCountry = $recipientCountry;
        
        return $this;
    }
    /**
     * Get recipientCountryName value
     * @return string|null
     */
    public function getRecipientCountryName(): ?string
    {
        return $this->recipientCountryName;
    }
    /**
     * Set recipientCountryName value
     * @param string $recipientCountryName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientCountryName(?string $recipientCountryName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientCountryName) && !is_string($recipientCountryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientCountryName, true), gettype($recipientCountryName)), __LINE__);
        }
        $this->recipientCountryName = $recipientCountryName;
        
        return $this;
    }
    /**
     * Get recipientContactName value
     * @return string|null
     */
    public function getRecipientContactName(): ?string
    {
        return $this->recipientContactName;
    }
    /**
     * Set recipientContactName value
     * @param string $recipientContactName
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientContactName(?string $recipientContactName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientContactName) && !is_string($recipientContactName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientContactName, true), gettype($recipientContactName)), __LINE__);
        }
        $this->recipientContactName = $recipientContactName;
        
        return $this;
    }
    /**
     * Get recipientEmail value
     * @return string|null
     */
    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }
    /**
     * Set recipientEmail value
     * @param string $recipientEmail
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientEmail(?string $recipientEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientEmail) && !is_string($recipientEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmail, true), gettype($recipientEmail)), __LINE__);
        }
        $this->recipientEmail = $recipientEmail;
        
        return $this;
    }
    /**
     * Get recipientPhone value
     * @return string|null
     */
    public function getRecipientPhone(): ?string
    {
        return $this->recipientPhone;
    }
    /**
     * Set recipientPhone value
     * @param string $recipientPhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientPhone(?string $recipientPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientPhone) && !is_string($recipientPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientPhone, true), gettype($recipientPhone)), __LINE__);
        }
        $this->recipientPhone = $recipientPhone;
        
        return $this;
    }
    /**
     * Get recipientMobilePhone value
     * @return string|null
     */
    public function getRecipientMobilePhone(): ?string
    {
        return $this->recipientMobilePhone;
    }
    /**
     * Set recipientMobilePhone value
     * @param string $recipientMobilePhone
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientMobilePhone(?string $recipientMobilePhone = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientMobilePhone) && !is_string($recipientMobilePhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientMobilePhone, true), gettype($recipientMobilePhone)), __LINE__);
        }
        $this->recipientMobilePhone = $recipientMobilePhone;
        
        return $this;
    }
    /**
     * Get recipientPreAlert value
     * @return string|null
     */
    public function getRecipientPreAlert(): ?string
    {
        return $this->recipientPreAlert;
    }
    /**
     * Set recipientPreAlert value
     * @param string $recipientPreAlert
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientPreAlert(?string $recipientPreAlert = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientPreAlert) && !is_string($recipientPreAlert)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientPreAlert, true), gettype($recipientPreAlert)), __LINE__);
        }
        $this->recipientPreAlert = $recipientPreAlert;
        
        return $this;
    }
    /**
     * Get shipperRef value
     * @return string|null
     */
    public function getShipperRef(): ?string
    {
        return $this->shipperRef;
    }
    /**
     * Set shipperRef value
     * @param string $shipperRef
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipperRef(?string $shipperRef = null): self
    {
        // validation for constraint: string
        if (!is_null($shipperRef) && !is_string($shipperRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperRef, true), gettype($shipperRef)), __LINE__);
        }
        $this->shipperRef = $shipperRef;
        
        return $this;
    }
    /**
     * Get recipientRef value
     * @return string|null
     */
    public function getRecipientRef(): ?string
    {
        return $this->recipientRef;
    }
    /**
     * Set recipientRef value
     * @param string $recipientRef
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setRecipientRef(?string $recipientRef = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientRef) && !is_string($recipientRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientRef, true), gettype($recipientRef)), __LINE__);
        }
        $this->recipientRef = $recipientRef;
        
        return $this;
    }
    /**
     * Get customerSkybillNumber value
     * @return string|null
     */
    public function getCustomerSkybillNumber(): ?string
    {
        return $this->customerSkybillNumber;
    }
    /**
     * Set customerSkybillNumber value
     * @param string $customerSkybillNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomerSkybillNumber(?string $customerSkybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerSkybillNumber) && !is_string($customerSkybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerSkybillNumber, true), gettype($customerSkybillNumber)), __LINE__);
        }
        $this->customerSkybillNumber = $customerSkybillNumber;
        
        return $this;
    }
    /**
     * Get evtCode value
     * @return string|null
     */
    public function getEvtCode(): ?string
    {
        return $this->evtCode;
    }
    /**
     * Set evtCode value
     * @param string $evtCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setEvtCode(?string $evtCode = null): self
    {
        // validation for constraint: string
        if (!is_null($evtCode) && !is_string($evtCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($evtCode, true), gettype($evtCode)), __LINE__);
        }
        $this->evtCode = $evtCode;
        
        return $this;
    }
    /**
     * Get productCode value
     * @return string|null
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }
    /**
     * Set productCode value
     * @param string $productCode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setProductCode(?string $productCode = null): self
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->productCode = $productCode;
        
        return $this;
    }
    /**
     * Get shipDate value
     * @return string|null
     */
    public function getShipDate(): ?string
    {
        return $this->shipDate;
    }
    /**
     * Set shipDate value
     * @param string $shipDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipDate(?string $shipDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shipDate) && !is_string($shipDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipDate, true), gettype($shipDate)), __LINE__);
        }
        $this->shipDate = $shipDate;
        
        return $this;
    }
    /**
     * Get shipHour value
     * @return string|null
     */
    public function getShipHour(): ?string
    {
        return $this->shipHour;
    }
    /**
     * Set shipHour value
     * @param string $shipHour
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setShipHour(?string $shipHour = null): self
    {
        // validation for constraint: string
        if (!is_null($shipHour) && !is_string($shipHour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipHour, true), gettype($shipHour)), __LINE__);
        }
        $this->shipHour = $shipHour;
        
        return $this;
    }
    /**
     * Get weight value
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param string $weight
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;
        
        return $this;
    }
    /**
     * Get weightUnit value
     * @return string|null
     */
    public function getWeightUnit(): ?string
    {
        return $this->weightUnit;
    }
    /**
     * Set weightUnit value
     * @param string $weightUnit
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setWeightUnit(?string $weightUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($weightUnit) && !is_string($weightUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weightUnit, true), gettype($weightUnit)), __LINE__);
        }
        $this->weightUnit = $weightUnit;
        
        return $this;
    }
    /**
     * Get insuredValue value
     * @return string|null
     */
    public function getInsuredValue(): ?string
    {
        return $this->insuredValue;
    }
    /**
     * Set insuredValue value
     * @param string $insuredValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setInsuredValue(?string $insuredValue = null): self
    {
        // validation for constraint: string
        if (!is_null($insuredValue) && !is_string($insuredValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuredValue, true), gettype($insuredValue)), __LINE__);
        }
        $this->insuredValue = $insuredValue;
        
        return $this;
    }
    /**
     * Get insuredCurrency value
     * @return string|null
     */
    public function getInsuredCurrency(): ?string
    {
        return $this->insuredCurrency;
    }
    /**
     * Set insuredCurrency value
     * @param string $insuredCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setInsuredCurrency(?string $insuredCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($insuredCurrency) && !is_string($insuredCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuredCurrency, true), gettype($insuredCurrency)), __LINE__);
        }
        $this->insuredCurrency = $insuredCurrency;
        
        return $this;
    }
    /**
     * Get codValue value
     * @return string|null
     */
    public function getCodValue(): ?string
    {
        return $this->codValue;
    }
    /**
     * Set codValue value
     * @param string $codValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCodValue(?string $codValue = null): self
    {
        // validation for constraint: string
        if (!is_null($codValue) && !is_string($codValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codValue, true), gettype($codValue)), __LINE__);
        }
        $this->codValue = $codValue;
        
        return $this;
    }
    /**
     * Get codCurrency value
     * @return string|null
     */
    public function getCodCurrency(): ?string
    {
        return $this->codCurrency;
    }
    /**
     * Set codCurrency value
     * @param string $codCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCodCurrency(?string $codCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($codCurrency) && !is_string($codCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codCurrency, true), gettype($codCurrency)), __LINE__);
        }
        $this->codCurrency = $codCurrency;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return string|null
     */
    public function getCustomsValue(): ?string
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param string $customsValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomsValue(?string $customsValue = null): self
    {
        // validation for constraint: string
        if (!is_null($customsValue) && !is_string($customsValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsValue, true), gettype($customsValue)), __LINE__);
        }
        $this->customsValue = $customsValue;
        
        return $this;
    }
    /**
     * Get customsCurrency value
     * @return string|null
     */
    public function getCustomsCurrency(): ?string
    {
        return $this->customsCurrency;
    }
    /**
     * Set customsCurrency value
     * @param string $customsCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setCustomsCurrency(?string $customsCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($customsCurrency) && !is_string($customsCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customsCurrency, true), gettype($customsCurrency)), __LINE__);
        }
        $this->customsCurrency = $customsCurrency;
        
        return $this;
    }
    /**
     * Get service value
     * @return string|null
     */
    public function getService(): ?string
    {
        return $this->service;
    }
    /**
     * Set service value
     * @param string $service
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;
        
        return $this;
    }
    /**
     * Get as value
     * @return string|null
     */
    public function getAs(): ?string
    {
        return $this->as;
    }
    /**
     * Set as value
     * @param string $as
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setAs(?string $as = null): self
    {
        // validation for constraint: string
        if (!is_null($as) && !is_string($as)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($as, true), gettype($as)), __LINE__);
        }
        $this->as = $as;
        
        return $this;
    }
    /**
     * Get objectType value
     * @return string|null
     */
    public function getObjectType(): ?string
    {
        return $this->objectType;
    }
    /**
     * Set objectType value
     * @param string $objectType
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setObjectType(?string $objectType = null): self
    {
        // validation for constraint: string
        if (!is_null($objectType) && !is_string($objectType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($objectType, true), gettype($objectType)), __LINE__);
        }
        $this->objectType = $objectType;
        
        return $this;
    }
    /**
     * Get content1 value
     * @return string|null
     */
    public function getContent1(): ?string
    {
        return $this->content1;
    }
    /**
     * Set content1 value
     * @param string $content1
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setContent1(?string $content1 = null): self
    {
        // validation for constraint: string
        if (!is_null($content1) && !is_string($content1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content1, true), gettype($content1)), __LINE__);
        }
        $this->content1 = $content1;
        
        return $this;
    }
    /**
     * Get content2 value
     * @return string|null
     */
    public function getContent2(): ?string
    {
        return $this->content2;
    }
    /**
     * Set content2 value
     * @param string $content2
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setContent2(?string $content2 = null): self
    {
        // validation for constraint: string
        if (!is_null($content2) && !is_string($content2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content2, true), gettype($content2)), __LINE__);
        }
        $this->content2 = $content2;
        
        return $this;
    }
    /**
     * Get content3 value
     * @return string|null
     */
    public function getContent3(): ?string
    {
        return $this->content3;
    }
    /**
     * Set content3 value
     * @param string $content3
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setContent3(?string $content3 = null): self
    {
        // validation for constraint: string
        if (!is_null($content3) && !is_string($content3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content3, true), gettype($content3)), __LINE__);
        }
        $this->content3 = $content3;
        
        return $this;
    }
    /**
     * Get content4 value
     * @return string|null
     */
    public function getContent4(): ?string
    {
        return $this->content4;
    }
    /**
     * Set content4 value
     * @param string $content4
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setContent4(?string $content4 = null): self
    {
        // validation for constraint: string
        if (!is_null($content4) && !is_string($content4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content4, true), gettype($content4)), __LINE__);
        }
        $this->content4 = $content4;
        
        return $this;
    }
    /**
     * Get content5 value
     * @return string|null
     */
    public function getContent5(): ?string
    {
        return $this->content5;
    }
    /**
     * Set content5 value
     * @param string $content5
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setContent5(?string $content5 = null): self
    {
        // validation for constraint: string
        if (!is_null($content5) && !is_string($content5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($content5, true), gettype($content5)), __LINE__);
        }
        $this->content5 = $content5;
        
        return $this;
    }
    /**
     * Get portValue value
     * @return string|null
     */
    public function getPortValue(): ?string
    {
        return $this->portValue;
    }
    /**
     * Set portValue value
     * @param string $portValue
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setPortValue(?string $portValue = null): self
    {
        // validation for constraint: string
        if (!is_null($portValue) && !is_string($portValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portValue, true), gettype($portValue)), __LINE__);
        }
        $this->portValue = $portValue;
        
        return $this;
    }
    /**
     * Get portCurrency value
     * @return string|null
     */
    public function getPortCurrency(): ?string
    {
        return $this->portCurrency;
    }
    /**
     * Set portCurrency value
     * @param string $portCurrency
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setPortCurrency(?string $portCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($portCurrency) && !is_string($portCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($portCurrency, true), gettype($portCurrency)), __LINE__);
        }
        $this->portCurrency = $portCurrency;
        
        return $this;
    }
    /**
     * Get skybillRank value
     * @return string|null
     */
    public function getSkybillRank(): ?string
    {
        return $this->skybillRank;
    }
    /**
     * Set skybillRank value
     * @param string $skybillRank
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setSkybillRank(?string $skybillRank = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillRank) && !is_string($skybillRank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillRank, true), gettype($skybillRank)), __LINE__);
        }
        $this->skybillRank = $skybillRank;
        
        return $this;
    }
    /**
     * Get bulkNumber value
     * @return string|null
     */
    public function getBulkNumber(): ?string
    {
        return $this->bulkNumber;
    }
    /**
     * Set bulkNumber value
     * @param string $bulkNumber
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setBulkNumber(?string $bulkNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkNumber) && !is_string($bulkNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkNumber, true), gettype($bulkNumber)), __LINE__);
        }
        $this->bulkNumber = $bulkNumber;
        
        return $this;
    }
    /**
     * Get mode value
     * @return string|null
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }
    /**
     * Set mode value
     * @param string $mode
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setMode(?string $mode = null): self
    {
        // validation for constraint: string
        if (!is_null($mode) && !is_string($mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mode, true), gettype($mode)), __LINE__);
        }
        $this->mode = $mode;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
        return $this;
    }
    /**
     * Get timeSlotStartDate value
     * @return string|null
     */
    public function getTimeSlotStartDate(): ?string
    {
        return $this->timeSlotStartDate;
    }
    /**
     * Set timeSlotStartDate value
     * @param string $timeSlotStartDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotStartDate(?string $timeSlotStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotStartDate) && !is_string($timeSlotStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotStartDate, true), gettype($timeSlotStartDate)), __LINE__);
        }
        $this->timeSlotStartDate = $timeSlotStartDate;
        
        return $this;
    }
    /**
     * Get timeSlotEndDate value
     * @return string|null
     */
    public function getTimeSlotEndDate(): ?string
    {
        return $this->timeSlotEndDate;
    }
    /**
     * Set timeSlotEndDate value
     * @param string $timeSlotEndDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotEndDate(?string $timeSlotEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotEndDate) && !is_string($timeSlotEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotEndDate, true), gettype($timeSlotEndDate)), __LINE__);
        }
        $this->timeSlotEndDate = $timeSlotEndDate;
        
        return $this;
    }
    /**
     * Get timeSlotTariffLevel value
     * @return string|null
     */
    public function getTimeSlotTariffLevel(): ?string
    {
        return $this->timeSlotTariffLevel;
    }
    /**
     * Set timeSlotTariffLevel value
     * @param string $timeSlotTariffLevel
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setTimeSlotTariffLevel(?string $timeSlotTariffLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($timeSlotTariffLevel) && !is_string($timeSlotTariffLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeSlotTariffLevel, true), gettype($timeSlotTariffLevel)), __LINE__);
        }
        $this->timeSlotTariffLevel = $timeSlotTariffLevel;
        
        return $this;
    }
    /**
     * Get expirationDate value
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Set expirationDate value
     * @param string $expirationDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setExpirationDate(?string $expirationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expirationDate, true), gettype($expirationDate)), __LINE__);
        }
        $this->expirationDate = $expirationDate;
        
        return $this;
    }
    /**
     * Get sellByDate value
     * @return string|null
     */
    public function getSellByDate(): ?string
    {
        return $this->sellByDate;
    }
    /**
     * Set sellByDate value
     * @param string $sellByDate
     * @return \SengentoBV\ChronopostSdk\Soap\ShippingService\Structs\ChronoApiShippingWithReservationAndESDWithRefClientPC
     */
    public function setSellByDate(?string $sellByDate = null): self
    {
        // validation for constraint: string
        if (!is_null($sellByDate) && !is_string($sellByDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellByDate, true), gettype($sellByDate)), __LINE__);
        }
        $this->sellByDate = $sellByDate;
        
        return $this;
    }
}
