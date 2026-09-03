# practitioner-edi-address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitioner-edi-address**

## Example Practitioner: practitioner-edi-address

**name**: Marcus Welby

**telecom**: 001a

**gender**: Male

**birthDate**: 1998-01-01



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "practitioner-edi-address",
  "name" : [{
    "text" : "Marcus Welby",
    "family" : "Welby",
    "given" : ["Marcus"]
  }],
  "telecom" : [{
    "system" : "other",
    "_system" : {
      "extension" : [{
        "url" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address",
        "valueString" : "healthlink"
      }]
    },
    "value" : "001a"
  }],
  "gender" : "male",
  "birthDate" : "1998-01-01"
}

```
