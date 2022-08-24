# pp-client
Poczta Polska SOAP client

Client description, prod/env, guid, error handling, response items

## Description

The aim of this repository is to provide a more consistent API than the official Poczta Polska WSDL file.

## Installing
## Setup
## Client methods
## Models

2. Request-response cycle

BusinessDeliveryRequest, DeliveryRequest, PocztexDeliveryRequest -> AddDeliveryResponse
LabelRequest -> GetLabelResponse
SendEnvelopeRequest -> SendEnvelopeResponse

getOriginOffices() GetOriginOfficeResponse

2. Models
Every model implements the SoapModelInterface. There you can see the "Polish" (WSDL) property names.
>
1. Delivery (przesylkaType)
   1. RecordedDelivery (przesylkaRejestrowanaType)
      1. PostalPackage (paczkaPocztowaType)
      2. CODDelivery (przesylkaPobraniowaType)
      3. Pocztex (pocztex2021Type)
      4. PocztexCourier (pocztex2021KurierType)
      5. BusinessDelivery (przesylkaBiznesowaType)
