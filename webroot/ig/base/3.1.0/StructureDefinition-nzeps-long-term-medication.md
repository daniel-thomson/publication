# NZePS Long Term Medication Indicator - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZePS Long Term Medication Indicator**

## Extension: NZePS Long Term Medication Indicator 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication | *Version*:1.0 | |
| Active as of 2020-08-20 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 2 | *Computable Name*:Nzeps_long_term_medication |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

NZePS Long Term Medication Indicator

This has specific uses in NZ Pharmacy and GP systems for funding and clinical purposes. It is also part of the HISO 10041.1 standard for Medication Lists.

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication">
    <valueBoolean value="true"/>
  </extension>
  ...


```

**Example instances**

[MedicationRequest with long term medication indicated](MedicationRequest-medicationrequest-nzeps-long-term-medication.md)

**Usage info**

**Usages:**

* Use this Extension: [MedicationRequest resource for use in NZ](StructureDefinition-NzMedicationRequest.md) and [MedicationStatement resource for use in NZ](StructureDefinition-NzMedicationStatement.md)
* Examples for this Extension: [MedicationRequest/medicationrequest-nzeps-long-term-medication](MedicationRequest-medicationrequest-nzeps-long-term-medication.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nzeps-long-term-medication.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nzeps-long-term-medication.csv), [Excel](StructureDefinition-nzeps-long-term-medication.xlsx), [Schematron](StructureDefinition-nzeps-long-term-medication.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nzeps-long-term-medication",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 2
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication",
  "version" : "1.0",
  "name" : "Nzeps_long_term_medication",
  "title" : "NZePS Long Term Medication Indicator",
  "status" : "active",
  "date" : "2020-08-20",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "NZePS Long Term Medication Indicator",
  "purpose" : "This has specific uses in NZ Pharmacy and GP systems for funding and clinical purposes. It is also part of the HISO 10041.1 standard for Medication Lists.",
  "copyright" : "HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved.",
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
    "expression" : "MedicationRequest"
  },
  {
    "type" : "element",
    "expression" : "MedicationStatement"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "NZePS Long Term Medication Indicator",
      "definition" : "NZePS Long Term Medication Indicator"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "NZePS-long-term-medication",
      "short" : "NZePS Long Term Medication",
      "definition" : "NZePS Long Term Medication Indicator",
      "type" : [{
        "code" : "boolean"
      }]
    }]
  }
}

```
