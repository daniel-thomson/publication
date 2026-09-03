# HealthcareService resource for use in NZ - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HealthcareService resource for use in NZ**

## Resource Profile: HealthcareService resource for use in NZ 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzHealthcareService | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzHealthcareService |

 
HealthcareService resource for use in NZ 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzHealthcareService.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzHealthcareService.csv), [Excel](StructureDefinition-NzHealthcareService.xlsx), [Schematron](StructureDefinition-NzHealthcareService.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzHealthcareService",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzHealthcareService",
  "version" : "1.0.0",
  "name" : "NzHealthcareService",
  "title" : "HealthcareService resource for use in NZ",
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
  "description" : "HealthcareService resource for use in NZ",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "HealthcareService",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/HealthcareService",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "HealthcareService",
      "path" : "HealthcareService"
    },
    {
      "id" : "HealthcareService.extension",
      "path" : "HealthcareService.extension",
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
      "id" : "HealthcareService.extension:dhb",
      "path" : "HealthcareService.extension",
      "sliceName" : "dhb",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/dhb"]
      }]
    },
    {
      "id" : "HealthcareService.extension:funded-programme",
      "path" : "HealthcareService.extension",
      "sliceName" : "funded-programme",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/funded-programme"]
      }]
    },
    {
      "id" : "HealthcareService.extension:pho",
      "path" : "HealthcareService.extension",
      "sliceName" : "pho",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/pho"]
      }]
    },
    {
      "id" : "HealthcareService.extension:messaging-address",
      "path" : "HealthcareService.extension",
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
