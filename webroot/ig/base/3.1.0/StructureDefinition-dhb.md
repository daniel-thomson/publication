# District Health Board linked to a NZ Healthcare Service, Location or Patient - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **District Health Board linked to a NZ Healthcare Service, Location or Patient**

## Extension: District Health Board linked to a NZ Healthcare Service, Location or Patient 

| | | |
| :--- | :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/dhb | *Version*:1.0 | |
| Active as of 2020-07-31 | [Maturity Level](http://hl7.org/fhir/versions.html#maturity): 3 | *Computable Name*:Dhb |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | | |

District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address).

Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related District Health Board.

**Context of Use**

**Example of extension**

```

  <extension url="http://hl7.org.nz/fhir/StructureDefinition/dhb">
    <valueCodeableConcept>
      <coding>
        <system value="https://standards.digital.health.nz/ns/dhb-code"/>
        <code value="G00026-A"/>
        <display value="Northland"/>
      </coding>
    </valueCodeableConcept>
  </extension>


```

**Example instances**

[Patient with DHB](Patient-patient-dhb.md)

**Usage info**

**Usages:**

* Use this Extension: [HealthcareService resource for use in NZ](StructureDefinition-NzHealthcareService.md), [Location resource for use in NZ](StructureDefinition-NzLocation.md) and [NZ Patient](StructureDefinition-NzPatient.md)
* Examples for this Extension: [Patient/patient-address-building-name](Patient-patient-address-building-name.md), [Patient/patient-address-suburb](Patient-patient-address-suburb.md) and [Patient/patient-dhb](Patient-patient-dhb.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-dhb.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-dhb.csv), [Excel](StructureDefinition-dhb.xlsx), [Schematron](StructureDefinition-dhb.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "dhb",
  "extension" : [{
    "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-fmm",
    "valueInteger" : 3
  }],
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/dhb",
  "version" : "1.0",
  "name" : "Dhb",
  "title" : "District Health Board linked to a NZ Healthcare Service, Location or Patient",
  "status" : "active",
  "date" : "2020-07-31",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address).",
  "purpose" : "Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related District Health Board.",
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
      "short" : "District Health Board linked to a NZ Healthcare Service, Location or Patient",
      "definition" : "District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address)."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/dhb"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "label" : "DHB Code",
      "short" : "NZ District Health Boards",
      "definition" : "NZ District Health Boards as defined in the NZ Health Provider Index Listing published by the NZ Ministry of Health each month.",
      "requirements" : "The NzDHB ValueSet should be used as this provides the correct NZ HPI-ORG ID for each of the 20 District Health Boards.The binding strength is extensible as this is the most suitable option for a Codeable Concept data type.",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "example" : [{
        "label" : "Waikato DHB",
        "valueCodeableConcept" : {
          "coding" : [{
            "system" : "https://standards.digital.health.nz/ns/dhb-code",
            "version" : "1.0",
            "code" : "G00027-C",
            "display" : "Waikato District Health Board"
          }]
        }
      }],
      "binding" : {
        "strength" : "extensible",
        "description" : "NZ HPI-ORG Values for DHBs",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/dhb-code"
      }
    }]
  }
}

```
