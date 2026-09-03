# patient-nz-citizenship - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-nz-citizenship**

## Example Patient: patient-nz-citizenship

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| NZ Citizenship: | * status: Yes
* source: Birth Register
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-nz-citizenship",
  "extension" : [{
    "extension" : [{
      "url" : "status",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/nz-citizenship-status-code",
          "code" : "yes",
          "display" : "Yes"
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
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship"
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
