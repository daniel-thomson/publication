# NZ Suburb - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Suburb**

## Extension: NZ Suburb 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/suburb | *Version*:1.0 | |
| Active as of 2020-07-20 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Suburb |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

Suburb element of a NZ Address.

Required as FHIR Base Address Type does not contain an element for Suburb (only District or State which, in population terms, are both broader than City - whereas Suburb is narrower).

**Context of Use**

**Example of extension**

```
  <address>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/suburb">
      <valueString value="Cove"/>
    </extension>
    <line value="23 thule st"/>
    <city value="Waipu"/>
  </address>

```

**Example instances**

[Patient with address suburb](Patient-patient-suburb.md)

**Usage info**

**Usages:**

* Use this Extension: [Common NZ Address datatype](StructureDefinition-NzAddress.md)
* Examples for this Extension: [Patient/patient-address-suburb](Patient-patient-address-suburb.md) and [Patient/patient-suburb](Patient-patient-suburb.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-suburb.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-suburb.csv), [Excel](StructureDefinition-suburb.xlsx), [Schematron](StructureDefinition-suburb.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "suburb",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/suburb",
  "version" : "1.0",
  "name" : "Suburb",
  "title" : "NZ Suburb",
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
  "description" : "Suburb element of a NZ Address.",
  "purpose" : "Required as FHIR Base Address Type does not contain an element for Suburb (only District or State which, in population terms, are both broader than City - whereas Suburb is narrower).",
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
      "short" : "NZ Suburb",
      "definition" : "Suburb element of a NZ Address."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/suburb"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "NZ Suburb",
      "short" : "NZSuburb",
      "definition" : "NZ Suburbs",
      "comment" : "NZ Suburbs are defined in the NZ Electronic Street Address Mapping (eSAM) standard.",
      "type" : [{
        "code" : "string"
      }],
      "example" : [{
        "label" : "Rototuna",
        "valueString" : "Rototuna"
      }]
    }]
  }
}

```
