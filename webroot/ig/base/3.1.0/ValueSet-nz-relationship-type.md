# NZ Relationship Type - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Relationship Type**

## ValueSet: NZ Relationship Type 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/ValueSet/nz-relationship-type | *Version*:1.1.0 |
| Active as of 2026-07-24 | *Computable Name*:NzRelationshipType |

 
New Zealand relationship types, extending the HL7 related person relationship types with Māori concepts. 

 **References** 

* [NZ RelatedPerson](StructureDefinition-NzRelatedPerson.md)

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
  "id" : "nz-relationship-type",
  "meta" : {
    "versionId" : "4",
    "lastUpdated" : "2026-05-07T20:44:22.096+12:00",
    "tag" : [{
      "system" : "https://standards.digital.health.nz/ns/nzhts-usage-tags",
      "code" : "NZBase"
    }]
  },
  "url" : "http://hl7.org.nz/fhir/ValueSet/nz-relationship-type",
  "version" : "1.1.0",
  "name" : "NzRelationshipType",
  "title" : "NZ Relationship Type",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand relationship types, extending the HL7 related person relationship types with Māori concepts.",
  "compose" : {
    "include" : [{
      "valueSet" : ["http://hl7.org/fhir/ValueSet/relatedperson-relationshiptype"]
    },
    {
      "system" : "http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes"
    }]
  }
}

```
