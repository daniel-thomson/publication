# AccPatientOccupation - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AccPatientOccupation**

## Extension: AccPatientOccupation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:AccPatientOccupation |

Codes to describe a patient's occupation, using ACC's patient occupation codeset.

Note that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-acc-patient-occupation.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-acc-patient-occupation.csv), [Excel](StructureDefinition-acc-patient-occupation.xlsx), [Schematron](StructureDefinition-acc-patient-occupation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "acc-patient-occupation",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation",
  "version" : "1.0.0",
  "name" : "AccPatientOccupation",
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
  "description" : "Codes to describe a patient's occupation, using ACC's patient occupation codeset. \r\n\r\nNote that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'.",
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
      "definition" : "Codes to describe a patient's occupation, using ACC's patient occupation codeset. \r\n\r\nNote that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "example",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/acc-patient-occupation-code"
      }
    }]
  }
}

```
