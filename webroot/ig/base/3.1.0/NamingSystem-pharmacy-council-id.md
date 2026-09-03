# pharmacy-council-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **pharmacy-council-id**

## NamingSystem: pharmacy-council-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/pharmacy-council-id | *Version*: |
| Active as of 2020-07-14 | *Computable Name*:Pharmacy_council_id |

 
Pharmacy Council of New Zealand Register Number 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "pharmacy-council-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/pharmacy-council-id"
  }],
  "name" : "Pharmacy_council_id",
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
  "description" : "Pharmacy Council of New Zealand Register Number",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/pharmacy-council-id",
    "preferred" : true
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.68"
  },
  {
    "type" : "oid",
    "value" : "2.16.840.1.113883.2.18.9"
  }]
}

```
