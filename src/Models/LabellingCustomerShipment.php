<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class LabellingCustomerShipment implements \JsonSerializable
{
    /**
     * @var Address[]
     */
    private $addresses;

    /**
     * @var Amount[]|null
     */
    private $amounts;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string|null
     */
    private $codingText;

    /**
     * @var string|null
     */
    private $collectionTimeStampStart;

    /**
     * @var string|null
     */
    private $collectionTimeStampEnd;

    /**
     * @var Contact[]|null
     */
    private $contacts;

    /**
     * @var string|null
     */
    private $content;

    /**
     * @var string|null
     */
    private $costCenter;

    /**
     * @var string|null
     */
    private $customerOrderNumber;

    /**
     * @var Customs|null
     */
    private $customs;

    /**
     * @var string|null
     */
    private $deliveryAddress;

    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var Dimension
     */
    private $dimension;

    /**
     * @var string|null
     */
    private $downPartnerBarcode;

    /**
     * @var string|null
     */
    private $downPartnerID;

    /**
     * @var string|null
     */
    private $downPartnerLocation;

    /**
     * @var Group[]|null
     */
    private $groups;

    /**
     * @var HazardousMaterial[]|null
     */
    private $hazardousMaterial;

    /**
     * @var string|null
     */
    private $productCodeCollect;

    /**
     * @var string
     */
    private $productCodeDelivery;

    /**
     * @var ProductOption[]|null
     */
    private $productOptions;

    /**
     * @var string|null
     */
    private $receiverDateOfBirth;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $referenceCollect;

    /**
     * @var string|null
     */
    private $remark;

    /**
     * @var string|null
     */
    private $returnBarcode;

    /**
     * @var string|null
     */
    private $returnReference;

    /**
     * @var string|null
     */
    private $timeslotID;

    /**
     * @var ExtraField[]|null
     */
    private $extraFields;

    /**
     * @param Address[] $addresses
     * @param string $barcode
     * @param Dimension $dimension
     * @param string $productCodeDelivery
     */
    public function __construct(array $addresses, string $barcode, Dimension $dimension, string $productCodeDelivery)
    {
        $this->addresses = $addresses;
        $this->barcode = $barcode;
        $this->dimension = $dimension;
        $this->productCodeDelivery = $productCodeDelivery;
    }

    /**
     * Returns Addresses.
     * List of 1 or more Address type elements. At least 1 address type is mandatory. See [Address
     * types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/address-types) for the
     * available types.
     *
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * Sets Addresses.
     * List of 1 or more Address type elements. At least 1 address type is mandatory. See [Address
     * types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/address-types) for the
     * available types.
     *
     * @required
     * @maps Addresses
     *
     * @param Address[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * Returns Amounts.
     * List of amount types. An amount represents a value of the shipment. Amount type 01 mandatory for COD-
     * shipments, Amount type 02 mandatory for domestic insured shipments. Please see [Amount types](https:
     * //developer.postnl.nl/docs/#/http/reference-data/reference-codes/amount-types) for the available
     * types.
     *
     * @return Amount[]|null
     */
    public function getAmounts(): ?array
    {
        return $this->amounts;
    }

    /**
     * Sets Amounts.
     * List of amount types. An amount represents a value of the shipment. Amount type 01 mandatory for COD-
     * shipments, Amount type 02 mandatory for domestic insured shipments. Please see [Amount types](https:
     * //developer.postnl.nl/docs/#/http/reference-data/reference-codes/amount-types) for the available
     * types.
     *
     * @maps Amounts
     *
     * @param Amount[]|null $amounts
     */
    public function setAmounts(?array $amounts): void
    {
        $this->amounts = $amounts;
    }

    /**
     * Returns Barcode.
     * Barcode of the shipment. This is a unique value. Note: If you leave this attribute out of your
     * request an unique barcode will be generated automatically.
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * Barcode of the shipment. This is a unique value. Note: If you leave this attribute out of your
     * request an unique barcode will be generated automatically.
     *
     * @required
     * @maps Barcode
     */
    public function setBarcode(string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Returns Coding Text.
     * Code used for logistic purposes (usually generated by the service itself and returned in the
     * response). Please note that this must be provided when  using the Confirm API to confirm shipments
     * where coding texts are required (e.g. letterbox parcels).
     */
    public function getCodingText(): ?string
    {
        return $this->codingText;
    }

    /**
     * Sets Coding Text.
     * Code used for logistic purposes (usually generated by the service itself and returned in the
     * response). Please note that this must be provided when  using the Confirm API to confirm shipments
     * where coding texts are required (e.g. letterbox parcels).
     *
     * @maps CodingText
     */
    public function setCodingText(?string $codingText): void
    {
        $this->codingText = $codingText;
    }

    /**
     * Returns Collection Time Stamp Start.
     * Starting date/time of the collection of the shipment. Format: dd-MM-yyyy hh:mm:ss
     */
    public function getCollectionTimeStampStart(): ?string
    {
        return $this->collectionTimeStampStart;
    }

    /**
     * Sets Collection Time Stamp Start.
     * Starting date/time of the collection of the shipment. Format: dd-MM-yyyy hh:mm:ss
     *
     * @maps CollectionTimeStampStart
     */
    public function setCollectionTimeStampStart(?string $collectionTimeStampStart): void
    {
        $this->collectionTimeStampStart = $collectionTimeStampStart;
    }

    /**
     * Returns Collection Time Stamp End.
     * Ending date/time of the collection of the shipment. Format: dd-MM-yyyy hh:mm:ss
     */
    public function getCollectionTimeStampEnd(): ?string
    {
        return $this->collectionTimeStampEnd;
    }

    /**
     * Sets Collection Time Stamp End.
     * Ending date/time of the collection of the shipment. Format: dd-MM-yyyy hh:mm:ss
     *
     * @maps CollectionTimeStampEnd
     */
    public function setCollectionTimeStampEnd(?string $collectionTimeStampEnd): void
    {
        $this->collectionTimeStampEnd = $collectionTimeStampEnd;
    }

    /**
     * Returns Contacts.
     * One or more ContactType elements belonging to a shipment. Mandatory in some cases. Please refer to
     * the available [Contact types](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/contact-types) for the possible values.
     *
     * @return Contact[]|null
     */
    public function getContacts(): ?array
    {
        return $this->contacts;
    }

    /**
     * Sets Contacts.
     * One or more ContactType elements belonging to a shipment. Mandatory in some cases. Please refer to
     * the available [Contact types](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/contact-types) for the possible values.
     *
     * @maps Contacts
     *
     * @param Contact[]|null $contacts
     */
    public function setContacts(?array $contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * Returns Content.
     * Content of the shipment. Mandatory for Extra@Home shipments
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Sets Content.
     * Content of the shipment. Mandatory for Extra@Home shipments
     *
     * @maps Content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * Returns Cost Center.
     * Cost center of the shipment. This value will appear on your invoice
     */
    public function getCostCenter(): ?string
    {
        return $this->costCenter;
    }

    /**
     * Sets Cost Center.
     * Cost center of the shipment. This value will appear on your invoice
     *
     * @maps CostCenter
     */
    public function setCostCenter(?string $costCenter): void
    {
        $this->costCenter = $costCenter;
    }

    /**
     * Returns Customer Order Number.
     * Order number of the customer
     */
    public function getCustomerOrderNumber(): ?string
    {
        return $this->customerOrderNumber;
    }

    /**
     * Sets Customer Order Number.
     * Order number of the customer
     *
     * @maps CustomerOrderNumber
     */
    public function setCustomerOrderNumber(?string $customerOrderNumber): void
    {
        $this->customerOrderNumber = $customerOrderNumber;
    }

    /**
     * Returns Customs.
     * The Customs type is mandatory for non-EU shipments and not allowed for any other shipment types.
     */
    public function getCustoms(): ?Customs
    {
        return $this->customs;
    }

    /**
     * Sets Customs.
     * The Customs type is mandatory for non-EU shipments and not allowed for any other shipment types.
     *
     * @maps Customs
     */
    public function setCustoms(?Customs $customs): void
    {
        $this->customs = $customs;
    }

    /**
     * Returns Delivery Address.
     * Delivery address specification. This field is mandatory when AddressType on the Address is 09.
     */
    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    /**
     * Sets Delivery Address.
     * Delivery address specification. This field is mandatory when AddressType on the Address is 09.
     *
     * @maps DeliveryAddress
     */
    public function setDeliveryAddress(?string $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * Returns Delivery Date.
     * Mandatory when using Mailbox Parcels (for generation of the coding rule) and delivery options like
     * Evening/Morning/Sameday delivery etc.
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     * Mandatory when using Mailbox Parcels (for generation of the coding rule) and delivery options like
     * Evening/Morning/Sameday delivery etc.
     *
     * @maps DeliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Dimension.
     * Note: Length, Width, Height values are about the order of the size and need to be filled in from the
     * longest to the shortest value. For example: shipment's official height is 700mm, width 500mm, length
     * 300mm. The longest side (highest value) of 700mm needs to be entered at Length. Width value becomes
     * 500mm, Height value: 300mm (the lowest). Entering the dimensions in the wrong order may result in
     * incorrect shipping labels and longer delivery times. The maximum dimensions can be found in your
     * PostNL contract.
     */
    public function getDimension(): Dimension
    {
        return $this->dimension;
    }

    /**
     * Sets Dimension.
     * Note: Length, Width, Height values are about the order of the size and need to be filled in from the
     * longest to the shortest value. For example: shipment's official height is 700mm, width 500mm, length
     * 300mm. The longest side (highest value) of 700mm needs to be entered at Length. Width value becomes
     * 500mm, Height value: 300mm (the lowest). Entering the dimensions in the wrong order may result in
     * incorrect shipping labels and longer delivery times. The maximum dimensions can be found in your
     * PostNL contract.
     *
     * @required
     * @maps Dimension
     */
    public function setDimension(Dimension $dimension): void
    {
        $this->dimension = $dimension;
    }

    /**
     * Returns Down Partner Barcode.
     * Barcode of the downstream network partner of PostNL Parcels. Madatory for requesting Parcels Non-EU
     * combilabel product codes.
     */
    public function getDownPartnerBarcode(): ?string
    {
        return $this->downPartnerBarcode;
    }

    /**
     * Sets Down Partner Barcode.
     * Barcode of the downstream network partner of PostNL Parcels. Madatory for requesting Parcels Non-EU
     * combilabel product codes.
     *
     * @maps DownPartnerBarcode
     */
    public function setDownPartnerBarcode(?string $downPartnerBarcode): void
    {
        $this->downPartnerBarcode = $downPartnerBarcode;
    }

    /**
     * Returns Down Partner ID.
     * Identification of the downstream network partner of PostNL Pakketten.
     */
    public function getDownPartnerID(): ?string
    {
        return $this->downPartnerID;
    }

    /**
     * Sets Down Partner ID.
     * Identification of the downstream network partner of PostNL Pakketten.
     *
     * @maps DownPartnerID
     */
    public function setDownPartnerID(?string $downPartnerID): void
    {
        $this->downPartnerID = $downPartnerID;
    }

    /**
     * Returns Down Partner Location.
     * Identification of the location of the downstream network partner of PostNL Pakketten.
     */
    public function getDownPartnerLocation(): ?string
    {
        return $this->downPartnerLocation;
    }

    /**
     * Sets Down Partner Location.
     * Identification of the location of the downstream network partner of PostNL Pakketten.
     *
     * @maps DownPartnerLocation
     */
    public function setDownPartnerLocation(?string $downPartnerLocation): void
    {
        $this->downPartnerLocation = $downPartnerLocation;
    }

    /**
     * Returns Groups.
     * List of 0 or more Group types with data, grouping multiple shipments together. Mandatory for
     * multicollo shipments. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-
     * endpoints/send-track/labelling/guidelines) (Multiple shipments) for more information.
     *
     * @return Group[]|null
     */
    public function getGroups(): ?array
    {
        return $this->groups;
    }

    /**
     * Sets Groups.
     * List of 0 or more Group types with data, grouping multiple shipments together. Mandatory for
     * multicollo shipments. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-
     * endpoints/send-track/labelling/guidelines) (Multiple shipments) for more information.
     *
     * @maps Groups
     *
     * @param Group[]|null $groups
     */
    public function setGroups(?array $groups): void
    {
        $this->groups = $groups;
    }

    /**
     * Returns Hazardous Material.
     * Array of hazardous materials contained in the shipment
     *
     * @return HazardousMaterial[]|null
     */
    public function getHazardousMaterial(): ?array
    {
        return $this->hazardousMaterial;
    }

    /**
     * Sets Hazardous Material.
     * Array of hazardous materials contained in the shipment
     *
     * @maps HazardousMaterial
     *
     * @param HazardousMaterial[]|null $hazardousMaterial
     */
    public function setHazardousMaterial(?array $hazardousMaterial): void
    {
        $this->hazardousMaterial = $hazardousMaterial;
    }

    /**
     * Returns Product Code Collect.
     * Deprecated. Collection product code of a shipment.
     */
    public function getProductCodeCollect(): ?string
    {
        return $this->productCodeCollect;
    }

    /**
     * Sets Product Code Collect.
     * Deprecated. Collection product code of a shipment.
     *
     * @maps ProductCodeCollect
     */
    public function setProductCodeCollect(?string $productCodeCollect): void
    {
        $this->productCodeCollect = $productCodeCollect;
    }

    /**
     * Returns Product Code Delivery.
     * Product code of the shipment. See the [Products page](https://developer.postnl.
     * nl/docs/#/http/reference-data/product-codes-dutch-domestic) for possible products.
     */
    public function getProductCodeDelivery(): string
    {
        return $this->productCodeDelivery;
    }

    /**
     * Sets Product Code Delivery.
     * Product code of the shipment. See the [Products page](https://developer.postnl.
     * nl/docs/#/http/reference-data/product-codes-dutch-domestic) for possible products.
     *
     * @required
     * @maps ProductCodeDelivery
     */
    public function setProductCodeDelivery(string $productCodeDelivery): void
    {
        $this->productCodeDelivery = $productCodeDelivery;
    }

    /**
     * Returns Product Options.
     * Product options for the shipment, mandatory for certain products, see the [Products page](https:
     * //developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic).
     *
     * @return ProductOption[]|null
     */
    public function getProductOptions(): ?array
    {
        return $this->productOptions;
    }

    /**
     * Sets Product Options.
     * Product options for the shipment, mandatory for certain products, see the [Products page](https:
     * //developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic).
     *
     * @maps ProductOptions
     *
     * @param ProductOption[]|null $productOptions
     */
    public function setProductOptions(?array $productOptions): void
    {
        $this->productOptions = $productOptions;
    }

    /**
     * Returns Receiver Date of Birth.
     * Date of birth. Mandatory for Age check products
     */
    public function getReceiverDateOfBirth(): ?string
    {
        return $this->receiverDateOfBirth;
    }

    /**
     * Sets Receiver Date of Birth.
     * Date of birth. Mandatory for Age check products
     *
     * @maps ReceiverDateOfBirth
     */
    public function setReceiverDateOfBirth(?string $receiverDateOfBirth): void
    {
        $this->receiverDateOfBirth = $receiverDateOfBirth;
    }

    /**
     * Returns Reference.
     * Your own reference of the shipment. Mandatory for Extra@Home shipments; for E@H this is used to
     * create your order number, so this should be unique for each request.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * Your own reference of the shipment. Mandatory for Extra@Home shipments; for E@H this is used to
     * create your order number, so this should be unique for each request.
     *
     * @maps Reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Reference Collect.
     * Additional reference of the collect order of the shipment
     */
    public function getReferenceCollect(): ?string
    {
        return $this->referenceCollect;
    }

    /**
     * Sets Reference Collect.
     * Additional reference of the collect order of the shipment
     *
     * @maps ReferenceCollect
     */
    public function setReferenceCollect(?string $referenceCollect): void
    {
        $this->referenceCollect = $referenceCollect;
    }

    /**
     * Returns Remark.
     * Remark of the shipment.
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Sets Remark.
     * Remark of the shipment.
     *
     * @maps Remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * Returns Return Barcode.
     * Return barcode of the shipment. PostNL will provide you with a separate customer code specifically
     * for generating the returnBarcode. Mandatory for Label in the Box (return label) shipments.
     */
    public function getReturnBarcode(): ?string
    {
        return $this->returnBarcode;
    }

    /**
     * Sets Return Barcode.
     * Return barcode of the shipment. PostNL will provide you with a separate customer code specifically
     * for generating the returnBarcode. Mandatory for Label in the Box (return label) shipments.
     *
     * @maps ReturnBarcode
     */
    public function setReturnBarcode(?string $returnBarcode): void
    {
        $this->returnBarcode = $returnBarcode;
    }

    /**
     * Returns Return Reference.
     * Return reference of the shipment
     */
    public function getReturnReference(): ?string
    {
        return $this->returnReference;
    }

    /**
     * Sets Return Reference.
     * Return reference of the shipment
     *
     * @maps ReturnReference
     */
    public function setReturnReference(?string $returnReference): void
    {
        $this->returnReference = $returnReference;
    }

    /**
     * Returns Timeslot ID.
     * Deprecated. ID of the chosen timeslot as returned by the timeslot webservice
     */
    public function getTimeslotID(): ?string
    {
        return $this->timeslotID;
    }

    /**
     * Sets Timeslot ID.
     * Deprecated. ID of the chosen timeslot as returned by the timeslot webservice
     *
     * @maps TimeslotID
     */
    public function setTimeslotID(?string $timeslotID): void
    {
        $this->timeslotID = $timeslotID;
    }

    /**
     * Returns Extra Fields.
     * Possibility to provide extra key-value pairs to the webservice. Not used at the moment.
     *
     * @return ExtraField[]|null
     */
    public function getExtraFields(): ?array
    {
        return $this->extraFields;
    }

    /**
     * Sets Extra Fields.
     * Possibility to provide extra key-value pairs to the webservice. Not used at the moment.
     *
     * @maps ExtraFields
     *
     * @param ExtraField[]|null $extraFields
     */
    public function setExtraFields(?array $extraFields): void
    {
        $this->extraFields = $extraFields;
    }

    /**
     * Converts the LabellingCustomerShipment object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingCustomerShipment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingCustomerShipment',
            [
                'addresses' => $this->addresses,
                'amounts' => $this->amounts,
                'barcode' => $this->barcode,
                'codingText' => $this->codingText,
                'collectionTimeStampStart' => $this->collectionTimeStampStart,
                'collectionTimeStampEnd' => $this->collectionTimeStampEnd,
                'contacts' => $this->contacts,
                'content' => $this->content,
                'costCenter' => $this->costCenter,
                'customerOrderNumber' => $this->customerOrderNumber,
                'customs' => $this->customs,
                'deliveryAddress' => $this->deliveryAddress,
                'deliveryDate' => $this->deliveryDate,
                'dimension' => $this->dimension,
                'downPartnerBarcode' => $this->downPartnerBarcode,
                'downPartnerID' => $this->downPartnerID,
                'downPartnerLocation' => $this->downPartnerLocation,
                'groups' => $this->groups,
                'hazardousMaterial' => $this->hazardousMaterial,
                'productCodeCollect' => $this->productCodeCollect,
                'productCodeDelivery' => $this->productCodeDelivery,
                'productOptions' => $this->productOptions,
                'receiverDateOfBirth' => $this->receiverDateOfBirth,
                'reference' => $this->reference,
                'referenceCollect' => $this->referenceCollect,
                'remark' => $this->remark,
                'returnBarcode' => $this->returnBarcode,
                'returnReference' => $this->returnReference,
                'timeslotID' => $this->timeslotID,
                'extraFields' => $this->extraFields
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['Addresses']                    = $this->addresses;
        if (isset($this->amounts)) {
            $json['Amounts']                  = $this->amounts;
        }
        $json['Barcode']                      = $this->barcode;
        if (isset($this->codingText)) {
            $json['CodingText']               = $this->codingText;
        }
        if (isset($this->collectionTimeStampStart)) {
            $json['CollectionTimeStampStart'] = $this->collectionTimeStampStart;
        }
        if (isset($this->collectionTimeStampEnd)) {
            $json['CollectionTimeStampEnd']   = $this->collectionTimeStampEnd;
        }
        if (isset($this->contacts)) {
            $json['Contacts']                 = $this->contacts;
        }
        if (isset($this->content)) {
            $json['Content']                  = $this->content;
        }
        if (isset($this->costCenter)) {
            $json['CostCenter']               = $this->costCenter;
        }
        if (isset($this->customerOrderNumber)) {
            $json['CustomerOrderNumber']      = $this->customerOrderNumber;
        }
        if (isset($this->customs)) {
            $json['Customs']                  = $this->customs;
        }
        if (isset($this->deliveryAddress)) {
            $json['DeliveryAddress']          = $this->deliveryAddress;
        }
        if (isset($this->deliveryDate)) {
            $json['DeliveryDate']             = $this->deliveryDate;
        }
        $json['Dimension']                    = $this->dimension;
        if (isset($this->downPartnerBarcode)) {
            $json['DownPartnerBarcode']       = $this->downPartnerBarcode;
        }
        if (isset($this->downPartnerID)) {
            $json['DownPartnerID']            = $this->downPartnerID;
        }
        if (isset($this->downPartnerLocation)) {
            $json['DownPartnerLocation']      = $this->downPartnerLocation;
        }
        if (isset($this->groups)) {
            $json['Groups']                   = $this->groups;
        }
        if (isset($this->hazardousMaterial)) {
            $json['HazardousMaterial']        = $this->hazardousMaterial;
        }
        if (isset($this->productCodeCollect)) {
            $json['ProductCodeCollect']       = $this->productCodeCollect;
        }
        $json['ProductCodeDelivery']          = $this->productCodeDelivery;
        if (isset($this->productOptions)) {
            $json['ProductOptions']           = $this->productOptions;
        }
        if (isset($this->receiverDateOfBirth)) {
            $json['ReceiverDateOfBirth']      = $this->receiverDateOfBirth;
        }
        if (isset($this->reference)) {
            $json['Reference']                = $this->reference;
        }
        if (isset($this->referenceCollect)) {
            $json['ReferenceCollect']         = $this->referenceCollect;
        }
        if (isset($this->remark)) {
            $json['Remark']                   = $this->remark;
        }
        if (isset($this->returnBarcode)) {
            $json['ReturnBarcode']            = $this->returnBarcode;
        }
        if (isset($this->returnReference)) {
            $json['ReturnReference']          = $this->returnReference;
        }
        if (isset($this->timeslotID)) {
            $json['TimeslotID']               = $this->timeslotID;
        }
        if (isset($this->extraFields)) {
            $json['ExtraFields']              = $this->extraFields;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
