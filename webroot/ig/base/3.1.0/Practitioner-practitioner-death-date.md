# practitioner-death-date - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-death-date**

## Example Practitioner: practitioner-death-date

> **Date of death**
* date: 2021-01-01
* source: Death Register

**name**: Marcus Welby

**gender**: Male

**birthDate**: 1998-01-01



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-death-date",
  "extension" : [{
    "extension" : [{
      "url" : "date",
      "valueDateTime" : "2021-01-01"
    },
    {
      "url" : "source",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/information-source-code",
          "code" : "DREG"
        }]
      }
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/death-date"
  }],
  "name" : [{
    "text" : "Marcus Welby",
    "family" : "Welby",
    "given" : ["Marcus"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01"
}

```
