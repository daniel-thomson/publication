# A specific purpose for which this ContactPoint dataType would be used - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **A specific purpose for which this ContactPoint dataType would be used**

## Extension: A specific purpose for which this ContactPoint dataType would be used 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose | *Version*:1.0 |
| Active as of 2020-07-20 | *Computable Name*:Contactpoint_purpose |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing.

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [Common NZ ContactPoint datatype](StructureDefinition-NzContactPoint.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-contactpoint-purpose.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-contactpoint-purpose.csv), [Excel](StructureDefinition-contactpoint-purpose.xlsx), [Schematron](StructureDefinition-contactpoint-purpose.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "contactpoint-purpose",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose",
  "version" : "1.0",
  "name" : "Contactpoint_purpose",
  "title" : "A specific purpose for which this ContactPoint dataType would be used",
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
  "description" : "A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing.",
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
    "expression" : "ContactPoint"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "A specific purpose for which this ContactPoint dataType would be used",
      "definition" : "A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code"
      }
    }]
  }
}

```
