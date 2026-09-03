# acc45-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **acc45-id**

## NamingSystem: acc45-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/acc45-id | *Version*: |
| Active as of 2023-08-14 | *Computable Name*:NZACC45 |

 
ACC 45 number 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "acc45-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/acc45-id"
  }],
  "name" : "NZACC45",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2023-08-14",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "responsible" : "HISO",
  "description" : "ACC 45 number",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/acc-45-number",
    "preferred" : true
  }]
}

```
