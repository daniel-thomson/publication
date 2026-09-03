# practitioner-additional-authorisation - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-additional-authorisation**

## Example Practitioner: practitioner-additional-authorisation

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
  "id" : "practitioner-additional-authorisation",
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
            "system" : "https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code",
            "code" : "IMMU",
            "display" : "Immunisation"
          }]
        }
      },
      {
        "url" : "period",
        "valuePeriod" : {
          "start" : "2022-01-01"
        }
      }],
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation"
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
