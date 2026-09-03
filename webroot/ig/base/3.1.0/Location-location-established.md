# location-established - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **location-established**

## Example Location: location-established

**Established**: 2010-01-01 --> (ongoing)

**name**: Daves health centre

**alias**: Best health



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "location-established",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/established",
    "valuePeriod" : {
      "start" : "2010-01-01"
    }
  }],
  "name" : "Daves health centre",
  "alias" : ["Best health"]
}

```
