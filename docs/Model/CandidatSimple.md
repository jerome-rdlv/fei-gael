# # CandidatSimple

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numero** | **string** | Numéro du candidat dans GAEL, unique. |
**nom** | **string** | Nom de famille du candidat |
**prenom** | **string** | Prénom du candidat | [optional]
**dateNaissance** | **\DateTime** | Date de naissance du candidat | [optional]
**anneeNaissance** | **int** | Année de naissance du candidat. Renseignée si elle est connue mais qu&#39;on ne connait pas la date exacte. | [optional]
**anneeNaissanceInconnue** | **bool** | Si le candidat ne connait ni sa date, ni son année de naissance, ce flag doit être à true | [optional]
**motif** | [**\Fei\Gael\Model\MotifInscription**](MotifInscription.md) |  | [optional]
**frais** | **float** |  | [optional]
**devise** | [**\Fei\Gael\Model\Devise**](Devise.md) |  | [optional]
**origine** | **string** | code du centre d&#39;origine / établissement partenaire / établissement affilié du candidat | [optional]
**reduction** | [**\Fei\Gael\Model\CritereReduction**](CritereReduction.md) |  | [optional]
**handicap** | **bool** | le candidat a un handicap ou non | [optional]
**amenagement** | [**\Fei\Gael\Model\Amenagement[]**](Amenagement.md) |  | [optional]
**dispenses** | [**\Fei\Gael\Model\EpreuveType[]**](EpreuveType.md) |  | [optional]
**resultats** | [**\Fei\Gael\Model\Resultat[]**](Resultat.md) | résultats du candidat à l&#39;examen | [optional]
**isAdmis** | **bool** | indique si le candidat a réussi son examen | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
