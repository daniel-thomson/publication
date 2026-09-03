# CoverageGMS - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CoverageGMS**

## Example Coverage: CoverageGMS

GMS Entitlement for Raewyn Joseph

NHI ZZZ0032



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageGMS",
  "meta" : {
    "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"]
  },
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "https://standards.digital.health.nz/ns/coverage-type-code",
      "code" : "gms",
      "display" : "General Medical Subsidy"
    }]
  },
  "subscriber" : {
    "reference" : "Patient/patient-dhb"
  },
  "beneficiary" : {
    "reference" : "Patient/patient-dhb"
  },
  "relationship" : {
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/subscriber-relationship",
      "code" : "self"
    }]
  },
  "payor" : [{
    "reference" : "Organization/organization-moh"
  }],
  "class" : [{
    "type" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/coverage-category-code",
        "code" : "under6",
        "display" : "A child under 6 years of age"
      }]
    },
    "value" : "Baby"
  }]
}

```
