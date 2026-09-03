# Funded Healthcare Programme - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Funded Healthcare Programme**

## Extension: Funded Healthcare Programme 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/funded-programme | *Version*:1.0 | |
| Active as of 2021-02-08 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Funded_programme |
| **Copyright/Legal**: HL7 New Zealand© 2021+; Licensed Under Creative Commons No Rights Reserved. | | |

Funded NZ Healthcare Programmes

Details of a NZ Healthcare Funded Programme relevant to its implementation status at an individual organisation, facility or service.

**Context of Use**

**Example of extension**

```
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/funded-programme">
    <extension url="fundedProgramme">
      <valueCodeableConcept>
        <coding>
          <system
                  value="https://standards.digital.health.nz/ns/funded-programme-code"/>
          <code value="DENTAL_CHILD"/>
          <display value="Dental Care - Children up to age 13"/>
        </coding>
      </valueCodeableConcept>
    </extension>
    <extension url="currentAvailability">
      <valueBoolean value="true"/>
    </extension>
    <extension url="notes">
      <valueString
                   value="Dental care is only free on referral. Your child’s care will normally be managed by the Auckland Regional Dental Services (ARDs)."/>
    </extension>
  </extension>

```

**Example instances**

[Organization with funded programme](Organization-organization-funded-programme.md)

**Usage info**

**Usages:**

* Use this Extension: [HealthcareService resource for use in NZ](StructureDefinition-NzHealthcareService.md), [Location resource for use in NZ](StructureDefinition-NzLocation.md) and [Organization resource for use in NZ](StructureDefinition-NzOrganization.md)
* Examples for this Extension: [Dianes Dental care](Organization-organization-funded-programme.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-funded-programme.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-funded-programme.csv), [Excel](StructureDefinition-funded-programme.xlsx), [Schematron](StructureDefinition-funded-programme.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "funded-programme",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/funded-programme",
  "version" : "1.0",
  "name" : "Funded_programme",
  "title" : "Funded Healthcare Programme",
  "status" : "active",
  "date" : "2021-02-08",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Funded NZ Healthcare Programmes",
  "purpose" : "Details of a NZ Healthcare Funded Programme relevant to its implementation status at an individual organisation, facility or service.",
  "copyright" : "HL7 New Zealand© 2021+; Licensed Under Creative Commons No Rights Reserved.",
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
    "expression" : "Location"
  },
  {
    "type" : "element",
    "expression" : "Organization"
  },
  {
    "type" : "element",
    "expression" : "HealthcareService"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Funded Healthcare Programme",
      "definition" : "Funded NZ Healthcare Programmes"
    },
    {
      "id" : "Extension.extension:fundedProgramme",
      "path" : "Extension.extension",
      "sliceName" : "fundedProgramme",
      "definition" : "The type of healthcare programme",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:fundedProgramme.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:fundedProgramme.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "fundedProgramme"
    },
    {
      "id" : "Extension.extension:fundedProgramme.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "required",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/funded-programme-code"
      }
    },
    {
      "id" : "Extension.extension:currentAvailability",
      "path" : "Extension.extension",
      "sliceName" : "currentAvailability",
      "definition" : "The current status",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:currentAvailability.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:currentAvailability.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "currentAvailability"
    },
    {
      "id" : "Extension.extension:currentAvailability.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "boolean"
      }]
    },
    {
      "id" : "Extension.extension:notes",
      "path" : "Extension.extension",
      "sliceName" : "notes",
      "definition" : "Further details about the programme and status.",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:notes.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:notes.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "notes"
    },
    {
      "id" : "Extension.extension:notes.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/funded-programme"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
