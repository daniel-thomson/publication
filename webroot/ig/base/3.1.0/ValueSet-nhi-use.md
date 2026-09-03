# Valid use values for NHI - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Valid use values for NHI**

## ValueSet: Valid use values for NHI 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code | *Version*:1.0.0 |
| Active as of 2022-08-29 | *Computable Name*:NHIUse |

 
NHI Use codes 

 **References** 

* [NZ Patient](StructureDefinition-NzPatient.md)

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
  "id" : "nhi-use",
  "meta" : {
    "versionId" : "6",
    "lastUpdated" : "2026-05-08T10:05:37.365+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code",
  "version" : "1.0.0",
  "name" : "NHIUse",
  "title" : "Valid use values for NHI",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-08-29T12:59:31+00:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "NHI Use codes",
  "compose" : {
    "include" : [{
      "system" : "http://hl7.org/fhir/identifier-use",
      "concept" : [{
        "code" : "official"
      },
      {
        "code" : "old"
      }]
    }]
  }
}

```
