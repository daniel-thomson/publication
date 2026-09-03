# PractitionerRole resource for use in NZ - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole resource for use in NZ**

## Resource Profile: PractitionerRole resource for use in NZ 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzPractitionerRole | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzPractitionerRole |

 
PractitionerRole resource for use in NZ 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzPractitionerRole.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzPractitionerRole.csv), [Excel](StructureDefinition-NzPractitionerRole.xlsx), [Schematron](StructureDefinition-NzPractitionerRole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzPractitionerRole",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitionerRole",
  "version" : "1.0.0",
  "name" : "NzPractitionerRole",
  "title" : "PractitionerRole resource for use in NZ",
  "status" : "draft",
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "PractitionerRole resource for use in NZ",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "PractitionerRole",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/PractitionerRole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PractitionerRole",
      "path" : "PractitionerRole"
    },
    {
      "id" : "PractitionerRole.extension",
      "path" : "PractitionerRole.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "PractitionerRole.extension:practitionerRole-creator",
      "path" : "PractitionerRole.extension",
      "sliceName" : "practitionerRole-creator",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator"]
      }]
    },
    {
      "id" : "PractitionerRole.extension:practitionerRole-status-reason",
      "path" : "PractitionerRole.extension",
      "sliceName" : "practitionerRole-status-reason",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason"]
      }]
    },
    {
      "id" : "PractitionerRole.extension:messaging-address",
      "path" : "PractitionerRole.extension",
      "sliceName" : "messaging-address",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/messaging-address"]
      }]
    }]
  }
}

```
