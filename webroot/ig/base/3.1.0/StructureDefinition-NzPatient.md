# NZ Patient - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Patient**

## Resource Profile: NZ Patient 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzPatient | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:NzPatient |

 
The base New Zealand Patient profile 

 
Describe the Base New Zealand Patient resource profileI 

**Usages:**

* Examples for this Profile: [Patient/patient-deceased-information-source](Patient-patient-deceased-information-source.md) and [Patient/patient-nhi](Patient-patient-nhi.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzPatient.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzPatient.csv), [Excel](StructureDefinition-NzPatient.xlsx), [Schematron](StructureDefinition-NzPatient.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzPatient",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient",
  "version" : "1.0.0",
  "name" : "NzPatient",
  "title" : "NZ Patient",
  "status" : "active",
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The base New Zealand Patient profile",
  "purpose" : "Describe the Base New Zealand Patient resource profileI",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "cda",
    "uri" : "http://hl7.org/v3/cda",
    "name" : "CDA (R2)"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "loinc",
    "uri" : "http://loinc.org",
    "name" : "LOINC code for the element"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Patient",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Patient",
      "path" : "Patient",
      "constraint" : [{
        "key" : "nz-pat-1",
        "severity" : "error",
        "human" : "only a single official NHI",
        "expression" : "Patient.identifier.where(system='https://standards.digital.health.nz/ns/nhi-id' and use='official').count() < 2",
        "source" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient"
      }]
    },
    {
      "id" : "Patient.extension",
      "path" : "Patient.extension",
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
      "id" : "Patient.extension:ethnicity",
      "path" : "Patient.extension",
      "sliceName" : "ethnicity",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity"]
      }]
    },
    {
      "id" : "Patient.extension:nzCitizen",
      "path" : "Patient.extension",
      "sliceName" : "nzCitizen",
      "short" : "Is this person a New Zealand citizen",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship"]
      }]
    },
    {
      "id" : "Patient.extension:dhb",
      "path" : "Patient.extension",
      "sliceName" : "dhb",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/dhb"]
      }]
    },
    {
      "id" : "Patient.extension:domicile-code",
      "path" : "Patient.extension",
      "sliceName" : "domicile-code",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/domicile-code"]
      }]
    },
    {
      "id" : "Patient.extension:pho",
      "path" : "Patient.extension",
      "sliceName" : "pho",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/pho"]
      }]
    },
    {
      "id" : "Patient.extension:sex-at-birth",
      "path" : "Patient.extension",
      "sliceName" : "sex-at-birth",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth"]
      }]
    },
    {
      "id" : "Patient.extension:iwi",
      "path" : "Patient.extension",
      "sliceName" : "iwi",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-iwi"]
      }]
    },
    {
      "id" : "Patient.extension:acc-patient-occupation",
      "path" : "Patient.extension",
      "sliceName" : "acc-patient-occupation",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation"]
      }]
    },
    {
      "id" : "Patient.extension:messaging-address",
      "path" : "Patient.extension",
      "sliceName" : "messaging-address",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/messaging-address"]
      }]
    },
    {
      "id" : "Patient.extension:nz-residency",
      "path" : "Patient.extension",
      "sliceName" : "nz-residency",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-residency"]
      }]
    },
    {
      "id" : "Patient.extension:interpreter-required",
      "path" : "Patient.extension",
      "sliceName" : "interpreter-required",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org/fhir/StructureDefinition/patient-interpreterRequired|4.0.1"]
      }]
    },
    {
      "id" : "Patient.identifier",
      "path" : "Patient.identifier",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "system"
        }],
        "rules" : "open"
      }
    },
    {
      "id" : "Patient.identifier:NHI",
      "path" : "Patient.identifier",
      "sliceName" : "NHI",
      "min" : 0,
      "max" : "*"
    },
    {
      "id" : "Patient.identifier:NHI.use",
      "path" : "Patient.identifier.use",
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code"
      }
    },
    {
      "id" : "Patient.identifier:NHI.system",
      "path" : "Patient.identifier.system",
      "min" : 1,
      "fixedUri" : "https://standards.digital.health.nz/ns/nhi-id"
    },
    {
      "id" : "Patient.name.extension:information-source",
      "path" : "Patient.name.extension",
      "sliceName" : "information-source",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/information-source"]
      }]
    },
    {
      "id" : "Patient.telecom",
      "path" : "Patient.telecom",
      "type" : [{
        "code" : "ContactPoint",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzContactpoint"]
      }]
    },
    {
      "id" : "Patient.gender.extension",
      "path" : "Patient.gender.extension",
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
      "id" : "Patient.gender.extension:genderOriginalText",
      "path" : "Patient.gender.extension",
      "sliceName" : "genderOriginalText",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/gender-original-text"]
      }]
    },
    {
      "id" : "Patient.birthDate.extension",
      "path" : "Patient.birthDate.extension",
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
      "id" : "Patient.birthDate.extension:information-source",
      "path" : "Patient.birthDate.extension",
      "sliceName" : "information-source",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/information-source"]
      }]
    },
    {
      "id" : "Patient.deceased[x]",
      "path" : "Patient.deceased[x]",
      "slicing" : {
        "discriminator" : [{
          "type" : "type",
          "path" : "$this"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Patient.deceased[x]:deceasedDateTime",
      "path" : "Patient.deceased[x]",
      "sliceName" : "deceasedDateTime",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Patient.deceased[x]:deceasedDateTime.extension",
      "path" : "Patient.deceased[x].extension",
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
      "id" : "Patient.deceased[x]:deceasedDateTime.extension:information-source",
      "path" : "Patient.deceased[x].extension",
      "sliceName" : "information-source",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/information-source"]
      }]
    },
    {
      "id" : "Patient.address",
      "path" : "Patient.address",
      "type" : [{
        "code" : "Address",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/NzAddress"]
      }]
    }]
  }
}

```
