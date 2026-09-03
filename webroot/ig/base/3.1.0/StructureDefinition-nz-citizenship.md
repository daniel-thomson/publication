# NZ Citizenship - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Citizenship**

## Extension: NZ Citizenship 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship | *Version*:1.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Nz_citizenship |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

New Zealand citizenship

**Context of Use**

**Example of extension**

```
  ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship">
    <extension url="status">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/nz-citizenship-status-code"/>
          <code value="yes"/>
          <display value="Yes"/>
        </coding>
      </valueCodeableConcept>
    </extension>
    <extension url="source">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/information-source-code"/>
          <code value="BREG"/>
          <display value="Birth Register"/>
        </coding>
      </valueCodeableConcept>
    </extension>
  </extension>
  ...


```

**Example instances**

[Patient with nz-citizenship indicated](Patient-patient-nz-citizenship.md)

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-nz-citizenship](Patient-patient-nz-citizenship.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nz-citizenship.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nz-citizenship.csv), [Excel](StructureDefinition-nz-citizenship.xlsx), [Schematron](StructureDefinition-nz-citizenship.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nz-citizenship",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship",
  "version" : "1.1.0",
  "name" : "Nz_citizenship",
  "title" : "NZ Citizenship",
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
  "description" : "New Zealand citizenship",
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
      "short" : "NZ Citizenship",
      "definition" : "New Zealand citizenship"
    },
    {
      "id" : "Extension.extension:status",
      "path" : "Extension.extension",
      "sliceName" : "status",
      "definition" : "No description",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:status.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:status.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "status"
    },
    {
      "id" : "Extension.extension:status.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-citizenship-status-code"
      }
    },
    {
      "id" : "Extension.extension:source",
      "path" : "Extension.extension",
      "sliceName" : "source",
      "definition" : "No description",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:source.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:source.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "source"
    },
    {
      "id" : "Extension.extension:source.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code"
      }
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
