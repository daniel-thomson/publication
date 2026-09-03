# PractitionerRoleCreator - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRoleCreator**

## Extension: PractitionerRoleCreator 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:PractitionerRoleCreator |

The organisation and person that created this role

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator">
    <extension url="person">
      <valueReference>
        <reference value="#administrator"/>
      </valueReference>
    </extension>
    <extension url="organization">
      <valueReference>
        <reference value="#mmh"/>
      </valueReference>
    </extension>
  </extension>
  ...


```

**Example instances**

[PractitionerRole with creator](PractitionerRole-practitionerRole-creator.md)

**Usage info**

**Usages:**

* Use this Extension: [PractitionerRole resource for use in NZ](StructureDefinition-NzPractitionerRole.md)
* Examples for this Extension: [PractitionerRole/practitionerRole-creator](PractitionerRole-practitionerRole-creator.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-practitionerRole-creator.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-practitionerRole-creator.csv), [Excel](StructureDefinition-practitionerRole-creator.xlsx), [Schematron](StructureDefinition-practitionerRole-creator.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "practitionerRole-creator",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator",
  "version" : "1.0.0",
  "name" : "PractitionerRoleCreator",
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
  "description" : "The organisation and person that created this role",
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
      "definition" : "The organisation and person that created this role"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 1
    },
    {
      "id" : "Extension.extension:person",
      "path" : "Extension.extension",
      "sliceName" : "person",
      "definition" : "The person who created the role",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:person.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:person.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "person"
    },
    {
      "id" : "Extension.extension:person.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Practitioner"]
      }]
    },
    {
      "id" : "Extension.extension:organization",
      "path" : "Extension.extension",
      "sliceName" : "organization",
      "definition" : "The organization where the person was working (acting on behalf of?)",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:organization.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:organization.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "organization"
    },
    {
      "id" : "Extension.extension:organization.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://hl7.org/fhir/StructureDefinition/Organization"]
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
