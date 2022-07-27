# core-interfaces-php
Definition of the behavior of core-lib-php, unirest-php and Apimatic's PHP SDK.

## Interfaces
| Name                                                                    | Description                                                        |
|-------------------------------------------------------------------------|--------------------------------------------------------------------|
| [`Convertable`](src/Core/Convertable.php)                               | To be implemented by the classes that needed conversion            |
| [`ContextInterface`](src/Core/ContextInterface.php)                     | To save both Request and Response after the completion of response |
| [`CoreExceptionInterface`](src/Core/CoreExceptionInterface.php)         | To throw exceptions from CoreLib                                   |
| [`AuthInterface`](src/Core/Authentication/AuthInterface.php)            | To Provide abstraction for all AuthManagers                        |
| [`RequestInterface`](src/Core/Request/RequestInterface.php)             | To get the properties from the instance of Request                 |
| [`RequestSetterInterface`](src/Core/Request/RequestSetterInterface.php) | To update the instance of Request                                  |
| [`ParamInterface`](src/Core/Request/ParamInterface.php)                 | To Provide abstraction for common functionality of Parameters      |
| [`TypeValidatorInterface`](src/Core/Request/TypeValidatorInterface.php) | To Provide abstraction for type validation in Parameters           |
| [`ResponseInterface`](src/Core/Response/ResponseInterface.php)          | To get the properties from the instance of Response                |
| [`HttpConfigurations`](src/Http/HttpConfigurations.php)                 | To hold the default configurations for HttpClient                  |
| [`HttpClientInterface`](src/Http/HttpClientInterface.php)               | To provide abstraction to execute API call in HttpClient           |
| [`ConverterInterface`](src/Sdk/ConverterInterface.php)                  | Holds required converter methods to create SDK classes             |
| [`ExceptionInterface`](src/Sdk/ExceptionInterface.php)                  | Default interface for all the exception models in SDK              |

## Enumerations
| Name                                                                          | Description                                     |
|-------------------------------------------------------------------------------|-------------------------------------------------|
| [`AuthGroup`](src/Core/Authentication/AuthGroup.php)                          | Enumeration for multiple Auth groups            |
| [`RequestArraySerialization`](src/Core/Request/RequestArraySerialization.php) | Enumeration for all ArraySerialization formats  |
| [`RequestMethod`](src/Core/Request/RequestMethod.php)                         | Enumeration for all possible types of requests  |
| [`BodyFormat`](src/Core/BodyFormat.php)                                       | Enumeration for different formats of responses  |
| [`RetryOption`](src/Http/RetryOption.php)                                     | Enumeration for RetryingOption of each API call |
