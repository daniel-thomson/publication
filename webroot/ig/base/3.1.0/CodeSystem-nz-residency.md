# NZ Residency status - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Residency status**

## CodeSystem: NZ Residency status 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/nz-residency-code | *Version*:1.1.0 |
| Active as of 2023-10-25 | *Computable Name*:NZResidency |

 
NZ Residency status 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NZResidency](ValueSet-nz-residency-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "nz-residency",
  "meta" : {
    "versionId" : "10",
    "lastUpdated" : "2026-05-07T20:19:16.919+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/nz-residency-code",
  "version" : "1.1.0",
  "name" : "NZResidency",
  "title" : "NZ Residency status",
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
  "description" : "NZ Residency status",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-residency-code",
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "yes",
    "display" : "Permanent Resident",
    "definition" : "Use this status if the person holds a residence class visa"
  },
  {
    "code" : "no",
    "display" : "Not a Permanent Resident",
    "definition" : "Use this status for a person who is a NZ Citizen or does not hold a residence class visa"
  },
  {
    "code" : "unknown",
    "display" : "Unknown",
    "definition" : "use this status if the residency status of the person cannot be determined or is unknown"
  }]
}

```
