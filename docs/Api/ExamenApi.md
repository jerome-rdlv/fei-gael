# Fei\Gael\ExamenApi

All URIs are relative to https://gael-preprod.france-education-international.fr/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCandidatsToExamen()**](ExamenApi.md#addCandidatsToExamen) | **POST** /examen/inscription | Inscrit un ou plusieurs candidats à un même examen dans GAEL
[**addNewCandidats()**](ExamenApi.md#addNewCandidats) | **POST** /examen/addCandidats | Ajouter dans GAEL des candidats qui passent le DELF-DALF pour la première fois.
[**getCandidatsFromExamen()**](ExamenApi.md#getCandidatsFromExamen) | **GET** /examen/candidats | Récupère les candidats inscrits à un examen pour un centre.
[**uploadCandidatsResults()**](ExamenApi.md#uploadCandidatsResults) | **POST** /examen/resultat | Téléverser les résultats (notes et absences) des candidats dans GAEL


## `addCandidatsToExamen()`

```php
addCandidatsToExamen($inscriptions): \Fei\Gael\Model\ResponseBase
```

Inscrit un ou plusieurs candidats à un même examen dans GAEL

Fournir le code centre, la session et le niveau de l'examen et la liste des candidats à inscrire dans GAEL avec les informations obligatoires. * le numéro GAEL du candidat (unique dans GAEL) * les candidats doivent exister dans GAEL (pas de création) * un candidat sous sanction de fraude ne peut pas être inscrit * un candidat ne peut pas être inscrit à plusieurs sessions simultanément * l'examen doit exister dans GAEL * le centre doit être positionné sur cet examen

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Fei\Gael\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fei\Gael\Api\ExamenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inscriptions = new \Fei\Gael\Model\Inscriptions(); // \Fei\Gael\Model\Inscriptions | Identifiant de l'examen et liste des candidats et des informations d'inscription.

try {
    $result = $apiInstance->addCandidatsToExamen($inscriptions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamenApi->addCandidatsToExamen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inscriptions** | [**\Fei\Gael\Model\Inscriptions**](../Model/Inscriptions.md)| Identifiant de l&#39;examen et liste des candidats et des informations d&#39;inscription. |

### Return type

[**\Fei\Gael\Model\ResponseBase**](../Model/ResponseBase.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addNewCandidats()`

```php
addNewCandidats($inlineObject): \Fei\Gael\Model\CandidatCree[]
```

Ajouter dans GAEL des candidats qui passent le DELF-DALF pour la première fois.

Cette requête permet d'enregistrer dans GAEL des nouveaux candidats rattachés à un même centre en envoyant une liste contenant leurs états civils et optionnellement leurs coordonnées. GAEL renvoie le numéro de candidat associé à chaque candidat nouvellement créé. Ce numéro de candidat doit être sauvegardé par le SI appelant. Il peut être retrouvé par l'interface graphique de GAEL. Si GAEL détecte un doublon, c'est-à-dire un candidat qui a le même nom, prénom et date de naissance qu'un candidat déjà existant dans GAEL, cet ajout est refusé. Il faut alors passer par l'interface graphique de GAEL (gael.france-education-international.fr/).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Fei\Gael\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fei\Gael\Api\ExamenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inlineObject = new \Fei\Gael\Model\InlineObject(); // \Fei\Gael\Model\InlineObject

try {
    $result = $apiInstance->addNewCandidats($inlineObject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamenApi->addNewCandidats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inlineObject** | [**\Fei\Gael\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\Fei\Gael\Model\CandidatCree[]**](../Model/CandidatCree.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCandidatsFromExamen()`

```php
getCandidatsFromExamen($codeSession, $codeCentre, $niveau): \Fei\Gael\Model\CandidatSimple[]
```

Récupère les candidats inscrits à un examen pour un centre.

Fournir dans la requête : le code centre, la session et le niveau de l'examen. Chaque combinaison de ces 3 paramètres est unique dans GAEL, elle permet d'identifier exactement un examen dans un centre. GAEL renvoie en retour la liste des candidats inscrit à cet examen pour ce centre avec le détails de l'inscription. Cela permet de vérifier le résultats d'un appel à /examen/inscription ou de consulter la liste des candidats inscrits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Fei\Gael\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fei\Gael\Api\ExamenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$codeSession = 202209S; // string | Le code session pour laquelle on veut récupérer la liste des candidats
$codeCentre = 001015; // string | Le numéro du centre dans GAEL tel qu'affiché sur l'onglet 'Statut du centre'
$niveau = new \Fei\Gael\Model\\Fei\Gael\Model\NiveauExamen(); // \Fei\Gael\Model\NiveauExamen

try {
    $result = $apiInstance->getCandidatsFromExamen($codeSession, $codeCentre, $niveau);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamenApi->getCandidatsFromExamen: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codeSession** | **string**| Le code session pour laquelle on veut récupérer la liste des candidats |
 **codeCentre** | **string**| Le numéro du centre dans GAEL tel qu&#39;affiché sur l&#39;onglet &#39;Statut du centre&#39; |
 **niveau** | [**\Fei\Gael\Model\NiveauExamen**](../Model/.md)|  |

### Return type

[**\Fei\Gael\Model\CandidatSimple[]**](../Model/CandidatSimple.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadCandidatsResults()`

```php
uploadCandidatsResults($uploadedResults): \Fei\Gael\Model\ResponseBase
```

Téléverser les résultats (notes et absences) des candidats dans GAEL

Renseigne dans GAEL les résultats de un ou plusieurs candidats à un même examen dans un même centre.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Fei\Gael\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Fei\Gael\Api\ExamenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uploadedResults = new \Fei\Gael\Model\UploadedResults(); // \Fei\Gael\Model\UploadedResults | Le corp de la requête contient les éléments nécessaires pour identifier l'examen et le centre, ainsi que la liste des résultats des candidats pour cet examen. On y met chaque note, ainsi que les absences et dispenses éventuelles. * l'examen doit exister dans GAEL * le centre doit être positionner sur cet examen * les candidats doivent avoir été inscrits à cet examen

try {
    $result = $apiInstance->uploadCandidatsResults($uploadedResults);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExamenApi->uploadCandidatsResults: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uploadedResults** | [**\Fei\Gael\Model\UploadedResults**](../Model/UploadedResults.md)| Le corp de la requête contient les éléments nécessaires pour identifier l&#39;examen et le centre, ainsi que la liste des résultats des candidats pour cet examen. On y met chaque note, ainsi que les absences et dispenses éventuelles. * l&#39;examen doit exister dans GAEL * le centre doit être positionner sur cet examen * les candidats doivent avoir été inscrits à cet examen |

### Return type

[**\Fei\Gael\Model\ResponseBase**](../Model/ResponseBase.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
