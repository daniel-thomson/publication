# Established - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Established**

## Extension: Established 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/established | *Version*:1.0.0 |
| Active as of 2026-07-24 | *Computable Name*:Established |

The period over which the location or Organization is open

**Context of Use**

**Example of extension**

```

<Location xmlns="http://hl7.org/fhir">
 ...
  <extension url="http://hl7.org.nz/fhir/StructureDefinition/established">
    <valuePeriod>
      <start value="2010-01-01"/>
    </valuePeriod>
  </extension>
  <name value="Daves health centre"/>
  <alias value="Best health"/>
  ...
</Location>


```

**Example instances**

[Location with established](Location-location-established.md)

**Usage info**

**Usages:**

* Use this Extension: [Location resource for use in NZ](StructureDefinition-NzLocation.md) and [Organization resource for use in NZ](StructureDefinition-NzOrganization.md)
* Examples for this Extension: [Daves health centre](Location-location-established.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-established.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-established.csv), [Excel](StructureDefinition-established.xlsx), [Schematron](StructureDefinition-established.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "established",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/established",
  "version" : "1.0.0",
  "name" : "Established",
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
  "description" : "The period over which the location or Organization is open",
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
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "definition" : "The period over which the location or Organization is open"
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/established"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "Period"
      }]
    }]
  }
}

```
