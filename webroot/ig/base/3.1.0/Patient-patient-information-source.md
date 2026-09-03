# patient-information-source - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-information-source**

## Example Patient: patient-information-source

John Doe Male, DoB: 1998-01-01

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-information-source",
  "name" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/information-source",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/information-source-code",
          "code" : "BRCT",
          "display" : "Birth Certificate"
        }]
      }
    }],
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "_birthDate" : {
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/information-source",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/information-source-code",
          "code" : "PPRT",
          "display" : "Passport"
        }]
      }
    }]
  }
}

```
