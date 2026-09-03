# podiatrists-board-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **podiatrists-board-id**

## NamingSystem: podiatrists-board-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/podiatrists-board-id | *Version*: |
| Active as of 2020-07-14 | *Computable Name*:NZPodiatry |

 
Podiatrists Board Register Number 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "podiatrists-board-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/podiatrists-board-id"
  }],
  "name" : "NZPodiatry",
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
  "description" : "Podiatrists Board Register Number",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/podiatrists-board-id",
    "preferred" : true
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.70.8"
  }]
}

```
