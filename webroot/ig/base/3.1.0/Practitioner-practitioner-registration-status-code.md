# practitioner-registration-status-code - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-registration-status-code**

## Example Practitioner: practitioner-registration-status-code

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
  "id" : "practitioner-registration-status-code",
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
        "url" : "status",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "https://standards.digital.health.nz/ns/practitioner-registration-status-code",
            "code" : "current",
            "display" : "A provider who holds or is deemed to hold a current practising certificate."
          }]
        }
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2021-01-01",
          "end" : "2021-12-31"
        }
      }],
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/registration-status-code"
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
