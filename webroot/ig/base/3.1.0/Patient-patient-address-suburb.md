# patient-address-suburb - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-address-suburb**

## Example Patient: patient-address-suburb

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| Contact Detail | 23 thule st NZL (NZ Suburb: Cove) |
| [District Health Board linked to a NZ Healthcare Service, Location or Patient](StructureDefinition-dhb.md) | Northland District Health Board |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-address-suburb",
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
  "birthDate" : "1998-01-01",
  "address" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/suburb",
      "valueString" : "Cove"
    },
    {
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/building-name",
      "valueString" : "Big Red Shed"
    }],
    "line" : ["23 thule st"],
    "country" : "NZL"
  }]
}

```
