# ContactPoint purpose - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ContactPoint purpose**

## CodeSystem: ContactPoint purpose 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/contact-point-purpose-code | *Version*:1.0.0 |
| Active as of 2023-10-25 | *Computable Name*:ContactPointPurpose |

 
The purpose of a ContactPoint - what it is used for. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ContactPointPurpose](ValueSet-contact-point-purpose.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "contact-point-purpose",
  "meta" : {
    "versionId" : "9",
    "lastUpdated" : "2026-05-07T20:12:44.959+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/contact-point-purpose-code",
  "version" : "1.0.0",
  "name" : "ContactPointPurpose",
  "title" : "ContactPoint purpose",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-10-25T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The purpose of a ContactPoint - what it is used for.",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code",
  "content" : "complete",
  "count" : 6,
  "concept" : [{
    "code" : "rx",
    "display" : "Prescription"
  },
  {
    "code" : "vc",
    "display" : "Video Conference"
  },
  {
    "code" : "wf",
    "display" : "Web forum"
  },
  {
    "code" : "ob",
    "display" : "Online booking"
  },
  {
    "code" : "vob",
    "display" : "Vaccination online booking"
  },
  {
    "code" : "www",
    "display" : "Website"
  }]
}

```
