# PractitionerRole status reason - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole status reason**

## CodeSystem: PractitionerRole status reason 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code | *Version*:1.0.0 |
| Active as of 2023-10-25 | *Computable Name*:PractitionerRoleStatusReason |

 
The reason for the current status of PractitionerRole 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PractitionerRoleStatusReason](ValueSet-hpi-practitionerrole-status-reason.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "hpi-practitionerRole-status-reason",
  "meta" : {
    "versionId" : "8",
    "lastUpdated" : "2026-05-07T20:18:16.929+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code",
  "version" : "1.0.0",
  "name" : "PractitionerRoleStatusReason",
  "title" : "PractitionerRole status reason",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-10-25T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The reason for the current status of PractitionerRole",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/hpi-practitioner-role-status-reason-code",
  "content" : "complete",
  "count" : 4,
  "concept" : [{
    "code" : "enteredInError",
    "display" : "enteredInError"
  },
  {
    "code" : "duplicate",
    "display" : "duplicate"
  },
  {
    "code" : "died",
    "display" : "died"
  },
  {
    "code" : "other",
    "display" : "other"
  }]
}

```
