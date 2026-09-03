# patient-dhb - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-dhb**

## Example Patient: patient-dhb

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| [District Health Board linked to a NZ Healthcare Service, Location or Patient](StructureDefinition-dhb.md) | Northland District Health Board |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-dhb",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/dhb",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/dhb-code",
        "code" : "G00026-A",
        "display" : "Northland District Health Board"
      }]
    }
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
