# moe-facility-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **moe-facility-id**

## NamingSystem: moe-facility-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/moe-facility-id | *Version*: |
| Active as of 2024-07-20 | *Computable Name*:Moe_facility_id |

 
This identifier, known as the 'MoE Number' or 'School Number', is used by the education sector to identify an NZ education institution. These identifiers can be looked up at the [[educationcounts.govt.nz](http://educationcounts.govt.nz)]([https://www.educationcounts.govt.nz/directories/list-of-nz-schools](https://www.educationcounts.govt.nz/directories/list-of-nz-schools)) website. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "moe-facility-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/moe-facility-id"
  }],
  "name" : "Moe_facility_id",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2024-07-20",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "responsible" : "HISO",
  "type" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
      "code" : "FI",
      "display" : "Facility ID"
    }],
    "text" : "moe-facility"
  },
  "description" : "This identifier, known as the 'MoE Number' or 'School Number', is used by the education sector to identify an NZ education institution. These identifiers can be looked up at the \\[[educationcounts.govt.nz](http://educationcounts.govt.nz)\\]([https://www.educationcounts.govt.nz/directories/list-of-nz-schools](https://www.educationcounts.govt.nz/directories/list-of-nz-schools)) website.",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/moe-facility-id",
    "preferred" : true,
    "period" : {
      "start" : "2024-07-20"
    }
  }]
}

```
