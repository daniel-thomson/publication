# practitionerRole-messaging-address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **practitionerRole-messaging-address**

## Example PractitionerRole: practitionerRole-messaging-address

> **Messaging Address**
* provider: healthLink
* value: abc123



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "practitionerRole-messaging-address",
  "extension" : [{
    "extension" : [{
      "url" : "provider",
      "valueString" : "healthLink"
    },
    {
      "url" : "value",
      "valueString" : "abc123"
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address"
  }]
}

```
