# Nzf_nzmt_type - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Nzf_nzmt_type**

## Extension: Nzf_nzmt_type 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type | *Version*:0.1.0 |
| Draft as of 2022-08-25 | *Computable Name*:Nzf_nzmt_type |

The NZ Medicines Terminology (NZMT) Data Class – MP (Medicinal Product), MPUU (Medicinal Product Unit of Use), MPP (Medicinal Product Pack), TP (Trade Product), TPUU (Trade Product Unit of Use), TPP (Trade Product Pack) or CTPP (Containered Trade Product Pack) – that the Medication is a member of.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Medication resource for use in NZ](StructureDefinition-NzMedication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nzf-nzmt-type.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nzf-nzmt-type.csv), [Excel](StructureDefinition-nzf-nzmt-type.xlsx), [Schematron](StructureDefinition-nzf-nzmt-type.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nzf-nzmt-type",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type",
  "version" : "0.1.0",
  "name" : "Nzf_nzmt_type",
  "status" : "draft",
  "date" : "2022-08-25T23:28:05+00:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The NZ Medicines Terminology (NZMT) Data Class – MP (Medicinal Product), MPUU (Medicinal Product Unit of Use), MPP (Medicinal Product Pack), TP (Trade Product), TPUU (Trade Product Unit of Use), TPP (Trade Product Pack) or CTPP (Containered Trade Product Pack) – that the Medication is a member of.",
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
      "definition" : "Type of NZMT record (e.g. MP, MPUU)"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nzmt-type"
      }
    }]
  }
}

```
