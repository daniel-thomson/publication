# NZResidency - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZResidency**

## Extension: NZResidency 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nz-residency | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:NZResidency |

NZ Residency status

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-nz-residency](Patient-patient-nz-residency.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nz-residency.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nz-residency.csv), [Excel](StructureDefinition-nz-residency.xlsx), [Schematron](StructureDefinition-nz-residency.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nz-residency",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-residency",
  "version" : "1.0.0",
  "name" : "NZResidency",
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
  "description" : "NZ Residency status",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [{
    "type" : "element",
    "expression" : "Patient"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "NZ Residency status"
    },
    {
      "id" : "Extension.extension:status",
      "path" : "Extension.extension",
      "sliceName" : "status",
      "definition" : "Residency Status",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:status.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:status.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "status"
    },
    {
      "id" : "Extension.extension:status.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-residency-code"
      }
    },
    {
      "id" : "Extension.extension:source",
      "path" : "Extension.extension",
      "sliceName" : "source",
      "definition" : "The source of information concerning the residency",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:source.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:source.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "source"
    },
    {
      "id" : "Extension.extension:source.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code"
      }
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nz-residency"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
