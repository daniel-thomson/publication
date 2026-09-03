# Sex At Birth - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sex At Birth**

## Extension: Sex At Birth 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth | *Version*:0.2.0 |
| Active as of 2020-07-20 | *Computable Name*:Sex_at_birth |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

A person’s sex at the time of their birth (considered to be immutable).

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth">
    <valueCodeableConcept>
      <coding>
        <system value="http://hl7.org/fhir/administrative-gender"/>
        <code value="female"/>
      </coding>
    </valueCodeableConcept>
  </extension>
  ...


```

**Example instances**

[Patient with sex at birth set](Patient-patient-sex-at-birth.md)

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-sex-at-birth](Patient-patient-sex-at-birth.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-sex-at-birth.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-sex-at-birth.csv), [Excel](StructureDefinition-sex-at-birth.xlsx), [Schematron](StructureDefinition-sex-at-birth.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "sex-at-birth",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth",
  "version" : "0.2.0",
  "name" : "Sex_at_birth",
  "title" : "Sex At Birth",
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
  "description" : "A person’s sex at the time of their birth (considered to be immutable).",
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
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Sex At Birth",
      "definition" : "A person’s sex at the time of their birth (considered to be immutable)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://hl7.org/fhir/ValueSet/administrative-gender"
      }
    }]
  }
}

```
