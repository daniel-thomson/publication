# Messaging Address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Messaging Address**

## Extension: Messaging Address 

| | |
| :--- | :--- |
| *Official URL*:http://hl7.org.nz/fhir/StructureDefinition/messaging-address | *Version*:0.1.0 |
| Active as of 2022-07-20 | *Computable Name*:Messaging_address |

The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address.

**Context of Use**

**Example of extension**

```

 <extension url="http://hl7.org.nz/fhir/StructureDefinition/messaging-address">
    <extension url="provider">
      <valueString value="healthLink"/>
    </extension>
    <extension url="value">
      <valueString value="abc123"/>
    </extension>
  </extension>


```

**Example instances**

[PractitionerRole with messaging address](PractitionerRole-practitionerRole-messaging-address.md)

**Usage info**

**Usages:**

* Use this Extension: [HealthcareService resource for use in NZ](StructureDefinition-NzHealthcareService.md), [Location resource for use in NZ](StructureDefinition-NzLocation.md), [Organization resource for use in NZ](StructureDefinition-NzOrganization.md), [NZ Patient](StructureDefinition-NzPatient.md)... Show 2 more, [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md) and [PractitionerRole resource for use in NZ](StructureDefinition-NzPractitionerRole.md)
* Examples for this Extension: [Patient/patient-messaging-address](Patient-patient-messaging-address.md) and [PractitionerRole/practitionerRole-messaging-address](PractitionerRole-practitionerRole-messaging-address.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/fhir.org.nz.ig.base|current/StructureDefinition/StructureDefinition-messaging-address.json)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-messaging-address.csv), [Excel](StructureDefinition-messaging-address.xlsx), [Schematron](StructureDefinition-messaging-address.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "messaging-address",
  "url" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address",
  "version" : "0.1.0",
  "name" : "Messaging_address",
  "title" : "Messaging Address",
  "status" : "active",
  "date" : "2022-07-20",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address.",
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
    "expression" : "Patient"
  },
  {
    "type" : "element",
    "expression" : "Location"
  },
  {
    "type" : "element",
    "expression" : "Organization"
  },
  {
    "type" : "element",
    "expression" : "HealthcareService"
  },
  {
    "type" : "element",
    "expression" : "PractitionerRole"
  },
  {
    "type" : "element",
    "expression" : "Practitioner"
  }],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Extension",
      "path" : "Extension",
      "short" : "Messaging Address",
      "definition" : "The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address."
    },
    {
      "id" : "Extension.extension",
      "path" : "Extension.extension",
      "min" : 2
    },
    {
      "id" : "Extension.extension:provider",
      "path" : "Extension.extension",
      "sliceName" : "provider",
      "definition" : "The messaging provider",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:provider.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:provider.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "provider"
    },
    {
      "id" : "Extension.extension:provider.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.extension:value",
      "path" : "Extension.extension",
      "sliceName" : "value",
      "definition" : "The identifier supplied by the provider",
      "min" : 1,
      "max" : "1"
    },
    {
      "id" : "Extension.extension:value.extension",
      "path" : "Extension.extension.extension",
      "max" : "0"
    },
    {
      "id" : "Extension.extension:value.url",
      "path" : "Extension.extension.url",
      "fixedUri" : "value"
    },
    {
      "id" : "Extension.extension:value.value[x]",
      "path" : "Extension.extension.value[x]",
      "type" : [{
        "code" : "string"
      }]
    },
    {
      "id" : "Extension.url",
      "path" : "Extension.url",
      "fixedUri" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address"
    },
    {
      "id" : "Extension.value[x]",
      "path" : "Extension.value[x]",
      "max" : "0"
    }]
  }
}

```
