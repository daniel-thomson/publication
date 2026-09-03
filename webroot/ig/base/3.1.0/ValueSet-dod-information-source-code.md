# Death date Information Source - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Death date Information Source**

## ValueSet: Death date Information Source 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code | *Version*:1.0.0 |
| Active as of 2025-11-04 | *Computable Name*:DodInformationSource |

 
The source from where the date of death was sourced. 

 **References** 

* [Date of death](StructureDefinition-death-date.md)

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
  "id" : "dod-information-source-code",
  "meta" : {
    "versionId" : "11",
    "lastUpdated" : "2026-05-07T20:40:16.086+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code",
  "version" : "1.0.0",
  "name" : "DodInformationSource",
  "title" : "Death date Information Source",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-11-04T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The source from where the date of death was sourced.",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/information-source-code",
      "concept" : [{
        "code" : "DREG",
        "display" : "Death Register"
      },
      {
        "code" : "OSEAOFF",
        "display" : "Death Overseas Official"
      },
      {
        "code" : "OSEA",
        "display" : "Death Overseas"
      },
      {
        "code" : "CORONER",
        "display" : "Coroner Notification"
      },
      {
        "code" : "MCCOD",
        "display" : "Medical Certificate Cause of Death"
      },
      {
        "code" : "HL7",
        "display" : "HL7 applied"
      },
      {
        "code" : "MIGR",
        "display" : "Migrated"
      }]
    }]
  }
}

```
