# NZ Geocode - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **NZ Geocode**

## Extension: NZ Geocode 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/nz-geocode | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Nz_geocode |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode.

**Context of Use**

**Example of extension**

```
<extension url = http://hl7.org.nz/fhir/StructureDefinition/nz-geocode>
     <extension url= "latitude">
      <valueDecimal value="-35.99">
    </extension>
    <extension url= "longitude">
      <valueDecimal value="174.47">
    </extension>
    <extension url="datumCode">
      <valueCodeableConcept>
        <coding>
          <system value="https://standards.digital.health.nz/ns/nz-datum-code"/>
          <code value="NZGD2000"/>
          <display value="Nz official datum, used by MoH address service"/>
        </coding>
      </valueCodeableConcept>
    </extension>
</extension>

```

**Example instances**

[Patient with geocoded address](Patient-patient-nz-geocode.md)

**Usage info**

**Usages:**

* Use this Extension: [Common NZ Address datatype](StructureDefinition-NzAddress.md)
* Examples for this Extension: [Patient/patient-nz-geocode](Patient-patient-nz-geocode.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-nz-geocode.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-nz-geocode.csv), [Excel](StructureDefinition-nz-geocode.xlsx), [Schematron](StructureDefinition-nz-geocode.sch) 

#### Terminology Bindings

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "nz-geocode",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/nz-geocode",
  "version" : "0.1.0",
  "name" : "Nz_geocode",
  "title" : "NZ Geocode",
  "status" : "active",
  "date" : "2020-07-20",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode.",
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
    "expression" : "Address"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "NZ Geocode",
      "definition" : "New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:latitude",
      "path" : "Extension.extension",
      "sliceName" : "latitude",
      "definition" : "The latitude of the geocode",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:latitude.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:latitude.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "latitude"
    },
    {
      "id" : "Extension.extension:latitude.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "Extension.extension:longitude",
      "path" : "Extension.extension",
      "sliceName" : "longitude",
      "definition" : "The longitude of the geocode",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:longitude.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:longitude.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "longitude"
    },
    {
      "id" : "Extension.extension:longitude.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "decimal"
      }]
    },
    {
      "id" : "Extension.extension:datumCode",
      "path" : "Extension.extension",
      "sliceName" : "datumCode",
      "definition" : "The datum used for the lat/long",
      "min" : 0,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:datumCode.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:datumCode.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "datumCode"
    },
    {
      "id" : "Extension.extension:datumCode.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "CodeableConcept"
      }],
      "binding" : {
        "strength" : "preferred",
        "valueSet" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-datum-code"
      }
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/nz-geocode"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
