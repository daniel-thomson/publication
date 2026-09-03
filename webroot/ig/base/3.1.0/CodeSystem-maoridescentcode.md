# Māori descent codes - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Māori descent codes**

## CodeSystem: Māori descent codes 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/maori-descent-code | *Version*:1.0.0 |
| Active as of 2023-06-26 | *Computable Name*:MaoriDescentCodes |
| *Other Identifiers:*maoridescent | |

 
Codes for classifying Māori descent. Defined by Stats NZ - Māori descent v1.0.0 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MaoriDescent](ValueSet-MaoriDescentValueset.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "maoridescentcode",
  "meta" : {
    "versionId" : "11",
    "lastUpdated" : "2026-05-07T19:33:50.546+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/maori-descent-code",
  "identifier" : [{
    "value" : "maoridescent"
  }],
  "version" : "1.0.0",
  "name" : "MaoriDescentCodes",
  "title" : "Māori descent codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-06-26T00:00:00.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Codes for classifying Māori descent. Defined by Stats NZ - Māori descent v1.0.0",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/maori-descent",
  "compositional" : false,
  "versionNeeded" : false,
  "content" : "complete",
  "count" : 7,
  "concept" : [{
    "code" : "1",
    "display" : "Māori descent"
  },
  {
    "code" : "2",
    "display" : "No Māori descent"
  },
  {
    "code" : "4",
    "display" : "Don't know"
  },
  {
    "code" : "7",
    "display" : "Response unidentifiable"
  },
  {
    "code" : "9",
    "display" : "Not stated"
  },
  {
    "code" : "5",
    "display" : "Refused to answer"
  },
  {
    "code" : "8",
    "display" : "Response outside scope"
  }]
}

```
