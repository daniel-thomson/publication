# rheumatic-fever-ccs-id - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **rheumatic-fever-ccs-id**

## NamingSystem: rheumatic-fever-ccs-id 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/NamingSystem/rheumatic-fever-ccs-id | *Version*: |
| Active as of 2024-08-05 | *Computable Name*:Rheumatic_fever_ccs_id |

 
Identifier assigned by the Rheumatic Fever Care Coordination System, used on CarePlan, Condition, CareTeam, and Observation resources. 



## Resource Content

```json
{
  "resourceType" : "NamingSystem",
  "id" : "rheumatic-fever-ccs-id",
  "extension" : [{
    "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-NamingSystem.url",
    "valueUri" : "http://fhir.org.nz/ig/base/NamingSystem/rheumatic-fever-ccs-id"
  }],
  "name" : "Rheumatic_fever_ccs_id",
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
    "text" : "rf-ccs-id"
  },
  "description" : "Identifier assigned by the Rheumatic Fever Care Coordination System, used on CarePlan, Condition, CareTeam, and Observation resources.",
  "uniqueId" : [{
    "type" : "uri",
    "value" : "https://standards.digital.health.nz/ns/rf-ccs-id",
    "preferred" : true,
    "period" : {
      "start" : "2024-08-05"
    }
  }]
}

```
