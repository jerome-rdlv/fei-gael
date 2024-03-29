<?php
/**
 * MotifInscription
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
 * OpenAPI Generator version: 6.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fei\Gael\Model;
use \Fei\Gael\ObjectSerializer;

/**
 * MotifInscription Class Doc Comment
 *
 * @category Class
 * @description motif de l&#39;inscription du candidat * &#x60;ECOL&#x60; - Ecole/études dans le pays d’origine * &#x60;ETFR&#x60; - Mobilité étudiante vers la France * &#x60;ETAU&#x60; - Mobilité étudiante vers d’autres pays francophones * &#x60;ACNA&#x60; - Acquisition de la nationalité * &#x60;PROF&#x60; - Besoins professionnels * &#x60;MIFR&#x60; - Projet de migration vers la France * &#x60;MIAU&#x60; - Projet de migration vers d’autres pays francophones * &#x60;PERS&#x60; - Motivation personnelle
 * @package  Fei\Gael
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MotifInscription
{
    /**
     * Possible values of this enum
     */
    const ECOL = 'ECOL';
    const ETFR = 'ETFR';
    const ETAU = 'ETAU';
    const ACNA = 'ACNA';
    const PROF = 'PROF';
    const MIFR = 'MIFR';
    const MIAU = 'MIAU';
    const PERS = 'PERS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ECOL,
            self::ETFR,
            self::ETAU,
            self::ACNA,
            self::PROF,
            self::MIFR,
            self::MIAU,
            self::PERS,
        ];
    }
}


