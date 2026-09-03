# sdhr-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **sdhr-id**

## NamingSystem: sdhr-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/sdhr-id | *Version*: |
| Active as of 2026-06-03 | *Computable Name*:Sdhr_id |

 
Identifier namespace for SDHR-assigned resource identifiers. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "sdhr-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/sdhr-id"
  }],
  "name" : "Sdhr_id",
  "status" : "active",
  "kind" : "identifier",
  "date" : "2026-06-03",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "responsible" : "HISO",
  "description" : "Identifier namespace for SDHR-assigned resource identifiers.",
  "usage" : "This sdhr-id identifier is recorded in Resource.identifier on a local resource to support synchronisation with the SDHR Data Service. Its value is the original SDHR-assigned FHIR Resource.id, allowing the integrating system to preserve a reference to the SDHR resource. This enables the system to match the local resource back to the corresponding SDHR resource during future synchronisation and other interactions.",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/sdhr-id",
    "preferred" : true
  }]
}

```
