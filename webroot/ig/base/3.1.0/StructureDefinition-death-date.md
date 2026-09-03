# Date of death - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Date of death**

## Extension: Date of death 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/death-date | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Death_date |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

The date of death of the individual, plus the source of that information

**Context of Use**

**Example of extension**

```

<extension url="http://hl7.org.nz/fhir/StructureDefinition/death-date">
    <extension url="date">
      <valueDateTime value="2021-01-01"/>
    </extension>
    <extension url="source">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/information-source-code"/>
          <code value="DREG"/>
        </coding>
      </valueCodeableConcept>
    </extension>
  </extension>


```

**Example instances**

[Practitioner with death date recorded](Practitioner-practitioner-death-date.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-death-date](Practitioner-practitioner-death-date.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-death-date.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-death-date.csv), [Excel](StructureDefinition-death-date.xlsx), [Schematron](StructureDefinition-death-date.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "death-date",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/death-date",
  "version" : "0.1.0",
  "name" : "Death_date",
  "title" : "Date of death",
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
  "description" : "The date of death of the individual, plus the source of that information",
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
    "expression" : "Practitioner"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Date of death",
      "definition" : "The date of death of the individual, plus the source of that information"
    },
    {
      "id" : "Extension.extension:date",
      "path" : "Extension.extension",
      "sliceName" : "date",
      "short" : "The date of death",
      "definition" : "The date of death",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:date.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:date.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "date"
    },
    {
      "id" : "Extension.extension:date.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "dateTime"
      }]
    },
    {
      "id" : "Extension.extension:source",
      "path" : "Extension.extension",
      "sliceName" : "source",
      "short" : "The source of information",
      "definition" : "The source of information",
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
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code"
      }
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/death-date"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
