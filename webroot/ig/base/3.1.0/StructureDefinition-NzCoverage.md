# Coverage resource for use in NZ (Trial use) - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Coverage resource for use in NZ (Trial use)**

## Resource Profile: Coverage resource for use in NZ (Trial use) 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzCoverage | *Version*:1.0.0 |
| Draft as of 2026-07-24 | *Computable Name*:NzCoverage |

 
Coverage resource for use in NZ (Trial use) 

 
Trial use profile on Coverage for NZ use. Primarily changing the type valueset. Inclusion of the profile in future IG versions will depend on Implementer feedback. 

**Usages:**

* Examples for this Profile: [Coverage/CoverageCSC](Coverage-CoverageCSC.md), [Coverage/CoverageGMS](Coverage-CoverageGMS.md) and [Coverage/CoverageHUHC](Coverage-CoverageHUHC.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzCoverage.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzCoverage.csv), [Excel](StructureDefinition-NzCoverage.xlsx), [Schematron](StructureDefinition-NzCoverage.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzCoverage",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage",
  "version" : "1.0.0",
  "name" : "NzCoverage",
  "title" : "Coverage resource for use in NZ (Trial use)",
  "status" : "draft",
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Coverage resource for use in NZ (Trial use)",
  "purpose" : "Trial use profile on Coverage for NZ use. Primarily changing the type valueset. Inclusion of the profile in future IG versions will depend on Implementer feedback.  ",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "workflow",
    "uri" : "http://hl7.org/fhir/workflow",
    "name" : "Workflow Pattern"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "w5",
    "uri" : "http://hl7.org/fhir/fivews",
    "name" : "FiveWs Pattern Mapping"
  },
  {
    "identity" : "cdanetv4",
    "uri" : "http://www.cda-adc.ca/en/services/cdanet/",
    "name" : "Canadian Dental Association eclaims standard"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "cpha3pharm",
    "uri" : "http://www.pharmacists.ca/",
    "name" : "Canadian Pharmacy Associaiton eclaims standard"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Coverage",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Coverage",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Coverage",
      "path" : "Coverage"
    },
    {
      "id" : "Coverage.type",
      "path" : "Coverage.type",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code"
      }
    },
    {
      "id" : "Coverage.class.type",
      "path" : "Coverage.class.type",
      "binding" : {
        "strength" : "extensible",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code"
      }
    }]
  }
}

```
