# Datum codes - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Datum codes**

## CodeSystem: Datum codes 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/nz-datum-code | *Version*:1.0.0 |
| Active as of 2023-08-22 | *Computable Name*:DatumCode |

 
Possible datum codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DatumCode](ValueSet-datumCode.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "datum-code",
  "meta" : {
    "versionId" : "8",
    "lastUpdated" : "2026-05-07T20:14:53.887+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/nz-datum-code",
  "version" : "1.0.0",
  "name" : "DatumCode",
  "title" : "Datum codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-08-22T12:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Possible datum codes",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-datum-code",
  "content" : "complete",
  "count" : 2,
  "concept" : [{
    "code" : "WGS84",
    "display" : "WGS84",
    "definition" : "global datum, used by google maps"
  },
  {
    "code" : "NZGD2000",
    "display" : "NZGD2000",
    "definition" : "Nz official datum, used by MoH address service"
  }]
}

```
