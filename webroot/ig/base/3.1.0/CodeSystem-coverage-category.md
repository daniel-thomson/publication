# Coverage category - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage category**

## CodeSystem: Coverage category 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/coverage-category-code | *Version*:1.0.0 |
| Active as of 2023-10-25 | *Computable Name*:CoverageCategory |

 
New Zealand codes for Coverage category types 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CoverageCategory](ValueSet-coverage-category.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "coverage-category",
  "meta" : {
    "versionId" : "8",
    "lastUpdated" : "2026-05-07T20:14:11.540+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/coverage-category-code",
  "version" : "1.0.0",
  "name" : "CoverageCategory",
  "title" : "Coverage category",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-10-25T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand codes for Coverage category types",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code",
  "content" : "complete",
  "count" : 1,
  "concept" : [{
    "code" : "under6",
    "display" : "A child under 6 years of age"
  }]
}

```
