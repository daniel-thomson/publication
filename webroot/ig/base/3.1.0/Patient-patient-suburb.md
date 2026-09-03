# patient-suburb - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-suburb**

## Example Patient: patient-suburb

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| Contact Detail | 23 thule st Waipu (NZ Suburb: Cove) |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-suburb",
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/suburb",
      "valueString" : "Cove"
    }],
    "line" : ["23 thule st"],
    "city" : "Waipu"
  }]
}

```
