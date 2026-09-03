# condition-long-term-condition - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **condition-long-term-condition**

## Example Condition: condition-long-term-condition

**Long Term Condition Indicator**: true

**code**: Benign essential hypertension (disorder)

**subject**: [John Doe Male, DoB: 1998-01-01](Patient-patient-dhb.md)



## Resource Content

```json
{
  "resourceType" : "Condition",
  "id" : "condition-long-term-condition",
  "extension" : [{
    "url" : "http://hl7.org.nz/fhir/StructureDefinition/long-term-condition",
    "valueBoolean" : true
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "1201005",
      "display" : "Benign essential hypertension (disorder)"
    }]
  },
  "subject" : {
    "reference" : "Patient/patient-dhb"
  }
}

```
