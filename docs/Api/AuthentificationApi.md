# Fei\Gael\AuthentificationApi

All URIs are relative to https://gael-preprod.france-education-international.fr/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**login()**](AuthentificationApi.md#login) | **POST** /login | Log in Gael


## `login()`

```php
login($userNamePassword): \Fei\Gael\Model\ResponseToken
```

Log in Gael

Permet de récupérer un token à utiliser pour les autres appels. Selon le compte utilisé (username, mot de passe), tous les appels ne seront pas authorisés.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Fei\Gael\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fei\Gael\Api\AuthentificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userNamePassword = array(new \Fei\Gael\Model\UserNamePassword()); // \Fei\Gael\Model\UserNamePassword[] | username et mot de passe pour se loguer dans GAEL

try {
    $result = $apiInstance->login($userNamePassword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthentificationApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userNamePassword** | [**\Fei\Gael\Model\UserNamePassword[]**](../Model/UserNamePassword.md)| username et mot de passe pour se loguer dans GAEL |

### Return type

[**\Fei\Gael\Model\ResponseToken**](../Model/ResponseToken.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
