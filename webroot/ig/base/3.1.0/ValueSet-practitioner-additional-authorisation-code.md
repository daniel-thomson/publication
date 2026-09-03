# Additional Practitioner authorisations - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Additional Practitioner authorisations**

## ValueSet: Additional Practitioner authorisations 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code | *Version*:1.0.1 |
| Active as of 2024-09-23 | *Computable Name*:PractitionerAdditionalAuthorisationCode |

 
A coded type for additional authorisations 

 **References** 

* [AdditionalAuthorisation](StructureDefinition-additional-authorisation.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "practitioner-additional-authorisation-code",
  "meta" : {
    "versionId" : "12",
    "lastUpdated" : "2026-05-07T20:43:29.485+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code",
  "version" : "1.0.1",
  "name" : "PractitionerAdditionalAuthorisationCode",
  "title" : "Additional Practitioner authorisations",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-23T12:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "A coded type for additional authorisations",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code",
      "version" : "1.0.1"
    }]
  }
}

```
