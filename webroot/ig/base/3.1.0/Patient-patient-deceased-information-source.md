# patient-deceased-information-source - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-deceased-information-source**

## Example Patient: patient-deceased-information-source

Profile: [NZ Patient](StructureDefinition-NzPatient.md)

John Doe Male, DoB Unknown

-------

| | |
| :--- | :--- |
| Deceased: | 1998-01-01 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-deceased-information-source",
  "meta" : {
    "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzPatient"]
  },
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "deceasedDateTime" : "1998-01-01",
  "_deceasedDateTime" : {
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
