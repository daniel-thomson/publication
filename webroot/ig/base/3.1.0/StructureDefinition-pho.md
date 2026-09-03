# Primary Healthcare Organisation - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Primary Healthcare Organisation**

## Extension: Primary Healthcare Organisation 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/pho | *Version*:1.0 | |
| Active as of 2020-11-06 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 1 | *Computable Name*:Pho |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP).

Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related Primary Healthcare Organisation.

**Context of Use**

**Example of extension**

```

<extension url="http://hl7.org.nz/fhir/StructureDefinition/pho">
    <valueCodeableConcept>
        <coding>
            <system value="https://standards.digital.health.nz/ns/pho-code"/>
            <version value="1.0"/>
            <code value="G05533-K"/>
            <display value="Procare Networks Ltd"/>
        </coding>
    </valueCodeableConcept>
</extension>


```

**Example instances**

[Patient with PHO](Patient-patient-pho.md)

**Usage info**

**Usages:**

* Use this Extension: [HealthcareService resource for use in NZ](StructureDefinition-NzHealthcareService.md), [Location resource for use in NZ](StructureDefinition-NzLocation.md) and [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-pho](Patient-patient-pho.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-pho.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-pho.csv), [Excel](StructureDefinition-pho.xlsx), [Schematron](StructureDefinition-pho.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "pho",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 1
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/pho",
  "version" : "1.0",
  "name" : "Pho",
  "title" : "Primary Healthcare Organisation",
  "status" : "active",
  "date" : "2020-11-06",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP).",
  "purpose" : "Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related Primary Healthcare Organisation.",
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
    "expression" : "HealthcareService"
  },
  {
    "type" : "element",
    "expression" : "Location"
  },
  {
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
      "short" : "Primary Healthcare Organisation",
      "definition" : "Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/pho"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "pho Code",
      "short" : "NZ Primary Healthcare Organisations",
      "definition" : "NZ Primary Healthcare Organisations as defined in the NZ Health Provider Index Listing published by the NZ Ministry of Health each month.",
      "requirements" : "The Nzpho ValueSet should be used as this provides the correct NZ HPI-ORG ID for each of the 30 Primary Healthcare Organisations.The binding strength is extensible as this is the most suitable option for a Codeable Concept data type.",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "example" : [{
        "label" : "Procare Networks Ltd",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "https://standards.digital.health.nz/ns/pho-code",
            "code" : "G05533-K",
            "display" : "Procare Networks Limited"
          }]
        }
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "NZ HPI-ORG Values for PHOs",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/pho-code"
      }
    }]
  }
}

```
