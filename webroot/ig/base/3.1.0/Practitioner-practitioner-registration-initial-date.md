# practitioner-registration-initial-date - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-registration-initial-date**

## Example Practitioner: practitioner-registration-initial-date

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
  "id" : "practitioner-registration-initial-date",
  "name" : [{
    "text" : "John Doe",
    "family" : "Doe",
    "given" : ["John"]
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01",
  "qualification" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date",
      "valueDate" : "2009-10-02"
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
