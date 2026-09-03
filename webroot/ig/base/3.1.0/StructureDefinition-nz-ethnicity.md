# NZ Ethnicity - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Ethnicity**

## Extension: NZ Ethnicity 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Nz_ethnicity |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

The ethnic group or groups that a person identifies with or feels they belong to. Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen. Ethnicity is self-perceived and a person can belong to more than one group.

The Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17).

**Context of Use**

**Example of extension**

```

  <extension url="http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity">
    <valueCodeableConcept>
      <coding>
        <system value="https://standards.digital.health.nz/ns/ethnic-group-level-4-code"/>
        <code value="21111"/>
        <display value="Maori"/>
      </coding>
    </valueCodeableConcept>
  </extension>


```

Codes to record a person's ethnicity, drawn from Level 4 of the Ethnicity code system described [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17)

**Example instances**

[Patient with ethnicity](Patient-patient-nz-ethnicity.md)

**Usage info**

**Usages:**

* Use this Extension: [NZ Patient](StructureDefinition-NzPatient.md) and [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Patient/patient-nz-ethnicity](Patient-patient-nz-ethnicity.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nz-ethnicity.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nz-ethnicity.csv), [Excel](StructureDefinition-nz-ethnicity.xlsx), [Schematron](StructureDefinition-nz-ethnicity.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nz-ethnicity",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity",
  "version" : "0.1.0",
  "name" : "Nz_ethnicity",
  "title" : "NZ Ethnicity",
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
  "description" : "The ethnic group or groups that a person identifies with or feels they belong to.  Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen.  Ethnicity is self-perceived and a person can belong to more than one group.\n\nThe Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17).",
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
    "expression" : "Practitioner"
  },
  {
    "type" : "element",
    "expression" : "RelatedPerson"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "NZ Ethnicity",
      "definition" : "The ethnic group or groups that a person identifies with or feels they belong to.  Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen.  Ethnicity is self-perceived and a person can belong to more than one group.\n\nThe Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "min" : 1,
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code"
      }
    }]
  }
}

```
