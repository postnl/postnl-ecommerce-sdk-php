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

class CustomerAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string|null
     */
    private $area;

    /**
     * @var string|null
     */
    private $buildingname;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string|null
     */
    private $companyName;

    /**
     * @var string
     */
    private $countrycode;

    /**
     * @var string|null
     */
    private $department;

    /**
     * @var string|null
     */
    private $doorcode;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $floor;

    /**
     * @var string|null
     */
    private $houseNr;

    /**
     * @var string|null
     */
    private $houseNrExt;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string|null
     */
    private $street;

    /**
     * @var string|null
     */
    private $streetHouseNrExt;

    /**
     * @var string|null
     */
    private $zipcode;

    /**
     * @param string $addressType
     * @param string $city
     * @param string $countrycode
     */
    public function __construct(string $addressType, string $city, string $countrycode)
    {
        $this->addressType = $addressType;
        $this->city = $city;
        $this->countrycode = $countrycode;
    }

    /**
     * Returns Address Type.
     * Address 02 is mandatory. It can either be placed in the Customer segment or in the Shipment segment.
     * Note that if you put it in the Shipment segment, it should go into all Shipment segments.
     */
    public function getAddressType(): string
    {
        return $this->addressType;
    }

    /**
     * Sets Address Type.
     * Address 02 is mandatory. It can either be placed in the Customer segment or in the Shipment segment.
     * Note that if you put it in the Shipment segment, it should go into all Shipment segments.
     *
     * @required
     * @maps AddressType
     */
    public function setAddressType(string $addressType): void
    {
        $this->addressType = $addressType;
    }

    /**
     * Returns Area.
     * Area of the address
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * Sets Area.
     * Area of the address
     *
     * @maps Area
     */
    public function setArea(?string $area): void
    {
        $this->area = $area;
    }

    /**
     * Returns Buildingname.
     * Building name of the address
     */
    public function getBuildingname(): ?string
    {
        return $this->buildingname;
    }

    /**
     * Sets Buildingname.
     * Building name of the address
     *
     * @maps Buildingname
     */
    public function setBuildingname(?string $buildingname): void
    {
        $this->buildingname = $buildingname;
    }

    /**
     * Returns City.
     * City of the address
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City of the address
     *
     * @required
     * @maps City
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns Company Name.
     * This field has a dependency with the field Name. One of both fields must be filled mandatory; using
     * both fields is also allowed. Mandatory when AddressType is 09.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     * This field has a dependency with the field Name. One of both fields must be filled mandatory; using
     * both fields is also allowed. Mandatory when AddressType is 09.
     *
     * @maps CompanyName
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns Countrycode.
     * The ISO2 country codes
     */
    public function getCountrycode(): string
    {
        return $this->countrycode;
    }

    /**
     * Sets Countrycode.
     * The ISO2 country codes
     *
     * @required
     * @maps Countrycode
     */
    public function setCountrycode(string $countrycode): void
    {
        $this->countrycode = $countrycode;
    }

    /**
     * Returns Department.
     * Send to specific department of a company
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * Sets Department.
     * Send to specific department of a company
     *
     * @maps Department
     */
    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    /**
     * Returns Doorcode.
     * Door code of address. Mandatory for some international shipments.
     */
    public function getDoorcode(): ?string
    {
        return $this->doorcode;
    }

    /**
     * Sets Doorcode.
     * Door code of address. Mandatory for some international shipments.
     *
     * @maps Doorcode
     */
    public function setDoorcode(?string $doorcode): void
    {
        $this->doorcode = $doorcode;
    }

    /**
     * Returns First Name.
     * Remark: please add FirstName and Name (lastname) of the receiver to improve the parcel tracking
     * experience of your customer.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * Remark: please add FirstName and Name (lastname) of the receiver to improve the parcel tracking
     * experience of your customer.
     *
     * @maps FirstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Floor.
     * Send to specific floor of a company
     */
    public function getFloor(): ?string
    {
        return $this->floor;
    }

    /**
     * Sets Floor.
     * Send to specific floor of a company
     *
     * @maps Floor
     */
    public function setFloor(?string $floor): void
    {
        $this->floor = $floor;
    }

    /**
     * Returns House Nr.
     * Mandatory for shipments to Benelux. Max. length is 5 characters (only for Benelux addresses). For
     * Benelux addresses,this field should always be numeric.
     */
    public function getHouseNr(): ?string
    {
        return $this->houseNr;
    }

    /**
     * Sets House Nr.
     * Mandatory for shipments to Benelux. Max. length is 5 characters (only for Benelux addresses). For
     * Benelux addresses,this field should always be numeric.
     *
     * @maps HouseNr
     */
    public function setHouseNr(?string $houseNr): void
    {
        $this->houseNr = $houseNr;
    }

    /**
     * Returns House Nr Ext.
     * House number extension
     */
    public function getHouseNrExt(): ?string
    {
        return $this->houseNrExt;
    }

    /**
     * Sets House Nr Ext.
     * House number extension
     *
     * @maps HouseNrExt
     */
    public function setHouseNrExt(?string $houseNrExt): void
    {
        $this->houseNrExt = $houseNrExt;
    }

    /**
     * Returns Name.
     * Last name of person. This field has a dependency with the field CompanyName. One of both fields must
     * be filled mandatory; using both fields is also allowed. Remark: please add FirstName and Name
     * (lastname) of the receiver to improve the parcel tracking experience of your customer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Last name of person. This field has a dependency with the field CompanyName. One of both fields must
     * be filled mandatory; using both fields is also allowed. Remark: please add FirstName and Name
     * (lastname) of the receiver to improve the parcel tracking experience of your customer.
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Region.
     * Region of the address
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Sets Region.
     * Region of the address
     *
     * @maps Region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    /**
     * Returns Street.
     * This field has a dependency with the field StreetHouseNrExt. One of both fields must be filled
     * mandatory; using both fields simultaneously is discouraged.
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Sets Street.
     * This field has a dependency with the field StreetHouseNrExt. One of both fields must be filled
     * mandatory; using both fields simultaneously is discouraged.
     *
     * @maps Street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    /**
     * Returns Street House Nr Ext.
     * Combination of Street, HouseNr and HouseNrExt. Please see [Guidelines](https://developer.postnl.
     * nl/docs/#/http/api-endpoints/send-track/confirming/guidelines) for the explanation.
     */
    public function getStreetHouseNrExt(): ?string
    {
        return $this->streetHouseNrExt;
    }

    /**
     * Sets Street House Nr Ext.
     * Combination of Street, HouseNr and HouseNrExt. Please see [Guidelines](https://developer.postnl.
     * nl/docs/#/http/api-endpoints/send-track/confirming/guidelines) for the explanation.
     *
     * @maps StreetHouseNrExt
     */
    public function setStreetHouseNrExt(?string $streetHouseNrExt): void
    {
        $this->streetHouseNrExt = $streetHouseNrExt;
    }

    /**
     * Returns Zipcode.
     * Zipcode of the address. Mandatory for shipments to Benelux. Max length (NL) 6 characters,(BE;LU) 4
     * numeric characters
     */
    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    /**
     * Sets Zipcode.
     * Zipcode of the address. Mandatory for shipments to Benelux. Max length (NL) 6 characters,(BE;LU) 4
     * numeric characters
     *
     * @maps Zipcode
     */
    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    /**
     * Converts the CustomerAddress object to a human-readable string representation.
     *
     * @return string The string representation of the CustomerAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomerAddress',
            [
                'addressType' => $this->addressType,
                'area' => $this->area,
                'buildingname' => $this->buildingname,
                'city' => $this->city,
                'companyName' => $this->companyName,
                'countrycode' => $this->countrycode,
                'department' => $this->department,
                'doorcode' => $this->doorcode,
                'firstName' => $this->firstName,
                'floor' => $this->floor,
                'houseNr' => $this->houseNr,
                'houseNrExt' => $this->houseNrExt,
                'name' => $this->name,
                'region' => $this->region,
                'street' => $this->street,
                'streetHouseNrExt' => $this->streetHouseNrExt,
                'zipcode' => $this->zipcode
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
        $json['AddressType']          = $this->addressType;
        if (isset($this->area)) {
            $json['Area']             = $this->area;
        }
        if (isset($this->buildingname)) {
            $json['Buildingname']     = $this->buildingname;
        }
        $json['City']                 = $this->city;
        if (isset($this->companyName)) {
            $json['CompanyName']      = $this->companyName;
        }
        $json['Countrycode']          = $this->countrycode;
        if (isset($this->department)) {
            $json['Department']       = $this->department;
        }
        if (isset($this->doorcode)) {
            $json['Doorcode']         = $this->doorcode;
        }
        if (isset($this->firstName)) {
            $json['FirstName']        = $this->firstName;
        }
        if (isset($this->floor)) {
            $json['Floor']            = $this->floor;
        }
        if (isset($this->houseNr)) {
            $json['HouseNr']          = $this->houseNr;
        }
        if (isset($this->houseNrExt)) {
            $json['HouseNrExt']       = $this->houseNrExt;
        }
        if (isset($this->name)) {
            $json['Name']             = $this->name;
        }
        if (isset($this->region)) {
            $json['Region']           = $this->region;
        }
        if (isset($this->street)) {
            $json['Street']           = $this->street;
        }
        if (isset($this->streetHouseNrExt)) {
            $json['StreetHouseNrExt'] = $this->streetHouseNrExt;
        }
        if (isset($this->zipcode)) {
            $json['Zipcode']          = $this->zipcode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
