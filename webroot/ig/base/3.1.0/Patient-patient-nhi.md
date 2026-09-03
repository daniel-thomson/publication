# patient-nhi - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **patient-nhi**

## Example Patient: patient-nhi

Profile: [NZ Patient](StructureDefinition-NzPatient.md)

John Doe Male, DoB: 1998-01-01 ( https://example.com/mysystem#other system id (use: official, ))

-------

| | |
| :--- | :--- |
| Other Ids: | * [NHI](NamingSystem-nhi-id.md)/activeIdent (use: official, )
* [NHI](NamingSystem-nhi-id.md)/dormant (use: old, )
* [NHI](NamingSystem-nhi-id.md)/dormant2 (use: old, )
* `https://example.com/mysystem`/other system id2 (use: temp, )
 |



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "patient-nhi",
  "meta" : {
    "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzPatient"]
  },
  "identifier" : [{
    "use" : "official",
    "system" : "https://standards.digital.health.nz/ns/nhi-id",
    "value" : "activeIdent"
  },
  {
    "use" : "old",
    "system" : "https://standards.digital.health.nz/ns/nhi-id",
    "value" : "dormant"
  },
  {
    "use" : "old",
    "system" : "https://standards.digital.health.nz/ns/nhi-id",
    "value" : "dormant2"
  },
  {
    "use" : "official",
    "system" : "https://example.com/mysystem",
    "value" : "other system id"
  },
  {
    "use" : "temp",
    "system" : "https://example.com/mysystem",
    "value" : "other system id2"
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
