# Organization resource for use in NZ - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Organization resource for use in NZ**

## Resource Profile: Organization resource for use in NZ 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzOrganization | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzOrganization |

 
Organization resource for use in NZ 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzOrganization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzOrganization.csv), [Excel](StructureDefinition-NzOrganization.xlsx), [Schematron](StructureDefinition-NzOrganization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzOrganization",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzOrganization",
  "version" : "1.0.0",
  "name" : "NzOrganization",
  "title" : "Organization resource for use in NZ",
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
  "description" : "Organization resource for use in NZ",
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
  "type" : "Organization",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization"
    },
    {
      "id" : "Organization.extension",
      "path" : "Organization.extension",
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
      "id" : "Organization.extension:established",
      "path" : "Organization.extension",
      "sliceName" : "established",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/established"]
      }]
    },
    {
      "id" : "Organization.extension:funded-programme",
      "path" : "Organization.extension",
      "sliceName" : "funded-programme",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/funded-programme"]
      }]
    },
    {
      "id" : "Organization.extension:messaging-address",
      "path" : "Organization.extension",
      "sliceName" : "messaging-address",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/messaging-address"]
      }]
    },
    {
      "id" : "Organization.alias.extension",
      "path" : "Organization.alias.extension",
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
      "id" : "Organization.alias.extension:alias-type",
      "path" : "Organization.alias.extension",
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
