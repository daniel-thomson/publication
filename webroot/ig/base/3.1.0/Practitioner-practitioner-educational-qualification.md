# practitioner-educational-qualification - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-educational-qualification**

## Example Practitioner: practitioner-educational-qualification

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
  "id" : "practitioner-educational-qualification",
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
        "url" : "fullname",
        "valueString" : "Fellow of the Royal Australian and New Zealand College of Psychiatrists qualification"
      },
      {
        "url" : "shortname",
        "valueString" : "Psychiatrist fellow"
      },
      {
        "url" : "year",
        "valueDate" : "1995"
      },
      {
        "url" : "institution",
        "valueString" : "Royal Australian and New Zealand College of Psychiatrists"
      },
      {
        "url" : "city",
        "valueString" : "Wellington"
      },
      {
        "url" : "country",
        "valueString" : "NZ"
      }],
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/educational-qualification"
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
