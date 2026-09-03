# Common NZ Address datatype - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Common NZ Address datatype**

## Data Type Profile: Common NZ Address datatype 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/NzAddress | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:NzAddress |

 
Adds building name, suburb, domicile code and geocode to the Address datatype 

**Usages:**

* Use this DataType Profile: [NZ Patient](StructureDefinition-NzPatient.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-NzAddress.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-NzAddress.csv), [Excel](StructureDefinition-NzAddress.xlsx), [Schematron](StructureDefinition-NzAddress.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "NzAddress",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/NzAddress",
  "version" : "1.0.0",
  "name" : "NzAddress",
  "title" : "Common NZ Address datatype",
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
  "description" : "Adds building name, suburb, domicile code and geocode to the Address datatype",
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
  },
  {
    "identity" : "vcard",
    "uri" : "http://w3.org/vcard",
    "name" : "vCard Mapping"
  }],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Address",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Address",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Address",
      "path" : "Address"
    },
    {
      "id" : "Address.extension:nz-geocode",
      "path" : "Address.extension",
      "sliceName" : "nz-geocode",
      "short" : "A geocode using the NZ specific datum (reference point)",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/nz-geocode"]
      }]
    },
    {
      "id" : "Address.extension:suburb",
      "path" : "Address.extension",
      "sliceName" : "suburb",
      "short" : "The suburb part of the address",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/suburb"]
      }]
    },
    {
      "id" : "Address.extension:building-name",
      "path" : "Address.extension",
      "sliceName" : "building-name",
      "short" : "The name of the building",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/building-name"]
      }]
    },
    {
      "id" : "Address.extension:domicile-code",
      "path" : "Address.extension",
      "sliceName" : "domicile-code",
      "short" : "The domicile code associated with this address",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/domicile-code"]
      }]
    },
    {
      "id" : "Address.extension:country-name",
      "path" : "Address.extension",
      "sliceName" : "country-name",
      "short" : "The name of the country. The ISO code should be in the country property",
      "min" : 0,
      "max" : "1",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://hl7.org.nz/fhir/StructureDefinition/country-name"]
      }]
    },
    {
      "id" : "Address.country",
      "path" : "Address.country",
      "short" : "Should be the ISO 3166 code"
    }]
  }
}

```
