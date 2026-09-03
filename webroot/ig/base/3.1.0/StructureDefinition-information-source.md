# Information Source - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Information Source**

## Extension: Information Source 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/information-source | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Information_source |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

The official source of information held about a patient.

**Context of Use**

**Example of extension**

```

  <name>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/information-source">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/information-source-code"/>
          <code value="BRCT"/>
          <display value="Birth Certificate"/>
        </coding>
      </valueCodeableConcept>
    </extension>
    <text value="John Doe"/>
    <family value="Doe"/>
    <given value="John"/>
  </name>


```

**Example instances**

[Patient with information source for name](Patient-patient-information-source.md)

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-deceased-information-source](Patient-patient-deceased-information-source.md) and [Patient/patient-information-source](Patient-patient-information-source.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-information-source.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-information-source.csv), [Excel](StructureDefinition-information-source.xlsx), [Schematron](StructureDefinition-information-source.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "information-source",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/information-source",
  "version" : "0.1.0",
  "name" : "Information_source",
  "title" : "Information Source",
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
  "description" : "The official source of information held about a patient.",
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
    "expression" : "Patient.name"
  },
  {
    "type" : "element",
    "expression" : "Patient.birthDate"
  },
  {
    "type" : "element",
    "expression" : "Patient.deceased"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Information Source",
      "definition" : "The official source of information held about a patient."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/information-source"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code"
      }
    }]
  }
}

```
