# organization-edi-address - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **organization-edi-address**

## Example Organization: organization-edi-address

**name**: Health R Us

### Contacts

| | | |
| :--- | :--- | :--- |
| - | **Name** | **Telecom** |
| * | HealthLink EDI account | -unknown- |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "organization-edi-address",
  "name" : "Health R Us",
  "contact" : [{
    "name" : {
      "text" : "HealthLink EDI account"
    },
    "telecom" : [{
      "system" : "other",
      "_system" : {
        "extension" : [{
          "url" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address",
          "valueString" : "ABC-876"
        }]
      }
    }]
  }]
}

```
