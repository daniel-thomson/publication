# EducationalQualification - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EducationalQualification**

## Extension: EducationalQualification 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/educational-qualification | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:EducationalQualification |

Educational qualifications a practitioner has. These may or may not be related to registration information.

**Context of Use**

**Example of extension**

```
  ...
  <qualification>
    <extension url="http://hl7.org.nz/fhir/StructureDefinition/educational-qualification">
      <extension url="fullname">
        <valueString value="Fellow of the Royal Australian and New Zealand College of Psychiatrists qualification"/>
      </extension>
      <extension url="shortname">
        <valueString value="Psychiatrist fellow"/>
      </extension>
      <extension url="year">
        <valueDate value="1995"/>
      </extension>
      <extension url="institution">
        <valueString value="Royal Australian and New Zealand College of Psychiatrists"/>
      </extension>
      <extension url="city">
        <valueString value="Wellington"/>
      </extension>
      <extension url="country">
        <valueString value="NZ"/>
      </extension>
      <extension url="country-name">
        <valueString value="New Zealand"/>
      </extension>
    </extension>
    ...
  </qualification>
  ...


```

**Example instances**

[Practitioner with educational qualification](Practitioner-practitioner-educational-qualification.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-educational-qualification](Practitioner-practitioner-educational-qualification.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-educational-qualification.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-educational-qualification.csv), [Excel](StructureDefinition-educational-qualification.xlsx), [Schematron](StructureDefinition-educational-qualification.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "educational-qualification",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/educational-qualification",
  "version" : "1.0.0",
  "name" : "EducationalQualification",
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
  "description" : "Educational qualifications a practitioner has. These may or may not be related to registration information.",
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
  },
  {
    "type" : "element",
    "expression" : "Practitioner.qualification"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "Educational qualifications a practitioner has. These may or may not be related to registration information."
    },
    {
      "id" : "Extension.extension:fullname",
      "path" : "Extension.extension",
      "sliceName" : "fullname",
      "short" : "The full name of the educational qualification",
      "definition" : "The full name of the educational qualification",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:fullname.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:fullname.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "fullname"
    },
    {
      "id" : "Extension.extension:fullname.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:shortname",
      "path" : "Extension.extension",
      "sliceName" : "shortname",
      "short" : "A short name of the educational qualification for when space is limited",
      "definition" : "A short name of the educational qualification for when space is limited",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:shortname.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:shortname.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "shortname"
    },
    {
      "id" : "Extension.extension:shortname.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:year",
      "path" : "Extension.extension",
      "sliceName" : "year",
      "short" : "The year in which the qualification was granted",
      "definition" : "The year in which the qualification was granted",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:year.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:year.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "year"
    },
    {
      "id" : "Extension.extension:year.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "date"
      }]
    },
    {
      "id" : "Extension.extension:institution",
      "path" : "Extension.extension",
      "sliceName" : "institution",
      "short" : "The institution that granted the qualification",
      "definition" : "The institution that granted the qualification",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:institution.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:institution.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "institution"
    },
    {
      "id" : "Extension.extension:institution.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:city",
      "path" : "Extension.extension",
      "sliceName" : "city",
      "short" : "The city where the institution is located",
      "definition" : "The city where the institution is located",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:city.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:city.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "city"
    },
    {
      "id" : "Extension.extension:city.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:country",
      "path" : "Extension.extension",
      "sliceName" : "country",
      "short" : "The country (as iso country code) where the institution is located",
      "definition" : "The country (as iso country code) where the institution is located",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:country.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:country.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "country"
    },
    {
      "id" : "Extension.extension:country.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:country-name",
      "path" : "Extension.extension",
      "sliceName" : "country-name",
      "short" : "The country name (as text) where the institution is located",
      "definition" : "The country name (as text) where the institution is located",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:country-name.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:country-name.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "country-name"
    },
    {
      "id" : "Extension.extension:country-name.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/educational-qualification"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
