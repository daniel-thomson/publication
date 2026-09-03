# RegistrationInitialDate - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **RegistrationInitialDate**

## Extension: RegistrationInitialDate 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:RegistrationInitialDate |

The date the practitioner first became registered with the Responsible Authority or professional body

**Context of Use**

**Example of extension**

```
<extension url="http://hl7.co.nz/fhir/StructureDefinition/registration-initial-date">
   <valueDateTime value="2020-06-30T00:00:00+00:00" />
</extension>

```

**Note that this is applied to the qualification element, not the resource root. See the full example below.**

**Example instances**

[Practitioner with initial date](Practitioner-practitioner-registration-initial-date.md)

**Usage info**

**Usages:**

* Use this Extension: [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md)
* Examples for this Extension: [Practitioner/practitioner-registration-initial-date](Practitioner-practitioner-registration-initial-date.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-registration-initial-date.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-registration-initial-date.csv), [Excel](StructureDefinition-registration-initial-date.xlsx), [Schematron](StructureDefinition-registration-initial-date.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "registration-initial-date",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date",
  "version" : "1.0.0",
  "name" : "RegistrationInitialDate",
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
  "description" : "The date the practitioner first became registered with the Responsible Authority or professional body",
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
    "expression" : "Practitioner.qualification"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "The date the practitioner first became registered with the Responsible Authority or professional body"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "date"
      }]
    }]
  }
}

```
