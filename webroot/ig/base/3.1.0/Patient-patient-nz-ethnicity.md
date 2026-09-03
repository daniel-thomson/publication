# patient-nz-ethnicity - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-nz-ethnicity**

## Example Patient: patient-nz-ethnicity

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| [NZ Ethnicity](StructureDefinition-nz-ethnicity.md) | * Māori
* Irish
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-nz-ethnicity",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/ethnic-group-level-4-code",
        "code" : "21111",
        "display" : "Māori"
      }]
    }
  },
  {
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "https://standards.digital.health.nz/ns/ethnic-group-level-4-code",
        "code" : "12116",
        "display" : "Irish"
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
