# Coverage Type - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Type**

## ValueSet: Coverage Type 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code | *Version*:1.1.0 |
| Active as of 2024-09-11 | *Computable Name*:CoverageType |

 
New Zealand codes for Coverage Types 

 **References** 

* [Coverage resource for use in NZ (Trial use)](StructureDefinition-NzCoverage.md)

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
  "id" : "coverage-type-code",
  "meta" : {
    "versionId" : "5",
    "lastUpdated" : "2026-05-07T20:39:33.953+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code",
  "version" : "1.1.0",
  "name" : "CoverageType",
  "title" : "Coverage Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-11T10:15:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand codes for Coverage Types",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/coverage-type-code",
      "version" : "1.1.0"
    }]
  }
}

```
