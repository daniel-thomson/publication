# medicationrequest-nzeps-long-term-medication - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **medicationrequest-nzeps-long-term-medication**

## Example MedicationRequest: medicationrequest-nzeps-long-term-medication

**NZePS Long Term Medication Indicator**: true

**status**: Active

**intent**: Order

**medication**: Codeine phosphate

**subject**: [John Doe Male, DoB: 1998-01-01](Patient-patient-dhb.md)



## Resource Content

```json
{
  "resourceType" : "MedicationRequest",
  "id" : "medicationrequest-nzeps-long-term-medication",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication",
    "valueBoolean" : true
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
