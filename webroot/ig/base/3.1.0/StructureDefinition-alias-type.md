# AliasType - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AliasType**

## Extension: AliasType 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/alias-type | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:AliasType |

Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name.

**Context of Use**

**Example of extension**

```

  <alias value="Best health">
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/alias-type">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/alias-type-code"/>
          <code value="short"/>
          <display value="Local name"/>
        </coding>
      </valueCodeableConcept>
    </extension>
  </alias>


```

**Example instances**

[Location with alias type](Location-location-alias-type.md)

**Usage info**

**Usages:**

* Use this Extension: [Location resource for use in NZ](StructureDefinition-NzLocation.md) and [Organization resource for use in NZ](StructureDefinition-NzOrganization.md)
* Examples for this Extension: [Daves health centre](Location-location-alias-type.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-alias-type.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-alias-type.csv), [Excel](StructureDefinition-alias-type.xlsx), [Schematron](StructureDefinition-alias-type.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "alias-type",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/alias-type",
  "version" : "1.0.0",
  "name" : "AliasType",
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
  "description" : "Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name.",
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
    "expression" : "Location.alias"
  },
  {
    "type" : "element",
    "expression" : "Organization.alias"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/alias-type"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/alias-type-code"
      }
    }]
  }
}

```
