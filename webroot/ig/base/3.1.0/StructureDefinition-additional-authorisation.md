# AdditionalAuthorisation - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AdditionalAuthorisation**

## Extension: AdditionalAuthorisation 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:AdditionalAuthorisation |

Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include:

* Prescribing authorisation for a nurse practitioner
* Authorisation to administer immunisations

**Context of Use**

**Example of extension**

```

  <qualification>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation">
      <extension url="code">
        <valueCodeableConcept>
          <coding>
            <system value="https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code"/>
            <code value="IMMU"/>
            <display value="Immunisation"/>
          </coding>
        </valueCodeableConcept>
      </extension>
      <extension url="period">
        <valuePeriod>
          <start value="2022-01-01"/>
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

[Practitioner with additional authorisation](Practitioner-practitioner-additional-authorisation.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-additional-authorisation](Practitioner-practitioner-additional-authorisation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-additional-authorisation.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-additional-authorisation.csv), [Excel](StructureDefinition-additional-authorisation.xlsx), [Schematron](StructureDefinition-additional-authorisation.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "additional-authorisation",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation",
  "version" : "1.0.0",
  "name" : "AdditionalAuthorisation",
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
  "description" : "Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include:\r\n* Prescribing authorisation for a nurse practitioner\r\n* Authorisation to administer immunisations",
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
      "definition" : "Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include:\r\n* Prescribing authorisation for a nurse practitioner\r\n* Authorisation to administer immunisations"
    },
    {
      "id" : "Extension.extension:code",
      "path" : "Extension.extension",
      "sliceName" : "code",
      "definition" : "A code identifying the additional authorisations that a practitioner is authorised to perform",
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
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code"
      }
    },
    {
      "id" : "Extension.extension:period",
      "path" : "Extension.extension",
      "sliceName" : "period",
      "definition" : "The period the additional authorisation is effective",
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
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
