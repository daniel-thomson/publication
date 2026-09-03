# RegistrationStatusCode - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RegistrationStatusCode**

## Extension: RegistrationStatusCode 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/registration-status-code | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:RegistrationStatusCode |

An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body.

**Context of Use**

**Example of extension**

```
    <extension
               url="http://hl7.org.nz/fhir/StructureDefinition/registration-status-code">
      <extension url="status">
        <valueCodeableConcept>
          <coding>
            <system
                    value="https://standards.digital.health.nz/ns/practitioner-registration-status-code"/>
            <code value="current"/>
            <display
                     value="Current"/>
          </coding>
        </valueCodeableConcept>
      </extension>
      <extension url="period">
        <valuePeriod>
          <start value="2021-01-01"/>
          <end value="2021-12-31"/>
        </valuePeriod>
      </extension>
    </extension>

```

**Note that this is applied to the qualification element, not the resource root. See the full example below.**

**Example instances**

[Practitioner with Scope of Practice](Practitioner-practitioner-registration-status-code.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-registration-status-code](Practitioner-practitioner-registration-status-code.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-registration-status-code.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-registration-status-code.csv), [Excel](StructureDefinition-registration-status-code.xlsx), [Schematron](StructureDefinition-registration-status-code.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "registration-status-code",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/registration-status-code",
  "version" : "1.0.0",
  "name" : "RegistrationStatusCode",
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
  "description" : "An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body.",
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
      "definition" : "An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body."
    },
    {
      "id" : "Extension.extension:status",
      "path" : "Extension.extension",
      "sliceName" : "status",
      "definition" : "The status of this registration",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:status.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:status.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "status"
    },
    {
      "id" : "Extension.extension:status.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-registration-status-code"
      }
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "definition" : "The period over which this status is valid",
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
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/registration-status-code"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
