# EDI Address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDI Address**

## Extension: EDI Address 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/edi-address | *Version*:0.1.0 |
| Active as of 2020-07-20 | *Computable Name*:Edi_address |
| **Copyright/Legal**: HL7 New Zealand© 2020+; Licensed Under Creative Commons No Rights Reserved. | |

Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred.

**Context of Use**

This extension has been deprecated, and the [Messaging Address](StructureDefinition-messaging-address.md) extension should be used instead. The status will be changed to 'retired' in the next version of this guide.

This extension allows an EDI address to be added to the ContactPoint.system element.

As the FHIR specification has a [required](https://hl7.org/fhir/R4/terminologies.html#required) binding for this element, it is necessary to provide a value from the defined set (eg 'other') then place the extension on that value.

The actual value of the edi address is the .value element.

In the example below, the extension (on telecom.system) indicates that this is an EDI address supplied by HealthLink. The actual value of the EDI address (on telecom.value) is 001a

**Example of extension**

```

  <telecom>
    <system value="other">
      <extension url="http://hl7.org.nz/fhir/StructureDefinition/edi-address">
        <valueString value="healthlink"/>
      </extension>
    </system>
    <value value="001a"/>
  </telecom>


```

**Example instances**

[Patient with EDI Address](Practitioner-practitioner-edi-address.md)

**Usage info**

**Usages:**

* Examples for this Extension: [Health R Us](Organization-organization-edi-address.md) and [Practitioner/practitioner-edi-address](Practitioner-practitioner-edi-address.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-edi-address.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-edi-address.csv), [Excel](StructureDefinition-edi-address.xlsx), [Schematron](StructureDefinition-edi-address.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "edi-address",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address",
  "version" : "0.1.0",
  "name" : "Edi_address",
  "title" : "EDI Address",
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
  "description" : "Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred.",
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
    "expression" : "ContactPoint.system"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "EDI Address",
      "definition" : "Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    }]
  }
}

```
