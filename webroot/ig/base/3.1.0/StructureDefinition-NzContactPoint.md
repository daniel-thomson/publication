# Common NZ ContactPoint datatype - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Common NZ ContactPoint datatype**

## Data Type Profile: Common NZ ContactPoint datatype 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzContactpoint | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:NzContactPoint |

 
This profile adds the Contact Point Purpose and EDI address extensions to the standard data type 

**Usages:**

* Use this DataType Profile: [NZ Patient](StructureDefinition-NzPatient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzContactPoint.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzContactPoint.csv), [Excel](StructureDefinition-NzContactPoint.xlsx), [Schematron](StructureDefinition-NzContactPoint.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzContactPoint",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzContactpoint",
  "version" : "1.0.0",
  "name" : "NzContactPoint",
  "title" : "Common NZ ContactPoint datatype",
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
  "description" : "This profile adds the Contact Point Purpose and EDI address extensions to the standard data type",
  "fhirVersion" : "4.0.1",
  "mapping" : [{
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "rim",
    "uri" : "http://hl7.org/v3",
    "name" : "RIM Mapping"
  },
  {
    "identity" : "servd",
    "uri" : "http://www.omg.org/spec/ServD/1.0/",
    "name" : "ServD"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "ContactPoint",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/ContactPoint",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "ContactPoint",
      "path" : "ContactPoint"
    },
    {
      "id" : "ContactPoint.extension:cp-purpose",
      "path" : "ContactPoint.extension",
      "sliceName" : "cp-purpose",
      "short" : "The business reason this ContactPoint is being used",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose"]
      }]
    }]
  }
}

```
