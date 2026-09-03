# Coverage type - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage type**

## CodeSystem: Coverage type 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/coverage-type-code | *Version*:1.1.0 |
| Active as of 2024-09-11 | *Computable Name*:CoverageType |

 
New Zealand codes for Coverage Types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CoverageType](ValueSet-coverage-type-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "coverage-type",
  "meta" : {
    "versionId" : "10",
    "lastUpdated" : "2026-05-07T20:13:25.919+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/coverage-type-code",
  "version" : "1.1.0",
  "name" : "CoverageType",
  "title" : "Coverage type",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-09-11T10:12:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand codes for Coverage Types",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code",
  "versionNeeded" : true,
  "content" : "complete",
  "count" : 5,
  "concept" : [{
    "code" : "gms",
    "display" : "General Medical Subsidy"
  },
  {
    "code" : "acc",
    "display" : "Accident Compensation Corporation"
  },
  {
    "code" : "csc",
    "display" : "Community Services Card"
  },
  {
    "code" : "huhc",
    "display" : "High User Health Card"
  },
  {
    "code" : "psc",
    "display" : "Pharmacy subsidy card"
  }]
}

```
