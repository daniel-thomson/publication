# location-alias-type - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **location-alias-type**

## Example Location: location-alias-type

**name**: Daves health centre

**alias**: Best health



## Resource Content

```json
{
  "resourceType" : "Location",
  "id" : "location-alias-type",
  "name" : "Daves health centre",
  "alias" : ["Best health"],
  "_alias" : [{
    "extension" : [{
      "url" : "http://hl7.org.nz/fhir/StructureDefinition/alias-type",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/alias-type-code",
          "code" : "short",
          "display" : "Short"
        }]
      }
    }]
  }]
}

```
