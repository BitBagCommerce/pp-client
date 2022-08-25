# pp-client
Poczta Polska SOAP client

Client description, prod/env, guid, error handling, response items

## Description

The aim of this repository is to provide a more consistent API than the official Poczta Polska WSDL file.

## Installing
You need to create a PPClient first
```php
$env = 'production'; // production or sandbox
$wsdlFile = 'production' === $env ? 'client_prod.wsdl' : 'client_dev.wsdl';
$config = new \BitBag\PPClient\Client\PPClientConfiguration(
    __DIR__ . "/../src/Resources/$wsdlFile",
    'login',
    'password'
);

$soapClientFactory = new \BitBag\PPClient\Factory\Client\SoapClientFactory();
$soapClient = $soapClientFactory->create($config);

$arrayNormalizer = new \BitBag\PPClient\Normalizer\ArrayNormalizer();

$ppClient = new \BitBag\PPClient\Client\PPClient(
    $soapClient,
    new \BitBag\PPClient\Factory\Response\AddDeliveryResponseFactory(),
    new \BitBag\PPClient\Factory\Response\ClearEnvelopeResponseFactory($arrayNormalizer),
    new \BitBag\PPClient\Factory\Response\GetLabelResponseFactory($arrayNormalizer),
    new \BitBag\PPClient\Factory\Response\SendEnvelopeResponseFactory($arrayNormalizer),
    new \BitBag\PPClient\Factory\Response\GetOriginOfficeResponseFactory()
);
```

## Setup

1. Install composer dependencies
```bash
$ composer install 
```

## Client methods
You have a few available methods in PPClient class:
- addDelivery
  - \BitBag\PPClient\Model\Request\DeliveryRequest
- addBusinessDelivery 
  - \BitBag\PPClient\Model\BusinessDelivery
  - \BitBag\PPClient\Model\Request\BusinessDeliveryRequest
- addPocztexDelivery
  - \BitBag\PPClient\Model\Request\PocztexDeliveryRequest
- getLabel
  - \BitBag\PPClient\Model\Request\LabelRequest
- sendEnvelope
  - \BitBag\PPClient\Model\Request\SendEnvelopeRequest
- clearEnvelope
- getOriginOffices

## Models

2. Request-response cycle

BusinessDeliveryRequest, DeliveryRequest, PocztexDeliveryRequest -> AddDeliveryResponse
LabelRequest -> GetLabelResponse
SendEnvelopeRequest -> SendEnvelopeResponse

getOriginOffices() GetOriginOfficeResponse

2. Models
Every model implements the SoapModelInterface. There you can see the "Polish" (WSDL) property names.

1. Delivery (przesylkaType)
   1. RecordedDelivery (przesylkaRejestrowanaType)
      1. PostalPackage (paczkaPocztowaType)
      2. CODDelivery (przesylkaPobraniowaType)
      3. Pocztex (pocztex2021Type)
      4. PocztexCourier (pocztex2021KurierType)
      5. BusinessDelivery (przesylkaBiznesowaType)
