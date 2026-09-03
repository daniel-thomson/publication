# Ethnicity of a person (L4) - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ethnicity of a person (L4)**

## ValueSet: Ethnicity of a person (L4) 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code | *Version*:2.1.0 |
| Active as of 2022-08-29 | *Computable Name*:Ethnicity |

 
Codes to record a person's ethnicity, drawn from [Level 4 of the Ethnicity code system](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17) 

 **References** 

* [NZ Ethnicity](StructureDefinition-nz-ethnicity.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "ethnicity",
  "meta" : {
    "versionId" : "11",
    "lastUpdated" : "2026-05-07T20:41:02.441+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code",
  "version" : "2.1.0",
  "name" : "Ethnicity",
  "title" : "Ethnicity of a person (L4)",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-08-29T12:59:31+00:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Codes to record a person's ethnicity, drawn from [Level 4 of the Ethnicity code system](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17)",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/ethnic-group-level-4-code",
      "version" : "2.1.0"
    }]
  }
}

```
