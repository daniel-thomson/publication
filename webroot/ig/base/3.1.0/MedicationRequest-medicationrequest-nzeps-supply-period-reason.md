# medicationrequest-nzeps-supply-period-reason - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **medicationrequest-nzeps-supply-period-reason**

## Example MedicationRequest: medicationrequest-nzeps-supply-period-reason

**NZePS Supply Period Reason**: Going overseas

**status**: Active

**intent**: Order

**medication**: Codeine phosphate

**subject**: [John Doe Male, DoB: 1998-01-01](Patient-patient-dhb.md)



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "medicationrequest-nzeps-supply-period-reason",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason",
    "valueString" : "Going overseas"
  }],
  "status" : "active",
  "intent" : "order",
  "medicationCodeableConcept" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "261000",
      "display" : "Codeine phosphate"
    }]
  },
  "subject" : {
    "reference" : "Patient/patient-dhb"
  }
}

```
