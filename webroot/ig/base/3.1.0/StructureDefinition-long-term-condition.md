# Long Term Condition Indicator - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Long Term Condition Indicator**

## Extension: Long Term Condition Indicator 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/long-term-condition | *Version*:1.0 | |
| Active as of 2020-08-20 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Long_term_condition |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives.

For more info see [https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions](https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions).

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/long-term-condition">
    <valueBoolean value="true"/>
  </extension>
  ...


```

**Example instances**

[Condition with Long term indicator set](Condition-condition-long-term-condition.md)

**Usage info**

**Usages:**

* Use this Extension: [Condition resource for use in NZ](StructureDefinition-NzCondition.md)
* Examples for this Extension: [Condition/condition-long-term-condition](Condition-condition-long-term-condition.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-long-term-condition.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-long-term-condition.csv), [Excel](StructureDefinition-long-term-condition.xlsx), [Schematron](StructureDefinition-long-term-condition.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "long-term-condition",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/long-term-condition",
  "version" : "1.0",
  "name" : "Long_term_condition",
  "title" : "Long Term Condition Indicator",
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
  "description" : "Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives.",
  "purpose" : "For more info see [https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions](https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions).",
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
    "expression" : "Condition"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Long Term Condition Indicator",
      "definition" : "Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/long-term-condition"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "long-term-condition",
      "short" : "Long Term Condition",
      "definition" : "Long Term Condition Indicator",
      "type" : [{
        "code" : "boolean"
      }]
    }]
  }
}

```
