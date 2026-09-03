# Registration Status of Practitioners - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Registration Status of Practitioners**

## CodeSystem: Registration Status of Practitioners 

| | |
| :--- | :--- |
| *Official URL*:https://standards.digital.health.nz/ns/practitioner-registration-status-code | *Version*:2.0 |
| Active as of 2023-10-18 | *Computable Name*:PractitionerRegistrationStatusCode |

 
The code list represents the current practicing status of the Provider Person as per their registration with an RA. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [PractitionerRegistrationStatusCode](ValueSet-practitioner-registration-status-code.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "practitioner-registration-status-code",
  "meta" : {
    "versionId" : "7",
    "lastUpdated" : "2026-05-07T20:20:51.657+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://standards.digital.health.nz/ns/practitioner-registration-status-code",
  "version" : "2.0",
  "name" : "PractitionerRegistrationStatusCode",
  "title" : "Registration Status of Practitioners",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-10-18T11:59:31.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The code list represents the current practicing status of the Provider Person as per their registration with an RA.",
  "caseSensitive" : true,
  "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-registration-status-code",
  "content" : "complete",
  "count" : 4,
  "concept" : [{
    "code" : "current",
    "display" : "A provider who holds or is deemed to hold a current practising certificate."
  },
  {
    "code" : "inactive",
    "display" : "A provider who is not practising"
  },
  {
    "code" : "removed",
    "display" : "A provider who has been removed from the register – this includes voluntary removal, de-registration and deceased"
  },
  {
    "code" : "suspended",
    "display" : "A provider who is suspended from practising by a Responsible Authority"
  }]
}

```
