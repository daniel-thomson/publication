# patient-messaging-address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-messaging-address**

## Example Patient: patient-messaging-address

John Doe Male, DoB: 1998-01-01

-------

| | |
| :--- | :--- |
| Messaging Address: | * provider: MedicalObjects
* value: valueMO
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-messaging-address",
  "extension" : [{
    "extension" : [{
      "url" : "provider",
      "valueString" : "MedicalObjects"
    },
    {
      "url" : "value",
      "valueString" : "valueMO"
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address"
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
