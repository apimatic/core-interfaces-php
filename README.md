# interfaces-php
Definition of the behavior of core-lib-php, unirest-php and Apimatic's PHP SDK

## Interfaces:

|Name|Description|
|---|---|
|CoreDesign\Core\ContextInterface|To save both Request and Response after the completion of response|
|CoreDesign\Core\CoreExceptionInterface|To throw exceptions from CoreLib|
|CoreDesign\Core\RequestInterface|To create and save the instance of Request|
|CoreDesign\Core\ResponseInterface|To create and save the instance of Response of the completion of API call|
|CoreDesign\Http\HttpConfigurations|To hold the default configurations for HttpClient|
|CoreDesign\Http\HttpClientInterface|To provide abstraction to execute API call in HttpClient|
|CoreDesign\Sdk\HttpClientInterface|To provide abstraction to execute API call in HttpClient|
