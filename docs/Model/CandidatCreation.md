# # CandidatCreation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**civilite** | [**\Fei\Gael\Model\Civilite**](Civilite.md) |  | [optional]
**nom** | **string** | Nom de famille du candidat |
**patronyme** | **string** | Patronyme du candidat | [optional]
**prenom** | **string** | Prénom du candidat | [optional]
**dateNaissance** | [**\DateTime**](\DateTime.md) | date de naissance du candidat | [optional]
**anneeNaissance** | **int** | l&#39;année de naissance du candidat si sa date de naissance n&#39;est pas connue | [optional]
**anneeNaissanceInconnue** | **bool** | si le candidat ne connait ni sa date, ni son année de naissance, ce flag doit être à true | [optional]
**paysNaissance** | [**\Fei\Gael\Model\Pays**](Pays.md) |  |
**villeNaissance** | **string** | Ville de naissance du candidat |
**nationalite1** | [**\Fei\Gael\Model\Nationalite**](Nationalite.md) |  |
**nationalite2** | [**\Fei\Gael\Model\Nationalite**](Nationalite.md) |  | [optional]
**langueMaternelle** | [**\Fei\Gael\Model\Langue**](Langue.md) |  |
**adresse1** | [**\Fei\Gael\Model\AdressePostale**](AdressePostale.md) |  | [optional]
**adresse2** | [**\Fei\Gael\Model\AdressePostale**](AdressePostale.md) |  | [optional]
**telephone1** | [**\Fei\Gael\Model\Telephone**](Telephone.md) |  | [optional]
**telephone2** | [**\Fei\Gael\Model\Telephone**](Telephone.md) |  | [optional]
**courriel** | **string** | Un email de contact du candidat | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
