# Nzf_atc - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nzf_atc**

## Extension: Nzf_atc 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nzf-atc | *Version*:0.1.0 |
| Active as of 2022-08-25 | *Computable Name*:Nzf_atc |

Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Medication resource for use in NZ](StructureDefinition-NzMedication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nzf-atc.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nzf-atc.csv), [Excel](StructureDefinition-nzf-atc.xlsx), [Schematron](StructureDefinition-nzf-atc.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nzf-atc",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-atc",
  "version" : "0.1.0",
  "name" : "Nzf_atc",
  "status" : "active",
  "date" : "2022-08-25T23:28:05+00:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification",
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
    "expression" : "Medication"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-atc"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/atc-code"
      }
    }]
  }
}

```
