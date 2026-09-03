# Artifacts Summary - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Condition resource for use in NZ](StructureDefinition-NzCondition.md) | This profile adds the Long-Term Condition extension to the base Condition resource |
| [Coverage resource for use in NZ (Trial use)](StructureDefinition-NzCoverage.md) | Coverage resource for use in NZ (Trial use) |
| [HealthcareService resource for use in NZ](StructureDefinition-NzHealthcareService.md) | HealthcareService resource for use in NZ |
| [Location resource for use in NZ](StructureDefinition-NzLocation.md) | Location resource for use in NZ |
| [Medication Dispense resource for use in NZ](StructureDefinition-NzMedicationDispense.md) | Medication Dispense resource for use in NZ |
| [Medication resource for use in NZ](StructureDefinition-NzMedication.md) | Medication resource for use in NZ |
| [MedicationRequest resource for use in NZ](StructureDefinition-NzMedicationRequest.md) | MedicationRequest resource for use in NZ |
| [MedicationStatement resource for use in NZ](StructureDefinition-NzMedicationStatement.md) | MedicationStatement resource for use in NZ |
| [NZ Patient](StructureDefinition-NzPatient.md) | The base New Zealand Patient profile |
| [NZ RelatedPerson](StructureDefinition-NzRelatedPerson.md) | The base New Zealand RelatedPerson profile |
| [Organization resource for use in NZ](StructureDefinition-NzOrganization.md) | Organization resource for use in NZ |
| [Practitioner resource for use in NZ](StructureDefinition-NzPractitioner.md) | Practitioner resource for use in NZ |
| [PractitionerRole resource for use in NZ](StructureDefinition-NzPractitionerRole.md) | PractitionerRole resource for use in NZ |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Common NZ Address datatype](StructureDefinition-NzAddress.md) | Adds building name, suburb, domicile code and geocode to the Address datatype |
| [Common NZ ContactPoint datatype](StructureDefinition-NzContactPoint.md) | This profile adds the Contact Point Purpose and EDI address extensions to the standard data type |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [A specific purpose for which this ContactPoint dataType would be used](StructureDefinition-contactpoint-purpose.md) | A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing. |
| [AccPatientOccupation](StructureDefinition-acc-patient-occupation.md) | Codes to describe a patient's occupation, using ACC's patient occupation codeset. Note that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'. |
| [AdditionalAuthorisation](StructureDefinition-additional-authorisation.md) | Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include: * Prescribing authorisation for a nurse practitioner 
* Authorisation to administer immunisations
 |
| [AliasType](StructureDefinition-alias-type.md) | Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name. |
| [Building Name](StructureDefinition-building-name.md) | The name of a building cited in an address. |
| [ConditionOnPractice](StructureDefinition-condition-on-practice.md) | A full description of the conditions the health practitioner is subject to in relation to their scope of practice. |
| [Country Name](StructureDefinition-country-name.md) | The display name for a country in an address. |
| [Date of death](StructureDefinition-death-date.md) | The date of death of the individual, plus the source of that information |
| [District Health Board linked to a NZ Healthcare Service, Location or Patient](StructureDefinition-dhb.md) | District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address). |
| [EDI Address](StructureDefinition-edi-address.md) | Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred. |
| [EducationalQualification](StructureDefinition-educational-qualification.md) | Educational qualifications a practitioner has. These may or may not be related to registration information. |
| [Established](StructureDefinition-established.md) | The period over which the location or Organization is open |
| [Funded Healthcare Programme](StructureDefinition-funded-programme.md) | Funded NZ Healthcare Programmes |
| [GenderOriginalText](StructureDefinition-gender-original-text.md) | Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)'). |
| [Information Source](StructureDefinition-information-source.md) | The official source of information held about a patient. |
| [Long Term Condition Indicator](StructureDefinition-long-term-condition.md) | Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives. |
| [MaoriDescent](StructureDefinition-maori-descent.md) | Code indicating whether the person is of Māori descent |
| [Messaging Address](StructureDefinition-messaging-address.md) | The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address. |
| [NZ Citizenship](StructureDefinition-nz-citizenship.md) | New Zealand citizenship |
| [NZ Domicile Code](StructureDefinition-domicile-code.md) | NZ Domicile Code. Derived from a patient's primary physical, home address. |
| [NZ Ethnicity](StructureDefinition-nz-ethnicity.md) | The ethnic group or groups that a person identifies with or feels they belong to. Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen. Ethnicity is self-perceived and a person can belong to more than one group.The Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17). |
| [NZ Geocode](StructureDefinition-nz-geocode.md) | New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode. |
| [NZ Suburb](StructureDefinition-suburb.md) | Suburb element of a NZ Address. |
| [NZResidency](StructureDefinition-nz-residency.md) | NZ Residency status |
| [NZePS Long Term Medication Indicator](StructureDefinition-nzeps-long-term-medication.md) | NZePS Long Term Medication Indicator |
| [NZePS Supply Period Reason](StructureDefinition-nzeps-supply-period-reason.md) | The reason for a non-standard Supply Period. |
| [NZePS Unusual Dose Quantity Indicator](StructureDefinition-nzeps-unusual-dose-quantity.md) | NZePS Unusual Dose Quantity Indicator |
| [Nz_iwi](StructureDefinition-nz-iwi.md) | Persons Iwi affiliation |
| [Nzf_atc](StructureDefinition-nzf-atc.md) | Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification |
| [Nzf_nzmt_type](StructureDefinition-nzf-nzmt-type.md) | The NZ Medicines Terminology (NZMT) Data Class – MP (Medicinal Product), MPUU (Medicinal Product Unit of Use), MPP (Medicinal Product Pack), TP (Trade Product), TPUU (Trade Product Unit of Use), TPP (Trade Product Pack) or CTPP (Containered Trade Product Pack) – that the Medication is a member of. |
| [PractitionerRoleCreator](StructureDefinition-practitionerRole-creator.md) | The organisation and person that created this role |
| [PractitionerRoleStatusReason](StructureDefinition-practitionerRole-status-reason.md) | The reason for the status. Generally only used for inactive resources. |
| [Primary Healthcare Organisation](StructureDefinition-pho.md) | Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP). |
| [RegistrationInitialDate](StructureDefinition-registration-initial-date.md) | The date the practitioner first became registered with the Responsible Authority or professional body |
| [RegistrationStatusCode](StructureDefinition-registration-status-code.md) | An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body. |
| [ScopeOfPractice](StructureDefinition-scope-of-practice.md) | The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body. |
| [Sex At Birth](StructureDefinition-sex-at-birth.md) | A person’s sex at the time of their birth (considered to be immutable). |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ACC Patient Occupation](ValueSet-acc-patient-occupation.md) | ValueSet of codes for classifying patient occupations, drawn from the ACC codeset |
| [Additional Practitioner authorisations](ValueSet-practitioner-additional-authorisation-code.md) | A coded type for additional authorisations |
| [Alias types](ValueSet-org-and-location-alias-type.md) | The complete set of alias types that apply to Locations and Organizations |
| [ContactPoint purpose](ValueSet-contact-point-purpose.md) | The purpose of a ContactPoint - what it is used for. |
| [Coverage Category](ValueSet-coverage-category.md) | New Zealand codes for Coverage category types |
| [Coverage Type](ValueSet-coverage-type-code.md) | New Zealand codes for Coverage Types |
| [Datum code](ValueSet-datumCode.md) | Datum codes used |
| [Death date Information Source](ValueSet-dod-information-source-code.md) | The source from where the date of death was sourced. |
| [District Health Board Identifer](ValueSet-dhb.md) | District Health Board Identifer. Assigned by the HPI. |
| [Domicile Code](ValueSet-domicile-code.md) | Domicile Code |
| [Ethnicity of a person (L4)](ValueSet-ethnicity.md) | Codes to record a person's ethnicity, drawn from [Level 4 of the Ethnicity code system](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17) |
| [Ethnicity of a person (full)](ValueSet-Ethnicityfull.md) | Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. This ValueSet contains all levels of classification. |
| [Funded Programme](ValueSet-funded-programme.md) | Codes to describe NZ-specific types of funded programmes |
| [Information Source](ValueSet-information-source.md) | The source from where the value of this item was sourced |
| [Iwi](ValueSet-iwi.md) | New Zealand iwi codes. The 2 digit codes are abstract codes and provided in the expansion for navigational purposes. Users should not select an abstract code directly as a proper value. |
| [Māori descent](ValueSet-MaoriDescentValueset.md) | Codes indicating whether a person is of Māori descent |
| [NZ Citizenship status](ValueSet-nz-citizenship-status-code.md) | Citizenship status |
| [NZ Relationship Type](ValueSet-nz-relationship-type.md) | New Zealand relationship types, extending the HL7 related person relationship types with Māori concepts. |
| [NZ Residency status](ValueSet-nz-residency-code.md) | Is the person a NZ resident |
| [PHO](ValueSet-pho.md) | Primary Healthcare Organization |
| [PractitionerRole status reason](ValueSet-hpi-practitionerrole-status-reason.md) | The reason for the current status of PractitionerRole |
| [Registration Status of Practitioners](ValueSet-practitioner-registration-status-code.md) | The code list represents the current practicing status of the Provider Person as per their registration with an RA. |
| [Scope of practice](ValueSet-practitioner-scope-of-practice.md) | A coded type for professional scope of practice. |
| [Valid use values for NHI](ValueSet-nhi-use.md) | NHI Use codes |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [ACC Patient Occupation CodeSystem](CodeSystem-acc-patient-occupation-code.md) | Codes for classifying patient occupations, drawn from the ACC codeset |
| [Additional Authorisation](CodeSystem-practitioner-additional-authorisation.md) | Additional authorisations that a practitioner is authorised to practice or prescribe. |
| [ContactPoint purpose](CodeSystem-contact-point-purpose.md) | The purpose of a ContactPoint - what it is used for. |
| [Coverage category](CodeSystem-coverage-category.md) | New Zealand codes for Coverage category types |
| [Coverage type](CodeSystem-coverage-type.md) | New Zealand codes for Coverage Types |
| [Datum codes](CodeSystem-datum-code.md) | Possible datum codes |
| [Domicile Code](CodeSystem-domicile-code.md) | Domicile codes |
| [Funded Programme](CodeSystem-funded-programme.md) | Codes to describe NZ-specific types of funded programmes |
| [Information Source](CodeSystem-information-source.md) | All possible sources of information |
| [Level 4 ethnicity codes](CodeSystem-ethnicityL4.md) | Codes to record a person’s ethnicity, drawn from Level 4 of the Ethnicity code system described [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17) |
| [Māori descent codes](CodeSystem-maoridescentcode.md) | Codes for classifying Māori descent. Defined by Stats NZ - Māori descent v1.0.0 |
| [NZ Citizenship status](CodeSystem-citizenship-status.md) | Is this person a NZ Citizen |
| [NZ DHB](CodeSystem-dhb-code.md) | NZ District Health Board (HPI-ORG) Codes |
| [NZ Iwi](CodeSystem-iwi-code.md) | NZ iwi and iwi-related groups statistical classification |
| [NZ Relationship Type Code System](CodeSystem-nz-relationship-codes.md) | Code system for NZ relationship type codes. |
| [NZ Residency status](CodeSystem-nz-residency.md) | NZ Residency status |
| [NZ ethnic group codes](CodeSystem-Ethnicity.md) | Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. |
| [PHO](CodeSystem-pho-status.md) | Primary Healthcare Organization |
| [PractitionerRole status reason](CodeSystem-hpi-practitionerRole-status-reason.md) | The reason for the current status of PractitionerRole |
| [Registration Status of Practitioners](CodeSystem-practitioner-registration-status-code.md) | The code list represents the current practicing status of the Provider Person as per their registration with an RA. |
| [Scope of practice](CodeSystem-scopeOfPractice.md) | A classification of the type or range of health services that a practitioner is authorised to provide, as determined by the Responsible Authority or other statutory authority (e.g. PHARMAC), that is, what the practitioner can or cannot do. It includes Scope of Practice as defined by the Health Practitioners Competence Assurance Act 2003, any special authorisations granted, and any conditions or limitations imposed by the Responsible Authority. |
| [Type of Alias](CodeSystem-alias-type.md) | Used in Organization and Location to indicate what is the type of Alias |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [acc45-id](NamingSystem-acc45-id.md) | ACC 45 number |
| [chiropractic-board-id](NamingSystem-chiropractic-board-id.md) | Chiropractic Board Register number |
| [dental-council-id](NamingSystem-dental-council-id.md) | Dental Council Register Number |
| [dietitians-board-id](NamingSystem-dietitians-board-id.md) | Dietitians Board Register Number |
| [hpi-facility-id](NamingSystem-hpi-facility-id.md) | HPI facilities |
| [hpi-nzbn](NamingSystem-hpi-nzbn.md) | New Zealand Business Number |
| [hpi-organisation-id](NamingSystem-hpi-organisation-id.md) | HPI organizations |
| [hpi-person-id](NamingSystem-hpi-person-id.md) | HPI providers |
| [medical-council-id](NamingSystem-medical-council-id.md) | Medical Council of New Zealand Register Number |
| [medical-radiation-technologists-board-id](NamingSystem-medical-radiation-technologists-board-id.md) | Medical Radiation Technologists Board Register Number |
| [medical-sciences-council-id](NamingSystem-medical-sciences-council-id.md) | Medical Sciences Council Register Number |
| [midwifery-council-id](NamingSystem-midwifery-council-id.md) | Midwifery Council Register Number |
| [moe-facility-id](NamingSystem-moe-facility-id.md) | This identifier, known as the 'MoE Number' or 'School Number', is used by the education sector to identify an NZ education institution. These identifiers can be looked up at the [[educationcounts.govt.nz](http://educationcounts.govt.nz)]([https://www.educationcounts.govt.nz/directories/list-of-nz-schools](https://www.educationcounts.govt.nz/directories/list-of-nz-schools)) website. |
| [nhi-id](NamingSystem-nhi-id.md) | NHI number |
| [nursing-council-id](NamingSystem-nursing-council-id.md) | Nursing Council of New Zealand Register Number |
| [nz-address-id](NamingSystem-nz-address-id.md) | New Zealand Street Address Mapping Identifier |
| [occupational-therapy-board-id](NamingSystem-occupational-therapy-board-id.md) | Occupational Therapy Board Register Number |
| [optometrists-dispensing-opticians-board-id](NamingSystem-optometrists-dispensing-opticians-board-id.md) | Optometrists & Dispensing Opticians Board Register Number |
| [osteopathic-council-id](NamingSystem-osteopathic-council-id.md) | Osteopathic Council Register Number |
| [paramedic-council-id](NamingSystem-paramedic-council-id.md) | Paramedic Council Register Number |
| [pharmacy-council-id](NamingSystem-pharmacy-council-id.md) | Pharmacy Council of New Zealand Register Number |
| [physiotherapy-board-id](NamingSystem-physiotherapy-board-id.md) | Physiotherapy Board Register Number |
| [podiatrists-board-id](NamingSystem-podiatrists-board-id.md) | Podiatrists Board Register Number |
| [psychologists-board-id](NamingSystem-psychologists-board-id.md) | Psychologists Board Register Number |
| [psychotherapists-board-id](NamingSystem-psychotherapists-board-id.md) | Psychotherapists Board register Number |
| [rheumatic-fever-ccs-id](NamingSystem-rheumatic-fever-ccs-id.md) | Identifier assigned by the Rheumatic Fever Care Coordination System, used on CarePlan, Condition, CareTeam, and Observation resources. |
| [sdhr-id](NamingSystem-sdhr-id.md) | Identifier namespace for SDHR-assigned resource identifiers. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [CoverageCSC](Coverage-CoverageCSC.md) | CSC Coverage example |
| [CoverageGMS](Coverage-CoverageGMS.md) | GMS Coverage example |
| [CoverageHUHC](Coverage-CoverageHUHC.md) | HUHC Coverage example |
| [condition-long-term-condition](Condition-condition-long-term-condition.md) | Example of long term condition |
| [location-alias-type](Location-location-alias-type.md) | A location with an alias type against the alias. |
| [location-established](Location-location-established.md) | A location with the date established |
| [medicationrequest-nzeps-long-term-medication](MedicationRequest-medicationrequest-nzeps-long-term-medication.md) | Example of long term medication |
| [medicationrequest-nzeps-supply-period-reason](MedicationRequest-medicationrequest-nzeps-supply-period-reason.md) | Example of supply period reason |
| [medicationrequest-nzeps-unusual-dose-quantity](MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.md) | Example of sunusual does quantity |
| [organization-edi-address](Organization-organization-edi-address.md) | Example of edi address extension |
| [organization-funded-programme](Organization-organization-funded-programme.md) | Example of Funded programme |
| [organization-moh](Organization-organization-moh.md) | Ministrt Of Health |
| [patient-address-building-name](Patient-patient-address-building-name.md) | Patient with building name in the address |
| [patient-address-suburb](Patient-patient-address-suburb.md) | Patient with building name and suburb in the address |
| [patient-building-name](Patient-patient-building-name.md) | Example of building name extension |
| [patient-deceased-information-source](Patient-patient-deceased-information-source.md) | Example of information source |
| [patient-dhb](Patient-patient-dhb.md) | Patient1 |
| [patient-domicile-code](Patient-patient-domicile-code.md) | Example of Domicile code |
| [patient-information-source](Patient-patient-information-source.md) | Example of information source |
| [patient-messaging-address](Patient-patient-messaging-address.md) | Patient1 |
| [patient-nhi](Patient-patient-nhi.md) | Example of PHO |
| [patient-nz-citizenship](Patient-patient-nz-citizenship.md) | Example of citizenship |
| [patient-nz-ethnicity](Patient-patient-nz-ethnicity.md) | Example of ethnicity |
| [patient-nz-geocode](Patient-patient-nz-geocode.md) | Example of geocode |
| [patient-nz-residency](Patient-patient-nz-residency.md) | Example of citizenship |
| [patient-pho](Patient-patient-pho.md) | Example of PHO |
| [patient-sex-at-birth](Patient-patient-sex-at-birth.md) | Example of a Patient with the sex at birth extension |
| [patient-suburb](Patient-patient-suburb.md) | Example of suburb |
| [practitioner-additional-authorisation](Practitioner-practitioner-additional-authorisation.md) | Additional authorisation example - to give immunizations in 2021 |
| [practitioner-condition-on-practice](Practitioner-practitioner-condition-on-practice.md) | Example of Condition on practice |
| [practitioner-death-date](Practitioner-practitioner-death-date.md) | Example of Practitioner with detah date |
| [practitioner-edi-address](Practitioner-practitioner-edi-address.md) | Example of Condition on practice |
| [practitioner-educational-qualification](Practitioner-practitioner-educational-qualification.md) | Example of educational qualification |
| [practitioner-registration-initial-date](Practitioner-practitioner-registration-initial-date.md) | Example of Initial date of registration |
| [practitioner-registration-status-code](Practitioner-practitioner-registration-status-code.md) | Example of registration status |
| [practitioner-scope-of-practice](Practitioner-practitioner-scope-of-practice.md) | Example of scope of practice |
| [practitionerRole-creator](PractitionerRole-practitionerRole-creator.md) | The creator of a practitioner role. Uses a contained resource. |
| [practitionerRole-messaging-address](PractitionerRole-practitionerRole-messaging-address.md) | Example of status reason |
| [practitionerRole-status-reason](PractitionerRole-practitionerRole-status-reason.md) | Example of status reason |

