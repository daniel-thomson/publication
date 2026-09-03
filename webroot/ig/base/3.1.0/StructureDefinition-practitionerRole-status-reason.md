# PractitionerRoleStatusReason - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRoleStatusReason**

## Extension: PractitionerRoleStatusReason 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:PractitionerRoleStatusReason |

The reason for the status. Generally only used for inactive resources.

**Context of Use**

**Example of extension**

```

  <extension url="http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason">
    <valueCodeableConcept>
      <coding>
        <system value="https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code"/>
        <code value="duplicate"/>
        <display value="duplicate"/>
      </coding>
    </valueCodeableConcept>
  </extension>


```

**Example instances**

[PractitionerRole with inactive reason](PractitionerRole-practitionerRole-status-reason.md)

**Usage info**

**Usages:**

* Use this Extension: [PractitionerRole resource for use in NZ](StructureDefinition-NzPractitionerRole.md)
* Examples for this Extension: [PractitionerRole/practitionerRole-status-reason](PractitionerRole-practitionerRole-status-reason.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-practitionerRole-status-reason.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-practitionerRole-status-reason.csv), [Excel](StructureDefinition-practitionerRole-status-reason.xlsx), [Schematron](StructureDefinition-practitionerRole-status-reason.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "practitionerRole-status-reason",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason",
  "version" : "1.0.0",
  "name" : "PractitionerRoleStatusReason",
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
  "description" : "The reason for the status. Generally only used for inactive resources.",
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
    "expression" : "PractitionerRole"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "The reason for the status. Generally only used for inactive resources."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/hpi-practitioner-role-status-reason-code"
      }
    }]
  }
}

```
