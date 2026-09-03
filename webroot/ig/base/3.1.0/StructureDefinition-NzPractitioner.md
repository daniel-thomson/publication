# Practitioner resource for use in NZ - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner resource for use in NZ**

## Resource Profile: Practitioner resource for use in NZ 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzPractitioner | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzPractitioner |

 
Practitioner resource for use in NZ 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzPractitioner.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzPractitioner.csv), [Excel](StructureDefinition-NzPractitioner.xlsx), [Schematron](StructureDefinition-NzPractitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzPractitioner",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitioner",
  "version" : "1.0.0",
  "name" : "NzPractitioner",
  "title" : "Practitioner resource for use in NZ",
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
  "description" : "Practitioner resource for use in NZ",
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
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Practitioner",
      "path" : "Practitioner"
    },
    {
      "id" : "Practitioner.extension",
      "path" : "Practitioner.extension",
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
      "id" : "Practitioner.extension:death-date",
      "path" : "Practitioner.extension",
      "sliceName" : "death-date",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/death-date"]
      }]
    },
    {
      "id" : "Practitioner.extension:educational-qualification",
      "path" : "Practitioner.extension",
      "sliceName" : "educational-qualification",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/educational-qualification"]
      }]
    },
    {
      "id" : "Practitioner.extension:ethnicity",
      "path" : "Practitioner.extension",
      "sliceName" : "ethnicity",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity"]
      }]
    },
    {
      "id" : "Practitioner.extension:iwi",
      "path" : "Practitioner.extension",
      "sliceName" : "iwi",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-iwi"]
      }]
    },
    {
      "id" : "Practitioner.extension:messaging-address",
      "path" : "Practitioner.extension",
      "sliceName" : "messaging-address",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/messaging-address"]
      }]
    },
    {
      "id" : "Practitioner.qualification.extension",
      "path" : "Practitioner.qualification.extension",
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
      "id" : "Practitioner.qualification.extension:additional-authorisation",
      "path" : "Practitioner.qualification.extension",
      "sliceName" : "additional-authorisation",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation"]
      }]
    },
    {
      "id" : "Practitioner.qualification.extension:condition-on-practice",
      "path" : "Practitioner.qualification.extension",
      "sliceName" : "condition-on-practice",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice"]
      }]
    },
    {
      "id" : "Practitioner.qualification.extension:registration-initial-date",
      "path" : "Practitioner.qualification.extension",
      "sliceName" : "registration-initial-date",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date"]
      }]
    },
    {
      "id" : "Practitioner.qualification.extension:registration-status-code",
      "path" : "Practitioner.qualification.extension",
      "sliceName" : "registration-status-code",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/registration-status-code"]
      }]
    },
    {
      "id" : "Practitioner.qualification.extension:scope-of-practice",
      "path" : "Practitioner.qualification.extension",
      "sliceName" : "scope-of-practice",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice"]
      }]
    }]
  }
}

```
