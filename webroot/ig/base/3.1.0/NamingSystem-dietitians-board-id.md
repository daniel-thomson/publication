# dietitians-board-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **dietitians-board-id**

## NamingSystem: dietitians-board-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/dietitians-board-id | *Version*: |
| Active as of 2020-07-14 | *Computable Name*:NZDiet |

 
Dietitians Board Register Number 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "dietitians-board-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/dietitians-board-id"
  }],
  "name" : "NZDiet",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2020-07-14",
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
      "code" : "NPI",
      "display" : "National provider identifier"
    }]
  },
  "description" : "Dietitians Board Register Number",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/dietitians-board-id",
    "preferred" : true
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.70.3"
  }]
}

```
