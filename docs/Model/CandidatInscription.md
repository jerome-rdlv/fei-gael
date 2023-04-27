# # CandidatInscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**numero** | **string** | Numéro du candidat dans GAEL, unique. |
**nom** | **string** | Nom du candidat. GAEL vérifie que le numéro de candidat et le nom fournit coïncident pour contrôler une mauvaise saisie |
**motif** | [**\Fei\Gael\Model\MotifInscription**](MotifInscription.md) |  | [optional]
**reduction** | [**\Fei\Gael\Model\CritereReduction**](CritereReduction.md) |  | [optional]
**origine** | **string** | Code centre du centre d&#39;origine / établissement affilié du candidat | [optional]
**handicap** | **bool** | True si le candidat a un handicap | [optional]
**amenagements** | [**\Fei\Gael\Model\Amenagement[]**](Amenagement.md) |  | [optional]
**dispenses** | [**\Fei\Gael\Model\EpreuveType[]**](EpreuveType.md) | Si le candidat est dispensé de passer certains types d&#39;épreuves, ces dernières sont listées ici. On ne peut pas être dispensé de toutes les épreuves. Par exemple, une personne malentendante peut être dispensée de la compréhension de l&#39;oral. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
