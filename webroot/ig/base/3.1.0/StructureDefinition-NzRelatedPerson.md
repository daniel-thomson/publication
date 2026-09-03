# NZ RelatedPerson - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ RelatedPerson**

## Resource Profile: NZ RelatedPerson 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzRelatedPerson | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:NzRelatedPerson |

 
The base New Zealand RelatedPerson profile 

 
Describe the Base New Zealand RelatedPerson resource profile 

**Usages:**

* This Profile is not used by any profiles in this Specification

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzRelatedPerson.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzRelatedPerson.csv), [Excel](StructureDefinition-NzRelatedPerson.xlsx), [Schematron](StructureDefinition-NzRelatedPerson.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzRelatedPerson",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzRelatedPerson",
  "version" : "1.0.0",
  "name" : "NzRelatedPerson",
  "title" : "NZ RelatedPerson",
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
  "description" : "The base New Zealand RelatedPerson profile",
  "purpose" : "Describe the Base New Zealand RelatedPerson resource profile",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "RelatedPerson",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/RelatedPerson",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "RelatedPerson",
      "path" : "RelatedPerson"
    },
    {
      "id" : "RelatedPerson.relationship",
      "path" : "RelatedPerson.relationship",
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "http://hl7.org.nz/fhir/ValueSet/nz-relationship-type"
      }
    }]
  }
}

```
