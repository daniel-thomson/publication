# practitionerRole-status-reason - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitionerRole-status-reason**

## Example PractitionerRole: practitionerRole-status-reason

**PractitionerRoleStatusReason**: duplicate

**active**: false



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "practitionerRole-status-reason",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code",
        "code" : "duplicate",
        "display" : "duplicate"
      }]
    }
  }],
  "active" : false
}

```
