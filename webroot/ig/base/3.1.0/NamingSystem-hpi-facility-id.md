# hpi-facility-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **hpi-facility-id**

## NamingSystem: hpi-facility-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/hpi-facility-id | *Version*: |
| Active as of 2020-07-14 | *Computable Name*:HPIFacility |

 
HPI facilities 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "hpi-facility-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/hpi-facility-id"
  }],
  "name" : "HPIFacility",
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
  "description" : "HPI facilities",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/hpi-facility-id",
    "preferred" : true
  },
  {
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/moh-facility-id"
  },
  {
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/id/hpi-facility",
    "comment" : "Deprecated"
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.3.2"
  },
  {
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/nzhis-facility-id"
  }]
}

```
