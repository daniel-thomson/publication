# ScopeOfPractice - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ScopeOfPractice**

## Extension: ScopeOfPractice 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:ScopeOfPractice |

The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body.

**Context of Use**

**Example of extension**

```
    <extension
               url="http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice">
      <extension url="code">
        <valueCodeableConcept>
          <coding>
            <system
                    value="https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code"/>
            <code value="CHIR"/>
            <display value="Chiropractor"/>
          </coding>
        </valueCodeableConcept>
      </extension>
      <extension url="period">
        <valuePeriod>
          <start value="2020-01-01"/>
          <end value="2020-12-31"/>
        </valuePeriod>
      </extension>
    </extension>

```

**Note that this is applied to the qualification element, not the resource root. See the full example below.**

**Example instances**

[Practitioner with scope of practice](Practitioner-practitioner-scope-of-practice.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-scope-of-practice](Practitioner-practitioner-scope-of-practice.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-scope-of-practice.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-scope-of-practice.csv), [Excel](StructureDefinition-scope-of-practice.xlsx), [Schematron](StructureDefinition-scope-of-practice.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "scope-of-practice",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice",
  "version" : "1.0.0",
  "name" : "ScopeOfPractice",
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
  "description" : "The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body.",
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
      "definition" : "The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body."
    },
    {
      "id" : "Extension.extension:code",
      "path" : "Extension.extension",
      "sliceName" : "code",
      "definition" : "A code identifying the services that the practitioner is permitted to perform",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:code.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:code.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "code"
    },
    {
      "id" : "Extension.extension:code.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code"
      }
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "definition" : "The period the scope of practice is effective",
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
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
