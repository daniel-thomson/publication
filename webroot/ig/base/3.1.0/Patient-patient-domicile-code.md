# patient-domicile-code - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-domicile-code**

## Example Patient: patient-domicile-code

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| [NZ Domicile Code](StructureDefinition-domicile-code.md) | Waipu |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-domicile-code",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/domicile-code",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/domicile-code",
        "code" : "0125",
        "display" : "Waipu"
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
