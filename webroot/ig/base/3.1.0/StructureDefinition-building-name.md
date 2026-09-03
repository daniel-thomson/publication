# Building Name - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Building Name**

## Extension: Building Name 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/building-name | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Building_name |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

The name of a building cited in an address.

**Context of Use**

**Example of extension**

```

  <address>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/building-name">
      <valueString value="Big blue building"/>
    </extension>
    <line value="23 thule st"/>
    <city value="Waipu"/>
  </address>


```

**Example instances**

[Address with building name](Patient-patient-building-name.md)

**Usage info**

**Usages:**

* Use this Extension: [Common NZ Address datatype](StructureDefinition-NzAddress.md)
* Examples for this Extension: [Patient/patient-address-building-name](Patient-patient-address-building-name.md), [Patient/patient-address-suburb](Patient-patient-address-suburb.md) and [Patient/patient-building-name](Patient-patient-building-name.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-building-name.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-building-name.csv), [Excel](StructureDefinition-building-name.xlsx), [Schematron](StructureDefinition-building-name.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "building-name",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/building-name",
  "version" : "0.1.0",
  "name" : "Building_name",
  "title" : "Building Name",
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
  "description" : "The name of a building cited in an address.",
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
    "expression" : "Address"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Building Name",
      "definition" : "The name of a building cited in an address."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/building-name"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
