# nz-address-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **nz-address-id**

## NamingSystem: nz-address-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/nz-address-id | *Version*: |
| Active as of 2024-08-05 | *Computable Name*:Nz_address_id |

 
New Zealand Street Address Mapping Identifier 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "nz-address-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/nz-address-id"
  }],
  "name" : "Nz_address_id",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2024-08-05",
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
      "code" : "U",
      "display" : "Unspecified identifier"
    }],
    "text" : "nz-address-id"
  },
  "description" : "New Zealand Street Address Mapping Identifier",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/nz-address-id",
    "preferred" : true,
    "period" : {
      "start" : "2024-08-05"
    }
  }]
}

```
