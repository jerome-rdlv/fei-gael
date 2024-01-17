# # CandidatCree

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isDoublon** | **bool** | True si GAEL a déjà un candidat avec le même nom, prénom et date/année de naissance, false si le candidat a été créé. Si à TRUE, le candidat n&#39;a pas été enregistré dans GAEL et le champs numeroCandidat de la réponse est nul. | [optional]
**numeroCandidat** | **string** | Numéro du candidat dans GAEL, unique. | [optional]
**nom** | **string** | Nom de famille du candidat | [optional]
**prenom** | **string** | Prénom du candidat | [optional]
**dateNaissance** | **\DateTime** | date de naissance du candidat | [optional]
**anneeNaissance** | **int** | l&#39;année de naissance du candidat si sa date de naissance n&#39;est pas connue | [optional]
**anneeNaissanceInconnue** | **bool** | si le candidat ne connait ni sa date, ni son année de naissance, ce flag doit être à true | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
