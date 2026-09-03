# NZ Domicile Code - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Domicile Code**

## Extension: NZ Domicile Code 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/domicile-code | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Domicile_code |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

NZ Domicile Code. Derived from a patient's primary physical, home address.

**Context of Use**

**Example of extension**

```

 
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/domicile-code">
    <valueCodeableConcept>
      <coding>
        <system value="https://standards.digital.health.nz/ns/domicile-code"/>
        <code value="0040"/>
        <display value="Waipu"/>
      </coding>
    </valueCodeableConcept>
  </extension>


```

**Example instances**

[Patient with domicile code](Patient-patient-domicile-code.md)

**Usage info**

**Usages:**

* Use this Extension: [Common NZ Address datatype](StructureDefinition-NzAddress.md) and [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-domicile-code](Patient-patient-domicile-code.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-domicile-code.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-domicile-code.csv), [Excel](StructureDefinition-domicile-code.xlsx), [Schematron](StructureDefinition-domicile-code.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "domicile-code",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/domicile-code",
  "version" : "0.1.0",
  "name" : "Domicile_code",
  "title" : "NZ Domicile Code",
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
  "description" : "NZ Domicile Code. Derived from a patient's primary physical, home address.",
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
    "expression" : "Patient"
  },
  {
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
      "short" : "NZ Domicile Code",
      "definition" : "NZ Domicile Code. Derived from a patient's primary physical, home address."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/domicile-code"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/domicile-code"
      }
    }]
  }
}

```
