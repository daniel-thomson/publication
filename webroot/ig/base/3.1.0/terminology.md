# Terminology - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* **Terminology**

## Terminology

### ValueSets

These are ValueSets that have been defined in this guide for coded elements.

Each ValueSet resource has a globally unique url (the [Canonical](https://hl7.org/fhir/R4/references.html#canonical) url) that is used to unambiguously identify it. This url generally should resolve to the to the FHIR ValueSet resource, though the infrastructure to support this is not yet in place. There's a [specific note](https://hl7.org/fhir/R4/valueset.html#ident) in the spec on ValueSet identification.

The [FHIR spec](https://hl7.org/fhir/R4/terminology-module.html) has much more detail on the use of Terminology in FHIR.

| | | |
| :--- | :--- | :--- |
| ValueSet | Purpose | Canonical url |
| [ACC Patient Occupation](ValueSet-acc-patient-occupation.md) | ValueSet of codes for classifying patient occupations, drawn from the ACC codeset | https://nzhts.digital.health.nz/fhir/ValueSet/acc-patient-occupation-code |
| [Additional Practitioner authorisations](ValueSet-practitioner-additional-authorisation-code.md) | A coded type for additional authorisations | https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code |
| [Alias types](ValueSet-org-and-location-alias-type.md) | The complete set of alias types that apply to Locations and Organizations | https://nzhts.digital.health.nz/fhir/ValueSet/alias-type-code |
| [ContactPoint purpose](ValueSet-contact-point-purpose.md) | The purpose of a ContactPoint - what it is used for. | https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code |
| [Coverage Category](ValueSet-coverage-category.md) | New Zealand codes for Coverage category types | https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code |
| [Coverage Type](ValueSet-coverage-type-code.md) | New Zealand codes for Coverage Types | https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code |
| [Datum code](ValueSet-datumCode.md) | Datum codes used | https://nzhts.digital.health.nz/fhir/ValueSet/nz-datum-code |
| [Death date Information Source](ValueSet-dod-information-source-code.md) | The source from where the date of death was sourced. | https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code |
| [District Health Board Identifer](ValueSet-dhb.md) | District Health Board Identifer. Assigned by the HPI. | https://nzhts.digital.health.nz/fhir/ValueSet/dhb-code |
| [Domicile Code](ValueSet-domicile-code.md) | Domicile Code | https://nzhts.digital.health.nz/fhir/ValueSet/domicile-code |
| [Ethnicity of a person (L4)](ValueSet-ethnicity.md) | Codes to record a person's ethnicity, drawn from [Level 4 of the Ethnicity code system](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17) | https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code |
| [Ethnicity of a person (full)](ValueSet-Ethnicityfull.md) | Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. This ValueSet contains all levels of classification. | https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code |
| [Funded Programme](ValueSet-funded-programme.md) | Codes to describe NZ-specific types of funded programmes | https://nzhts.digital.health.nz/fhir/ValueSet/funded-programme-code |
| [Information Source](ValueSet-information-source.md) | The source from where the value of this item was sourced | https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code |
| [Iwi](ValueSet-iwi.md) | New Zealand iwi codes. The 2 digit codes are abstract codes and provided in the expansion for navigational purposes. Users should not select an abstract code directly as a proper value. | https://nzhts.digital.health.nz/fhir/ValueSet/iwi-code |
| [Māori descent](ValueSet-MaoriDescentValueset.md) | Codes indicating whether a person is of Māori descent | https://nzhts.digital.health.nz/fhir/ValueSet/maori-descent |
| [NZ Citizenship status](ValueSet-nz-citizenship-status-code.md) | Citizenship status | https://nzhts.digital.health.nz/fhir/ValueSet/nz-citizenship-status-code |
| [NZ Relationship Type](ValueSet-nz-relationship-type.md) | New Zealand relationship types, extending the HL7 related person relationship types with Māori concepts. | http://hl7.org.nz/fhir/ValueSet/nz-relationship-type |
| [NZ Residency status](ValueSet-nz-residency-code.md) | Is the person a NZ resident | https://nzhts.digital.health.nz/fhir/ValueSet/nz-residency-code |
| [PHO](ValueSet-pho.md) | Primary Healthcare Organization | https://nzhts.digital.health.nz/fhir/ValueSet/pho-code |
| [PractitionerRole status reason](ValueSet-hpi-practitionerrole-status-reason.md) | The reason for the current status of PractitionerRole | https://nzhts.digital.health.nz/fhir/ValueSet/hpi-practitioner-role-status-reason-code |
| [Registration Status of Practitioners](ValueSet-practitioner-registration-status-code.md) | The code list represents the current practicing status of the Provider Person as per their registration with an RA. | https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-registration-status-code |
| [Scope of practice](ValueSet-practitioner-scope-of-practice.md) | A coded type for professional scope of practice. | https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code |
| [Valid use values for NHI](ValueSet-nhi-use.md) | NHI Use codes | https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code |

### CodeSystems

These are code systems that have been defined in this guide. They define specific concepts that are included in ValueSets. It is preferable to use an international code system such as SNOMED, ICD or LOINC - but this is not always possible.

Each CodeSystem resource has a globally unique url (the canonical url) that is used to unambiguously identify it. The url generally refers to a description of the codesystem, rather than to the FHIR CodeSystem resource.

The [FHIR spec](https://hl7.org/fhir/R4/terminology-module.html) has much more detail on the use of Terminology in FHIR

| | | |
| :--- | :--- | :--- |
| CodeSystem | Purpose | Canonical url |
| [ACC Patient Occupation CodeSystem](CodeSystem-acc-patient-occupation-code.md) | Codes for classifying patient occupations, drawn from the ACC codeset | https://standards.digital.health.nz/ns/acc-patient-occupation-code |
| [Additional Authorisation](CodeSystem-practitioner-additional-authorisation.md) | Additional authorisations that a practitioner is authorised to practice or prescribe. | https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code |
| [ContactPoint purpose](CodeSystem-contact-point-purpose.md) | The purpose of a ContactPoint - what it is used for. | https://standards.digital.health.nz/ns/contact-point-purpose-code |
| [Coverage category](CodeSystem-coverage-category.md) | New Zealand codes for Coverage category types | https://standards.digital.health.nz/ns/coverage-category-code |
| [Coverage type](CodeSystem-coverage-type.md) | New Zealand codes for Coverage Types | https://standards.digital.health.nz/ns/coverage-type-code |
| [Datum codes](CodeSystem-datum-code.md) | Possible datum codes | https://standards.digital.health.nz/ns/nz-datum-code |
| [Domicile Code](CodeSystem-domicile-code.md) | Domicile codes | https://standards.digital.health.nz/ns/domicile-code |
| [Funded Programme](CodeSystem-funded-programme.md) | Codes to describe NZ-specific types of funded programmes | https://standards.digital.health.nz/ns/funded-programme-code |
| [Information Source](CodeSystem-information-source.md) | All possible sources of information | https://standards.digital.health.nz/ns/information-source-code |
| [Level 4 ethnicity codes](CodeSystem-ethnicityL4.md) | Codes to record a person’s ethnicity, drawn from Level 4 of the Ethnicity code system described [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17) | https://standards.digital.health.nz/ns/ethnic-group-level-4-code |
| [Māori descent codes](CodeSystem-maoridescentcode.md) | Codes for classifying Māori descent. Defined by Stats NZ - Māori descent v1.0.0 | https://standards.digital.health.nz/ns/maori-descent-code |
| [NZ Citizenship status](CodeSystem-citizenship-status.md) | Is this person a NZ Citizen | https://standards.digital.health.nz/ns/nz-citizenship-status-code |
| [NZ DHB](CodeSystem-dhb-code.md) | NZ District Health Board (HPI-ORG) Codes | https://standards.digital.health.nz/ns/dhb-code |
| [NZ Iwi](CodeSystem-iwi-code.md) | NZ iwi and iwi-related groups statistical classification | https://standards.digital.health.nz/ns/iwi-code |
| [NZ Relationship Type Code System](CodeSystem-nz-relationship-codes.md) | Code system for NZ relationship type codes. | http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes |
| [NZ Residency status](CodeSystem-nz-residency.md) | NZ Residency status | https://standards.digital.health.nz/ns/nz-residency-code |
| [NZ ethnic group codes](CodeSystem-Ethnicity.md) | Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. | https://standards.digital.health.nz/ns/nz-ethnic-group-codes |
| [PHO](CodeSystem-pho-status.md) | Primary Healthcare Organization | https://standards.digital.health.nz/ns/pho-code |
| [PractitionerRole status reason](CodeSystem-hpi-practitionerRole-status-reason.md) | The reason for the current status of PractitionerRole | https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code |
| [Registration Status of Practitioners](CodeSystem-practitioner-registration-status-code.md) | The code list represents the current practicing status of the Provider Person as per their registration with an RA. | https://standards.digital.health.nz/ns/practitioner-registration-status-code |
| [Scope of practice](CodeSystem-scopeOfPractice.md) | A classification of the type or range of health services that a practitioner is authorised to provide, as determined by the Responsible Authority or other statutory authority (e.g. PHARMAC), that is, what the practitioner can or cannot do. It includes Scope of Practice as defined by the Health Practitioners Competence Assurance Act 2003, any special authorisations granted, and any conditions or limitations imposed by the Responsible Authority. | https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code |
| [Type of Alias](CodeSystem-alias-type.md) | Used in Organization and Location to indicate what is the type of Alias | https://standards.digital.health.nz/ns/alias-type-code |

