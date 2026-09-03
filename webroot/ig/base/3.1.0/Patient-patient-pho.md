# patient-pho - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-pho**

## Example Patient: patient-pho

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| [Primary Healthcare Organisation](StructureDefinition-pho.md) | Procare Networks Limited |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-pho",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/pho",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/pho-code",
        "code" : "G05533-K",
        "display" : "Procare Networks Limited"
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
