# patient-sex-at-birth - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-sex-at-birth**

## Example Patient: patient-sex-at-birth

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| [Sex At Birth](StructureDefinition-sex-at-birth.md) | Female |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-sex-at-birth",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth",
    "valueCodeableConcept" : {
      "coding" : [{
        "system" : "http://hl7.org/fhir/administrative-gender",
        "code" : "female"
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
