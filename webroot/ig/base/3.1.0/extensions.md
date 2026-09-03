# Extensions - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* **Extensions**

## Extensions

| | | | | |
| :--- | :--- | :--- | :--- | :--- |
| Id | Canonical url | Context of Use | Description | Purpose |
| [acc-patient-occupation](StructureDefinition-acc-patient-occupation.md) | http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation | * Patient
 | Codes to describe a patient's occupation, using ACC's patient occupation codeset.Note that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'. |  |
| [additional-authorisation](StructureDefinition-additional-authorisation.md) | http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation | * Practitioner.qualification
 | Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include:* Prescribing authorisation for a nurse practitioner
* Authorisation to administer immunisations
 |  |
| [alias-type](StructureDefinition-alias-type.md) | http://hl7.org.nz/fhir/StructureDefinition/alias-type | * Location.alias
* Organization.alias
 | Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name. |  |
| [building-name](StructureDefinition-building-name.md) | http://hl7.org.nz/fhir/StructureDefinition/building-name | * Address
 | The name of a building cited in an address. |  |
| [condition-on-practice](StructureDefinition-condition-on-practice.md) | http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice | * Practitioner.qualification
 | A full description of the conditions the health practitioner is subject to in relation to their scope of practice. |  |
| [contactpoint-purpose](StructureDefinition-contactpoint-purpose.md) | http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose | * ContactPoint
 | A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing. |  |
| [country-name](StructureDefinition-country-name.md) | http://hl7.org.nz/fhir/StructureDefinition/country-name | * Address
 | The display name for a country in an address. |  |
| [death-date](StructureDefinition-death-date.md) | http://hl7.org.nz/fhir/StructureDefinition/death-date | * Practitioner
 | The date of death of the individual, plus the source of that information |  |
| [dhb](StructureDefinition-dhb.md) | http://hl7.org.nz/fhir/StructureDefinition/dhb | * HealthcareService
* Location
* Patient
 | District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address). | Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related District Health Board. |
| [domicile-code](StructureDefinition-domicile-code.md) | http://hl7.org.nz/fhir/StructureDefinition/domicile-code | * Patient
* Address
 | NZ Domicile Code. Derived from a patient's primary physical, home address. |  |
| [edi-address](StructureDefinition-edi-address.md) | http://hl7.org.nz/fhir/StructureDefinition/edi-address | * ContactPoint.system
 | Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred. |  |
| [educational-qualification](StructureDefinition-educational-qualification.md) | http://hl7.org.nz/fhir/StructureDefinition/educational-qualification | * Practitioner
* Practitioner.qualification
 | Educational qualifications a practitioner has. These may or may not be related to registration information. |  |
| [established](StructureDefinition-established.md) | http://hl7.org.nz/fhir/StructureDefinition/established | * Location
* Organization
 | The period over which the location or Organization is open |  |
| [funded-programme](StructureDefinition-funded-programme.md) | http://hl7.org.nz/fhir/StructureDefinition/funded-programme | * Location
* Organization
* HealthcareService
 | Funded NZ Healthcare Programmes | Details of a NZ Healthcare Funded Programme relevant to its implementation status at an individual organisation, facility or service. |
| [gender-original-text](StructureDefinition-gender-original-text.md) | http://hl7.org.nz/fhir/StructureDefinition/gender-original-text | * Patient.gender
 | Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)'). |  |
| [information-source](StructureDefinition-information-source.md) | http://hl7.org.nz/fhir/StructureDefinition/information-source | * Patient.name
* Patient.birthDate
* Patient.deceased
 | The official source of information held about a patient. |  |
| [long-term-condition](StructureDefinition-long-term-condition.md) | http://hl7.org.nz/fhir/StructureDefinition/long-term-condition | * Condition
 | Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives. | For more info see [https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions](https://www.tewhatuora.govt.nz/for-the-health-sector/health-sector-guidance/diseases-and-conditions/long-term-conditions). |
| [maori-descent](StructureDefinition-maori-descent.md) | http://hl7.org.nz/fhir/StructureDefinition/maori-descent | * Patient
 | Code indicating whether the person is of Māori descent |  |
| [messaging-address](StructureDefinition-messaging-address.md) | http://hl7.org.nz/fhir/StructureDefinition/messaging-address | * Patient
* Location
* Organization
* HealthcareService
* PractitionerRole
* Practitioner
 | The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address. |  |
| [nz-citizenship](StructureDefinition-nz-citizenship.md) | http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship | * Patient
 | New Zealand citizenship |  |
| [nz-ethnicity](StructureDefinition-nz-ethnicity.md) | http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity | * Patient
* Practitioner
* RelatedPerson
 | The ethnic group or groups that a person identifies with or feels they belong to. Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen. Ethnicity is self-perceived and a person can belong to more than one group.The Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17). |  |
| [nz-geocode](StructureDefinition-nz-geocode.md) | http://hl7.org.nz/fhir/StructureDefinition/nz-geocode | * Address
 | New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode. |  |
| [nz-iwi](StructureDefinition-nz-iwi.md) | http://hl7.org.nz/fhir/StructureDefinition/nz-iwi | * Patient
* Practitioner
* RelatedPerson
 | Persons Iwi affiliation |  |
| [nz-residency](StructureDefinition-nz-residency.md) | http://hl7.org.nz/fhir/StructureDefinition/nz-residency | * Patient
 | NZ Residency status |  |
| [nzeps-long-term-medication](StructureDefinition-nzeps-long-term-medication.md) | http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication | * MedicationRequest
* MedicationStatement
 | NZePS Long Term Medication Indicator | This has specific uses in NZ Pharmacy and GP systems for funding and clinical purposes. It is also part of the HISO 10041.1 standard for Medication Lists. |
| [nzeps-supply-period-reason](StructureDefinition-nzeps-supply-period-reason.md) | http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason | * MedicationRequest
 | The reason for a non-standard Supply Period. | The reason for a non-standard supply period, e.g. the patient going abroad. |
| [nzeps-unusual-dose-quantity](StructureDefinition-nzeps-unusual-dose-quantity.md) | http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity | * MedicationRequest
 | NZePS Unusual Dose Quantity Indicator | Indicates if an unusual dose quantity has been prescribed deliberately. |
| [nzf-atc](StructureDefinition-nzf-atc.md) | http://hl7.org.nz/fhir/StructureDefinition/nzf-atc | * Medication
 | Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification |  |
| [nzf-nzmt-type](StructureDefinition-nzf-nzmt-type.md) | http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type | * Medication
 | The NZ Medicines Terminology (NZMT) Data Class – MP (Medicinal Product), MPUU (Medicinal Product Unit of Use), MPP (Medicinal Product Pack), TP (Trade Product), TPUU (Trade Product Unit of Use), TPP (Trade Product Pack) or CTPP (Containered Trade Product Pack) – that the Medication is a member of. |  |
| [pho](StructureDefinition-pho.md) | http://hl7.org.nz/fhir/StructureDefinition/pho | * HealthcareService
* Location
* Patient
 | Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP). | Administrative - to allow NZ HealthcareService, Location (Facility) or Patient Resources to include the related Primary Healthcare Organisation. |
| [practitionerRole-creator](StructureDefinition-practitionerRole-creator.md) | http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator | * PractitionerRole
 | The organisation and person that created this role |  |
| [practitionerRole-status-reason](StructureDefinition-practitionerRole-status-reason.md) | http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason | * PractitionerRole
 | The reason for the status. Generally only used for inactive resources. |  |
| [registration-initial-date](StructureDefinition-registration-initial-date.md) | http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date | * Practitioner.qualification
 | The date the practitioner first became registered with the Responsible Authority or professional body |  |
| [registration-status-code](StructureDefinition-registration-status-code.md) | http://hl7.org.nz/fhir/StructureDefinition/registration-status-code | * Practitioner.qualification
 | An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body. |  |
| [scope-of-practice](StructureDefinition-scope-of-practice.md) | http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice | * Practitioner.qualification
 | The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body. |  |
| [sex-at-birth](StructureDefinition-sex-at-birth.md) | http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth | * Patient
 | A person’s sex at the time of their birth (considered to be immutable). |  |
| [suburb](StructureDefinition-suburb.md) | http://hl7.org.nz/fhir/StructureDefinition/suburb | * Address
 | Suburb element of a NZ Address. | Required as FHIR Base Address Type does not contain an element for Suburb (only District or State which, in population terms, are both broader than City - whereas Suburb is narrower). |

