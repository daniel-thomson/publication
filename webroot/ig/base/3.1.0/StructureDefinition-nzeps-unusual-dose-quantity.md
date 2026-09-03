# NZePS Unusual Dose Quantity Indicator - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZePS Unusual Dose Quantity Indicator**

## Extension: NZePS Unusual Dose Quantity Indicator 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity | *Version*:1.0 | |
| Active as of 2020-07-20 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Nzeps_unusual_dose_quantity |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

NZePS Unusual Dose Quantity Indicator

Indicates if an unusual dose quantity has been prescribed deliberately.

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity">
    <valueBoolean value="true"/>
  </extension>
  ...


```

**Example instances**

[MedicationRequest with unusual dose quantity](MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.md)

**Usage info**

**Usages:**

* Use this Extension: [MedicationRequest resource for use in NZ](StructureDefinition-NzMedicationRequest.md)
* Examples for this Extension: [MedicationRequest/medicationrequest-nzeps-unusual-dose-quantity](MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nzeps-unusual-dose-quantity.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nzeps-unusual-dose-quantity.csv), [Excel](StructureDefinition-nzeps-unusual-dose-quantity.xlsx), [Schematron](StructureDefinition-nzeps-unusual-dose-quantity.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nzeps-unusual-dose-quantity",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity",
  "version" : "1.0",
  "name" : "Nzeps_unusual_dose_quantity",
  "title" : "NZePS Unusual Dose Quantity Indicator",
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
  "description" : "NZePS Unusual Dose Quantity Indicator",
  "purpose" : "Indicates if an unusual dose quantity has been prescribed deliberately.",
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
      "short" : "NZePS Unusual Dose Quantity Indicator",
      "definition" : "NZePS Unusual Dose Quantity Indicator"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "NZePS-unusual-dose-quantity",
      "short" : "NZePS Unusual Dose Quantity Indicator",
      "definition" : "Indicates if an unusual dose quantity has been prescribed deliberately.",
      "type" : [{
        "code" : "boolean"
      }]
    }]
  }
}

```
