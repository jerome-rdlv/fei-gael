<?php
/**
 * EpreuveType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Fei\Gael
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * GAEL API
 *
 * Ceci est l'API des web services exposés par le système informatique GAEL (Gestion Administrative En Ligne) pour France Éducation international.  Cette API offre les services suivants   * inscrire un ou plusieurs candidats à un examen  * importer dans GAEL les résultats d'un ou plusieurs candidats à un même examen
 *
 * The version of the OpenAPI document: 1.8.1
 * Contact: gael-api@france-education-international.fr
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fei\Gael\Model;
use \Fei\Gael\ObjectSerializer;

/**
 * EpreuveType Class Doc Comment
 *
 * @category Class
 * @description type de resultat * &#x60;CO&#x60; - Compréhension oral * &#x60;CE&#x60; - Compréhension écrite * &#x60;PO&#x60; - Production oral * &#x60;PE&#x60; - Production écrite * &#x60;EE&#x60; - Compréhension et production écrite * &#x60;EO&#x60; - Compréhension et productions orales * &#x60;TO&#x60; - Note globale * &#x60;FI&#x60; - Note finale après revalorisation du jury
 * @package  Fei\Gael
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EpreuveType
{
    /**
     * Possible values of this enum
     */
    const CO = 'CO';
    const CE = 'CE';
    const PO = 'PO';
    const PE = 'PE';
    const EE = 'EE';
    const EO = 'EO';
    const TO = 'TO';
    const FI = 'FI';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CO,
            self::CE,
            self::PO,
            self::PE,
            self::EE,
            self::EO,
            self::TO,
            self::FI,
        ];
    }
}

