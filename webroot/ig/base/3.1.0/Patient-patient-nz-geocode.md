# patient-nz-geocode - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-nz-geocode**

## Example Patient: patient-nz-geocode

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| Contact Detail | 23 thule st |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-nz-geocode",
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "address" : [{
    "extension" : [{
      "extension" : [{
        "url" : "latitude",
        "valueDecimal" : -35.99
      },
      {
        "url" : "longitude",
        "valueDecimal" : 174.47
      }],
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-geocode"
    }],
    "line" : ["23 thule st"]
  }]
}

```
