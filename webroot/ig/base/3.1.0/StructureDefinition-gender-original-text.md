# GenderOriginalText - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **GenderOriginalText**

## Extension: GenderOriginalText 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/gender-original-text | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:GenderOriginalText |

Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)').

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-gender-original-text.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-gender-original-text.csv), [Excel](StructureDefinition-gender-original-text.xlsx), [Schematron](StructureDefinition-gender-original-text.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "gender-original-text",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/gender-original-text",
  "version" : "1.0.0",
  "name" : "GenderOriginalText",
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
  "description" : "Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)').",
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
    "expression" : "Patient.gender"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)')."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/gender-original-text"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
