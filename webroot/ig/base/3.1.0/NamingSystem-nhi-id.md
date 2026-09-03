# nhi-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **nhi-id**

## NamingSystem: nhi-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/nhi-id | *Version*: |
| Active as of 2020-07-14 | *Computable Name*:NHI |

 
NHI number 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "nhi-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/nhi-id"
  }],
  "name" : "NHI",
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
  "description" : "NHI number",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/nhi-id",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/id/nhi",
    "comment" : "Deprecated"
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.2"
  }]
}

```
