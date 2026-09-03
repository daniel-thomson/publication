# CoverageCSC - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CoverageCSC**

## Example Coverage: CoverageCSC

Community Services Card for Raewyn Joseph

NHI ZZZ0032

CSC number 12345689



## Resource Content

```json
{
  "resourceType" : "Coverage",
  "id" : "CoverageCSC",
  "meta" : {
    "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "https://standards.digital.health.nz/ns/csc-id",
    "value" : "123456789"
  }],
  "status" : "active",
  "type" : {
    "coding" : [{
      "system" : "https://standards.digital.health.nz/ns/coverage-type-code",
      "code" : "csc",
      "display" : "Community Services Card"
    }]
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
    "start" : "2022-04-01",
    "end" : "2023-04-01"
  },
  "payor" : [{
    "reference" : "Organization/organization-moh"
  }]
}

```
