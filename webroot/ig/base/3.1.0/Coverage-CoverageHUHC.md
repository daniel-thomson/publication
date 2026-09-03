# CoverageHUHC - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CoverageHUHC**

## Example Coverage: CoverageHUHC

High User Health Card for Raewyn Joseph

NHI ZZZ0032

HUHC number 12345689



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageHUHC",
  "meta" : {
    "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "https://standards.digital.health.nz/ns/huhc-id",
    "value" : "123456789"
  }],
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "https://standards.digital.health.nz/ns/coverage-type-code",
      "code" : "huhc",
      "display" : "High user health card"
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
  "period" : {
    "end" : "2023-09-17"
  },
  "payor" : [{
    "reference" : "Organization/organization-moh"
  }]
}

```
