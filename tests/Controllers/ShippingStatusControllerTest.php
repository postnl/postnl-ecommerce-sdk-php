<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Tests\Controllers;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use PostnlEcommerceLib\Controllers\ShippingStatusController;
use PostnlEcommerceLib\Exceptions;
use PostnlEcommerceLib\Models;

class ShippingStatusControllerTest extends BaseTestController
{
    /**
     * @var ShippingStatusController ShippingStatusController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getShippingStatusController();
    }

    public function testGetStatusByBarcode()
    {
        // Parameters for the API call
        $barcode = '3SDEVC172649258';
        $detail = false;
        $language = Models\LanguageEnum::NL;
        $maxDays = '14';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getStatusByBarcode($barcode, $detail, $language, $maxDays)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"CurrentStatus":{"Shipment":{"MainBarcode":"3SDEVC288882229","Barcode":"3SDEV' .
                'C288882229","ShipmentAmount":"1","ShipmentCounter":"1","Customer":{"CustomerCod' .
                'e":"DEVC","CustomerNumber":"11223344","Name":"Testaccount API PNP"},"ProductCod' .
                'e":"002285","ProductDescription":"Parcels, domestic &lt;= 10 kg","Reference":"2' .
                '02213331635095807","DeliveryDate":"2022-11-08","Dimension":{"Height":"125","Len' .
                'gth":"250","Volume":"6250","Weight":"180","Width":"200"},"Address":[{"AddressTy' .
                'pe":"01","Building":"{}","City":"Utrecht","CompanyName":"{}","CountryCode":"NL"' .
                ',"DepartmentName":"{}","District":"{}","FirstName":"Peter","Floor":"{}","HouseN' .
                'umber":"74","HouseNumberSuffix":"{}","LastName":"de Ruiter","Region":"{}","Rema' .
                'rk":"{}","Street":"Molengraaffplantsoen","Zipcode":"3571ZZ"},{"AddressType":"02' .
                '","Building":"{}","City":"Hoofddorp","CompanyName":"PostNL Pakketten","CountryC' .
                'ode":"NL","DepartmentName":"{}","District":"{}","FirstName":"{}","Floor":"{}","' .
                'HouseNumber":"42","HouseNumberSuffix":"-60","LastName":"{}","Region":"{}","Rema' .
                'rk":"{}","Street":"Siriusdreef","Zipcode":"2132WT"}],"ProductOptions":[{"Option' .
                'Code":"6","CharacteristicCode":"118"}],"Status":{"TimeStamp":"08-11-2022 10:13:' .
                '20","StatusCode":"7","StatusDescription":"Shipment out for delivery","PhaseCode' .
                '":"3","PhaseDescription":"Distribution"}}}}'
            )))
            ->assert();
    }

    public function testGetStatusByReference()
    {
        // Parameters for the API call
        $customerCode = 'DEVC';
        $customerNumber = '11223344';
        $referenceId = 'REF-12345';
        $detail = false;
        $language = Models\LanguageEnum::NL;
        $maxDays = '14';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getStatusByReference(
                $customerCode,
                $customerNumber,
                $referenceId,
                $detail,
                $language,
                $maxDays
            )->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"CurrentStatus":{"Shipment":{"MainBarcode":"3SDEVC288882229","Barcode":"3SDEV' .
                'C288882229","ShipmentAmount":"1","ShipmentCounter":"1","Customer":{"CustomerCod' .
                'e":"DEVC","CustomerNumber":"11223344","Name":"Testaccount API PNP"},"ProductCod' .
                'e":"002285","ProductDescription":"Parcels, domestic &lt;= 10 kg","Reference":"2' .
                '02213331635095807","DeliveryDate":"2022-11-08","Dimension":{"Height":"125","Len' .
                'gth":"250","Volume":"6250","Weight":"180","Width":"200"},"Address":[{"AddressTy' .
                'pe":"01","Building":"{}","City":"Utrecht","CompanyName":"{}","CountryCode":"NL"' .
                ',"DepartmentName":"{}","District":"{}","FirstName":"Peter","Floor":"{}","HouseN' .
                'umber":"74","HouseNumberSuffix":"{}","LastName":"de Ruiter","Region":"{}","Rema' .
                'rk":"{}","Street":"Molengraaffplantsoen","Zipcode":"3571ZZ"},{"AddressType":"02' .
                '","Building":"{}","City":"Hoofddorp","CompanyName":"PostNL Pakketten","CountryC' .
                'ode":"NL","DepartmentName":"{}","District":"{}","FirstName":"{}","Floor":"{}","' .
                'HouseNumber":"42","HouseNumberSuffix":"-60","LastName":"{}","Region":"{}","Rema' .
                'rk":"{}","Street":"Siriusdreef","Zipcode":"2132WT"}],"ProductOptions":[{"Option' .
                'Code":"6","CharacteristicCode":"118"}],"Status":{"TimeStamp":"08-11-2022 10:13:' .
                '20","StatusCode":"7","StatusDescription":"Shipment out for delivery","PhaseCode' .
                '":"3","PhaseDescription":"Distribution"}}}}'
            )))
            ->assert();
    }

    public function testGetShipmentSignature()
    {
        // Parameters for the API call
        $barcode = '3SDEVC172649258';

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getShipmentSignature($barcode)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"Signature":{"Barcode":"3SDEVC317858754","SignatureDate":"2022-11-07T19:28:16' .
                '","SignatureImage":"iVBORw0KGgoAAAANSUhEUgAAAogAAAGTCAYAAACrs[TRUNCATED]"}}'
            )))
            ->assert();
    }

    public function testGetUpdatedStatusByCustomerNumber()
    {
        // Parameters for the API call
        $customernumber = '11223344';
        $period = TestParam::object('["2022-11-07T12:00:00.000","2022-11-07T12:05:00.000"]');

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getUpdatedStatusByCustomerNumber($customernumber, $period)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '[{"Barcode":"3SDEVC2260332157","CreationDate":"2022-11-07T00:00:00","CustomerN' .
                'umber":"11223344","CustomerCode":"DEVC","Status":{"Timestamp":"2022-11-08T02:17' .
                ':49","StatusCode":"5","StatusDescription":"Zending gesorteerd","PhaseCode":"2",' .
                '"PhaseDescription":"Sortering"}},{"Barcode":"3SDEVC775533088","CreationDate":"2' .
                '022-11-07T00:00:00","CustomerNumber":"11223344","CustomerCode":"DEVC","Status":' .
                '{"Timestamp":"2022-11-08T04:15:00","StatusCode":"13","StatusDescription":"Voorg' .
                'emeld: nog niet aangenomen","PhaseCode":"1","PhaseDescription":"Collectie"}},{"' .
                'Barcode":"3SDEVC563372025","CreationDate":"2022-11-07T00:00:00","CustomerNumber' .
                '":"11223344","CustomerCode":"DEVC","Status":{"Timestamp":"2022-11-08T04:15:00",' .
                '"StatusCode":"13","StatusDescription":"Voorgemeld: nog niet aangenomen","PhaseC' .
                'ode":"1","PhaseDescription":"Collectie"}},{"Barcode":"3SDEVC336510881","Creatio' .
                'nDate":"2022-11-08T00:00:00","CustomerNumber":"11223344","CustomerCode":"DEVC",' .
                '"Status":{"Timestamp":"2022-11-08T01:01:28","StatusCode":"1","StatusDescription' .
                '":"Zending voorgemeld","PhaseCode":"1","PhaseDescription":"Collectie"}}]'
            )))
            ->assert();
    }
}
