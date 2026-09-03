# patient-building-name - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-building-name**

## Example Patient: patient-building-name

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| Contact Detail | 23 thule st Waipu |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-building-name",
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/building-name",
      "valueString" : "Big blue building"
    }],
    "line" : ["23 thule st"],
    "city" : "Waipu"
  }]
}

```
