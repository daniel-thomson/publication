# practitionerRole-creator - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitionerRole-creator**

## Example PractitionerRole: practitionerRole-creator



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "practitionerRole-creator",
  "contained" : [{
    "resourceType" : "Organization",
    "id" : "mmh",
    "identifier" : [{
      "system" : "https://standards.digital.health.nz/ns/hpi-organisation-id",
      "value" : "mmh"
    }],
    "name" : "Middlemore Hospital"
  },
  {
    "resourceType" : "Practitioner",
    "id" : "administrator",
    "name" : [{
      "text" : "Amy Administrator"
    }]
  }],
  "extension" : [{
    "extension" : [{
      "url" : "person",
      "valueReference" : {
        "reference" : "#administrator"
      }
    },
    {
      "url" : "organization",
      "valueReference" : {
        "reference" : "#mmh"
      }
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator"
  }]
}

```
