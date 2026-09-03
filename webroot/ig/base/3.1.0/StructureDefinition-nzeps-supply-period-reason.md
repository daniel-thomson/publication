# NZePS Supply Period Reason - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZePS Supply Period Reason**

## Extension: NZePS Supply Period Reason 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason | *Version*:1.0 | |
| Active as of 2020-07-20 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Nzeps_supply_period_reason |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

The reason for a non-standard Supply Period.

The reason for a non-standard supply period, e.g. the patient going abroad.

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason">
    <valueString value="Going overseas"/>
  </extension>
  ...


```

**Example instances**

[MedicationRequest with supply reason](MedicationRequest-medicationrequest-nzeps-supply-period-reason.md)

**Usage info**

**Usages:**

* Use this Extension: [MedicationRequest resource for use in NZ](StructureDefinition-NzMedicationRequest.md)
* Examples for this Extension: [MedicationRequest/medicationrequest-nzeps-supply-period-reason](MedicationRequest-medicationrequest-nzeps-supply-period-reason.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nzeps-supply-period-reason.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nzeps-supply-period-reason.csv), [Excel](StructureDefinition-nzeps-supply-period-reason.xlsx), [Schematron](StructureDefinition-nzeps-supply-period-reason.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nzeps-supply-period-reason",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason",
  "version" : "1.0",
  "name" : "Nzeps_supply_period_reason",
  "title" : "NZePS Supply Period Reason",
  "status" : "active",
  "date" : "2020-07-20",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The reason for a non-standard Supply Period.",
  "purpose" : "The reason for a non-standard supply period, e.g. the patient going abroad.",
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
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "NZePS Supply Period Reason",
      "definition" : "The reason for a non-standard Supply Period."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "NZePS-supply-period-reason",
      "short" : "NZePS Supply Period Reason",
      "definition" : "The reason for a non-standard supply period.",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
