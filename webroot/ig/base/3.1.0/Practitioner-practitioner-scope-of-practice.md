# practitioner-scope-of-practice - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-scope-of-practice**

## Example Practitioner: practitioner-scope-of-practice

**name**: John Doe

**gender**: Male

**birthDate**: 1998-01-01

### Qualifications

| | | |
| :--- | :--- | :--- |
| - | **Extension** | **Code** |
| * |  | Bachelor of Science |



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-scope-of-practice",
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "qualification" : [{
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code",
            "code" : "CHIR",
            "display" : "Chiropractor"
          }]
        }
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2020-01-01",
          "end" : "2020-12-31"
        }
      }],
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice"
    }],
    "code" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/v2-0360",
        "code" : "BS"
      }]
    }
  }]
}

```
