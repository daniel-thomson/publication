# organization-funded-programme - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **organization-funded-programme**

## Example Organization: organization-funded-programme

> **Funded Healthcare Programme**
* fundedProgramme: Dental Care - Children up to age 13
* currentAvailability: true
* notes: Dental care is only free on referral. Your child’s care will normally be managed by the Auckland Regional Dental Services (ARDs).

**name**: Dianes Dental care



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "organization-funded-programme",
  "extension" : [{
    "extension" : [{
      "url" : "fundedProgramme",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "https://standards.digital.health.nz/ns/funded-programme-code",
          "code" : "DENTAL_CHILD",
          "display" : "Dental Care - Children up to age 13"
        }]
      }
    },
    {
      "url" : "currentAvailability",
      "valueBoolean" : true
    },
    {
      "url" : "notes",
      "valueString" : "Dental care is only free on referral. Your child’s care will normally be managed by the Auckland Regional Dental Services (ARDs)."
    }],
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/funded-programme"
  }],
  "name" : "Dianes Dental care"
}

```
