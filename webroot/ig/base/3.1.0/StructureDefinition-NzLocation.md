# Location resource for use in NZ - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Location resource for use in NZ**

## Resource Profile: Location resource for use in NZ 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzLocation | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzLocation |

 
Location resource for use in NZ 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzLocation.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzLocation.csv), [Excel](StructureDefinition-NzLocation.xlsx), [Schematron](StructureDefinition-NzLocation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzLocation",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzLocation",
  "version" : "1.0.0",
  "name" : "NzLocation",
  "title" : "Location resource for use in NZ",
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
  "description" : "Location resource for use in NZ",
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
  "type" : "Location",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Location",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Location",
      "path" : "Location"
    },
    {
      "id" : "Location.extension",
      "path" : "Location.extension",
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
      "id" : "Location.extension:dhb",
      "path" : "Location.extension",
      "sliceName" : "dhb",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/dhb"]
      }]
    },
    {
      "id" : "Location.extension:established",
      "path" : "Location.extension",
      "sliceName" : "established",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/established"]
      }]
    },
    {
      "id" : "Location.extension:funded-programme",
      "path" : "Location.extension",
      "sliceName" : "funded-programme",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/funded-programme"]
      }]
    },
    {
      "id" : "Location.extension:pho",
      "path" : "Location.extension",
      "sliceName" : "pho",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/pho"]
      }]
    },
    {
      "id" : "Location.extension:messaging-address",
      "path" : "Location.extension",
      "sliceName" : "messaging-address",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/messaging-address"]
      }]
    },
    {
      "id" : "Location.alias.extension",
      "path" : "Location.alias.extension",
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
      "id" : "Location.alias.extension:alias-type",
      "path" : "Location.alias.extension",
      "sliceName" : "alias-type",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/alias-type"]
      }]
    }]
  }
}

```
