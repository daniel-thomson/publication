# Coverage Category - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage Category**

## ValueSet: Coverage Category 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code | *Version*:1.0.0 |
| Active as of 2023-10-18 | *Computable Name*:CoverageCategory |

 
New Zealand codes for Coverage category types 

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
  "id" : "coverage-category",
  "meta" : {
    "versionId" : "9",
    "lastUpdated" : "2026-05-07T20:38:53.827+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code",
  "version" : "1.0.0",
  "name" : "CoverageCategory",
  "title" : "Coverage Category",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-10-18T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand codes for Coverage category types",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/coverage-category-code",
      "version" : "1.0.0"
    }]
  }
}

```
