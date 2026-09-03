# ConditionOnPractice - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ConditionOnPractice**

## Extension: ConditionOnPractice 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:ConditionOnPractice |

A full description of the conditions the health practitioner is subject to in relation to their scope of practice.

**Context of Use**

**Example of extension**

```

  <qualification>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice">
      <extension url="description">
        <valueString value="Must be supervised"/>
      </extension>
      <extension url="period">
        <valuePeriod>
          <start value="2020-01-01"/>
          <end value="2020-12-31"/>
        </valuePeriod>
      </extension>
    </extension>
    <code>
      <coding>
        <system value="http://terminology.hl7.org/CodeSystem/v2-0360"/>
        <code value="BS"/>
      </coding>
    </code>
  </qualification>


```

**Example instances**

[Practitioner with Condition on practice](Practitioner-practitioner-condition-on-practice.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-condition-on-practice](Practitioner-practitioner-condition-on-practice.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-condition-on-practice.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-condition-on-practice.csv), [Excel](StructureDefinition-condition-on-practice.xlsx), [Schematron](StructureDefinition-condition-on-practice.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "condition-on-practice",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice",
  "version" : "1.0.0",
  "name" : "ConditionOnPractice",
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
  "description" : "A full description of the conditions the health practitioner is subject to in relation to their scope of practice.",
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
    "expression" : "Practitioner.qualification"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "A full description of the conditions the health practitioner is subject to in relation to their scope of practice."
    },
    {
      "id" : "Extension.extension:description",
      "path" : "Extension.extension",
      "sliceName" : "description",
      "definition" : "The condition on practice as text",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:description.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:description.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "description"
    },
    {
      "id" : "Extension.extension:description.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "definition" : "The period the conditions on practice are effective",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:period.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:period.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "period"
    },
    {
      "id" : "Extension.extension:period.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Period"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
