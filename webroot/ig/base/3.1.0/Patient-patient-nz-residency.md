# patient-nz-residency - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-nz-residency**

## Example Patient: patient-nz-residency

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| null: | * status: Permanent Resident
* source: Birth Register
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-nz-residency",
  "extension" : [{
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/nz-residency-code",
          "code" : "yes",
          "display" : "Permanent Resident"
        }]
      }
    },
    {
      "url" : "source",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/information-source-code",
          "code" : "BREG",
          "display" : "Birth Register"
        }]
      }
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-residency"
  }],
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01"
}

```
