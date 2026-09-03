# NZ Relationship Type Code System - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Relationship Type Code System**

## CodeSystem: NZ Relationship Type Code System 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes | *Version*:1.1.0 |
| Active as of 2026-07-24 | *Computable Name*:NzRelationshipCodes |

 
Code system for NZ relationship type codes. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NzRelationshipType](ValueSet-nz-relationship-type.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "nz-relationship-codes",
  "meta" : {
    "versionId" : "2",
    "lastUpdated" : "2026-05-08T10:19:41.469+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes",
  "version" : "1.1.0",
  "name" : "NzRelationshipCodes",
  "title" : "NZ Relationship Type Code System",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Code system for NZ relationship type codes.",
  "caseSensitive" : true,
  "compositional" : false,
  "content" : "complete",
  "count" : 1,
  "concept" : [{
    "code" : "WHANGAI",
    "display" : "Whāngai",
    "definition" : "Whāngai is the Māori tradition of children being raised by someone other than their birth parents — usually a relative."
  }]
}

```
