# NZ Citizenship status - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Citizenship status**

## CodeSystem: NZ Citizenship status 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/nz-citizenship-status-code | *Version*:1.1.0 |
| Active as of 2023-10-25 | *Computable Name*:CitizenshipStatus |

 
Is this person a NZ Citizen 

 This Code system is referenced in the content logical definition of the following value sets: 

* [CitizenshipStatus](ValueSet-nz-citizenship-status-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "citizenship-status",
  "meta" : {
    "versionId" : "14",
    "lastUpdated" : "2026-05-07T20:12:14.184+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/nz-citizenship-status-code",
  "version" : "1.1.0",
  "name" : "CitizenshipStatus",
  "title" : "NZ Citizenship status",
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
  "description" : "Is this person a NZ Citizen",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-citizenship-status-code",
  "content" : "complete",
  "count" : 3,
  "concept" : [{
    "code" : "yes",
    "display" : "Yes",
    "definition" : "This patient is a citizen."
  },
  {
    "code" : "no",
    "display" : "No",
    "definition" : "This patient is not a citizen."
  },
  {
    "code" : "unknown",
    "display" : "Unknown",
    "definition" : "The citizenship is unknown"
  }]
}

```
