# Ethnicity of a person (full) - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ethnicity of a person (full)**

## ValueSet: Ethnicity of a person (full) 

| | |
| :--- | :--- |
| *Official URL*:https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code | *Version*:2.1.0 |
| Active as of 2023-11-03 | *Computable Name*:Ethnicityfull |

 
Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. This ValueSet contains all levels of classification. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "Ethnicityfull",
  "meta" : {
    "versionId" : "7",
    "lastUpdated" : "2026-06-26T15:30:35.014+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code",
  "version" : "2.1.0",
  "name" : "Ethnicityfull",
  "title" : "Ethnicity of a person (full)",
  "status" : "active",
  "experimental" : false,
  "date" : "2023-11-03T00:00:00.000Z",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. This ValueSet contains all levels of classification.",
  "compose" : {
    "include" : [{
      "system" : "https://standards.digital.health.nz/ns/nz-ethnic-group-codes",
      "version" : "2.1.0"
    }]
  }
}

```
