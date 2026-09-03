# Home - HL7® FHIR® New Zealand Base Implementation Guide v3.1.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.org.nz/ig/base/ImplementationGuide/fhir.org.nz.ig.base | *Version*:3.1.0 |
| Active as of 2026-07-24 | *Computable Name*:HL7FHIRNewZealandBaseImplementationGuide |

### New Zealand base FHIR Implementation Guide

This is the base FHIR Implementation Guide (IG) for New Zealand. It provides a common set of reusable FHIR artifacts for representing New Zealand concepts, including extensions, identifiers, terminology artifacts, naming systems, and profiles. It is intended to support consistency across New Zealand FHIR implementations by defining shared artifacts that can be reused across implementation guides, APIs, and solutions.

The NZ Base IG is maintained as a living artifact and is expected to evolve based on feedback and usage experience from the implementation community. Concepts are included where there is a clear New Zealand-specific requirement, where reuse across implementations is expected, and where the artifact is appropriate for inclusion in a national base guide. Where suitable definitions already exist in the core FHIR specification, international implementation guides, or other recognised registries, reuse is preferred over defining new New Zealand-specific artifacts.

NZ Base is not intended to define the complete conformance requirements for a particular implementation or use case. It does not, by itself, specify which resources, profiles, extensions, terminology bindings, or interactions must be supported by an implementation. While NZ Base artifacts may define constraints, terminology, or other rules for the artifacts themselves, downstream implementation guides, programme specifications, API specifications, or other implementation-specific artifacts are expected to define which NZ Base artifacts are required, optional, or not applicable in context.

#### Macron support for Te reo Māori

By default, FHIR supports macrons (and all diacritics) as commonly used by Te Reo Māori to indicate long vowels.

Macrons are supported as FHIR uses UTF-8 for all encoding formats (JSON, XML, and RDF), and macrons are explicitly allowed by the relevant FHIR datatypes where macrons could appear.

### Overview of IG Sections

The following tabs are available from the navbar at the top.

#### Extensions

This tab lists all the extensions defined in this guide, where an extension is an additional element that can be recorded in a resource. The extension definition describes the purpose of the extension, its name and [dataType/s](https://hl7.org/fhir/R4/datatypes.html).

Clicking on the link in the 'id' column will display the detail page for that extension. Extensions can have a single value, or can be composed of multiple 'child' elements - an example is the [funded programme](StructureDefinition-funded-programme.md) extension. The snapshot tab in the details page (about halfway down) lists all the parts of the extension - including a link to the ValueSet if the element is coded.

#### Terminology

This tab lists the terminology artifacts defined in this guide. There are 2 artifacts that will be found here:

* [ValueSets](https://hl7.org/fhir/R4/valueset.html) are sets of codes, drawn from one or more code systems, intended for use in coded data elements in Resources, as defined by a particular conformance rule - such as an Extension or Profile. The ValueSets in this Guide are 'recommended' values, but it may be possible for implementers to use additional concepts if the rules defined by a particular Extension or Profile permit this.
* [CodeSystem](https://hl7.org/fhir/R4/codesystem.html) resources are used to declare the existence of and describe a code system, its key properties, and optionally define a part or all of its content. Wherever possible, the use of international terminologies, such as [SNOMED CT](https://www.snomed.org/), is recommended; however, a number of New Zealand-specific code systems are included in this Guide to meet unique, local requirements.

These resources can be used by Terminology Servers (like [Terminz](https://terminz-itp.azurewebsites.net/) or [Ontoserver](https://aehrc.com/ontoserver/) ) to provide terminology [operations](https://hl7.org/fhir/R4/operations.html) of use to implementers, such as the ValueSet [$expand](https://hl7.org/fhir/R4/valueset-operation-expand.html) operation.

There is a lot more detail on terminology in the [FHIR specification](https://hl7.org/fhir/R4/terminology-module.html). The section on [Terminology Services](https://hl7.org/fhir/R4/terminology-service.html) is also useful.

#### Identifiers

Identifiers are used to unambiguously identify something. Examples in New Zealand are the NHI (National Health Identifier) or HPI (Health Practitioner index). Each type of identifier has a url that uniquely identifies it - for example the value for the NHI is https://standards.digital.health.nz/ns/nhi-id. This url will be present in the 'system' value in a resource instance. Note that the url will not necessarily 'resolve' - entering it into a web browser will not result in anything.

#### Artifact Index

This is a tab automatically generated during the build of the Implementation Guide, and lists all the FHIR artifacts defined by the guide with a link to the details.

#### Support

Contains links to the main FHIR specification, as well downloads for the full IG or the artifacts defined in the guide (Extension Definitions, ValueSets and CodeSystems.)

If you would like to provide any feedback on this Implementation Guide, email admin@hl7.org.nz

### Version

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (fhir.org.nz.ig.base.r4)](package.r4.tgz) and [R4B (fhir.org.nz.ig.base.r4b)](package.r4b.tgz) are available.

### Dependencies



### IP Statement

This publication includes IP covered under the following statements.

* © 2020+ New Zealand Crown Copyright

* [NZ DHB](CodeSystem-dhb-code.md): [DHB](ValueSet-dhb.md), [Dhb](StructureDefinition-dhb.md), [Patient/patient-address-building-name](Patient-patient-address-building-name.md), [Patient/patient-address-suburb](Patient-patient-address-suburb.md) and [Patient/patient-dhb](Patient-patient-dhb.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [Condition/condition-long-term-condition](Condition-condition-long-term-condition.md), [Iwi_code](CodeSystem-iwi-code.md)... Show 4 more, [MedicationRequest/medicationrequest-nzeps-long-term-medication](MedicationRequest-medicationrequest-nzeps-long-term-medication.md), [MedicationRequest/medicationrequest-nzeps-supply-period-reason](MedicationRequest-medicationrequest-nzeps-supply-period-reason.md), [MedicationRequest/medicationrequest-nzeps-unusual-dose-quantity](MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.md) and [NZ_ethnic_group_codes](CodeSystem-Ethnicity.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [SubscriberPolicyholder Relationship Codes](http://terminology.hl7.org/7.2.0/CodeSystem-subscriber-relationship.html): [Coverage/CoverageCSC](Coverage-CoverageCSC.md), [Coverage/CoverageGMS](Coverage-CoverageGMS.md) and [Coverage/CoverageHUHC](Coverage-CoverageHUHC.md)
* [identifierType](http://terminology.hl7.org/7.2.0/CodeSystem-v2-0203.html): [HPIFacility](NamingSystem-hpi-facility-id.md), [HPIOrganization](NamingSystem-hpi-organisation-id.md)... Show 21 more, [HPIProvider](NamingSystem-hpi-person-id.md), [Moe_facility_id](NamingSystem-moe-facility-id.md), [NBN](NamingSystem-hpi-nzbn.md), [NZChiro](NamingSystem-chiropractic-board-id.md), [NZDental](NamingSystem-dental-council-id.md), [NZDiet](NamingSystem-dietitians-board-id.md), [NZMC](NamingSystem-medical-council-id.md), [NZMidwife](NamingSystem-midwifery-council-id.md), [NZNC](NamingSystem-nursing-council-id.md), [NZOCC](NamingSystem-occupational-therapy-board-id.md), [NZOpt](NamingSystem-optometrists-dispensing-opticians-board-id.md), [NZOst](NamingSystem-osteopathic-council-id.md), [NZParamed](NamingSystem-paramedic-council-id.md), [NZPhysio](NamingSystem-physiotherapy-board-id.md), [NZPsych](NamingSystem-psychologists-board-id.md), [NZPsycho](NamingSystem-psychotherapists-board-id.md), [NZRadiologist](NamingSystem-medical-radiation-technologists-board-id.md), [NZScience](NamingSystem-medical-sciences-council-id.md), [Nz_address_id](NamingSystem-nz-address-id.md), [Pharmacy_council_id](NamingSystem-pharmacy-council-id.md) and [Rheumatic_fever_ccs_id](NamingSystem-rheumatic-fever-ccs-id.md)
* [degreeLicenseCertificate](http://terminology.hl7.org/7.2.0/CodeSystem-v2-0360.html): [Practitioner/practitioner-additional-authorisation](Practitioner-practitioner-additional-authorisation.md), [Practitioner/practitioner-condition-on-practice](Practitioner-practitioner-condition-on-practice.md)... Show 4 more, [Practitioner/practitioner-educational-qualification](Practitioner-practitioner-educational-qualification.md), [Practitioner/practitioner-registration-initial-date](Practitioner-practitioner-registration-initial-date.md), [Practitioner/practitioner-registration-status-code](Practitioner-practitioner-registration-status-code.md) and [Practitioner/practitioner-scope-of-practice](Practitioner-practitioner-scope-of-practice.md)


### Globals

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "fhir.org.nz.ig.base",
  "url" : "http://fhir.org.nz/ig/base/ImplementationGuide/fhir.org.nz.ig.base",
  "version" : "3.1.0",
  "name" : "HL7FHIRNewZealandBaseImplementationGuide",
  "title" : "HL7® FHIR® New Zealand Base Implementation Guide",
  "status" : "active",
  "date" : "2026-07-24T15:52:23+12:00",
  "publisher" : "HL7 New Zealand",
  "contact" : [{
    "name" : "HL7 New Zealand",
    "telecom" : [{
      "system" : "email",
      "value" : "mailto:admin@hl7.org.nz"
    }]
  }],
  "description" : "New Zealand base profiles",
  "packageId" : "fhir.org.nz.ig.base",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [{
    "id" : "hl7tx",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
    }],
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r4",
    "version" : "7.2.0"
  },
  {
    "id" : "hl7ext",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
    }],
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r4",
    "version" : "5.3.0"
  }],
  "definition" : {
    "extension" : [{
      "extension" : [{
        "url" : "code",
        "valueString" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2021+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "Release"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "show-inherited-invariants"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-ethnic-group-codes"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/acc-patient-occupation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/alias-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-citizenship-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/coverage-category-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/coverage-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-datum-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/dhb-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/ethnic-group-level-4-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/funded-programme-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/maori-descent-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-residency-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/pho-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/acc-patient-occupation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-citizenship-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "(https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-datum-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/dhb-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/funded-programme-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/hpi-practitioner-role-status-reason-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/alias-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/maori-descent"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-residency-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/pho-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzContactpoint"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/alias-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/building-name"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/country-name"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/death-date"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/dhb"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/educational-qualification"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/established"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/funded-programme"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/gender-original-text"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/information-source"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/long-term-condition"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/maori-descent"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzAddress"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzCondition"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-atc"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-geocode"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzHealthcareService"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-iwi"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzLocation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedication"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationDispense"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationRequest"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationStatement"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzOrganization"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitioner"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitionerRole"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzRelatedPerson"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-residency"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/pho"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/suburb"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/ValueSet/nz-relationship-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.org.nz/ig/base/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueString" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
      "valueCode" : "hl7.fhir.uv.tools.r4#1.1.2"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "copyrightyear"
      },
      {
        "url" : "value",
        "valueString" : "2021+"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "releaselabel"
      },
      {
        "url" : "value",
        "valueString" : "Release"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "show-inherited-invariants"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-version"
      },
      {
        "url" : "value",
        "valueString" : "false"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-ethnic-group-codes"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/acc-patient-occupation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/alias-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-citizenship-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/coverage-category-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/coverage-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-datum-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/dhb-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/ethnic-group-level-4-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/funded-programme-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/hpi-practitioner-role-status-reason-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/maori-descent-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/nz-residency-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/pho-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-additional-authorisation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://standards.digital.health.nz/ns/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/acc-patient-occupation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-citizenship-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "(https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-category-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/coverage-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-datum-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/dhb-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/dod-information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/ethnic-group-level-4-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/funded-programme-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/hpi-practitioner-role-status-reason-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/information-source-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/iwi-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/alias-type-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/maori-descent"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nhi-use-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-residency-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/pho-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-additional-authorisation-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/contact-point-purpose-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/nz-ethnic-group-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "https://nzhts.digital.health.nz/fhir/ValueSet/practitioner-scope-of-practice-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzContactpoint"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/CodeSystem/nz-relationship-codes"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/acc-patient-occupation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/additional-authorisation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/alias-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/building-name"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/condition-on-practice"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/contactpoint-purpose"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/country-name"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/death-date"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/dhb"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/domicile-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/edi-address"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/educational-qualification"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/established"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/funded-programme"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/gender-original-text"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/information-source"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/long-term-condition"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/maori-descent"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/messaging-address"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzAddress"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-citizenship"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzCondition"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-long-term-medication"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-supply-period-reason"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzeps-unusual-dose-quantity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-ethnicity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-atc"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nzf-nzmt-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-geocode"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzHealthcareService"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-iwi"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzLocation"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedication"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationDispense"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationRequest"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzMedicationStatement"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzOrganization"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitioner"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzPractitionerRole"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/NzRelatedPerson"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/nz-residency"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/pho"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-creator"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/practitionerRole-status-reason"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/registration-initial-date"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/registration-status-code"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/scope-of-practice"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/sex-at-birth"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/StructureDefinition/suburb"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "special-url"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org.nz/fhir/ValueSet/nz-relationship-type"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "autoload-resources"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "template/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-liquid"
      },
      {
        "url" : "value",
        "valueString" : "input/liquid"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-qa"
      },
      {
        "url" : "value",
        "valueString" : "temp/qa"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-temp"
      },
      {
        "url" : "value",
        "valueString" : "temp/pages"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-output"
      },
      {
        "url" : "value",
        "valueString" : "output"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-suppressed-warnings"
      },
      {
        "url" : "value",
        "valueString" : "input/ignoreWarnings.txt"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "path-history"
      },
      {
        "url" : "value",
        "valueString" : "http://fhir.org.nz/ig/base/history.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-html"
      },
      {
        "url" : "value",
        "valueString" : "template-page.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "template-md"
      },
      {
        "url" : "value",
        "valueString" : "template-page-md.html"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-contact"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-context"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-copyright"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-jurisdiction"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-license"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-publisher"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "apply-wg"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "active-tables"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "fmm-definition"
      },
      {
        "url" : "value",
        "valueString" : "http://hl7.org/fhir/versions.html#maturity"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "propagate-status"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "excludelogbinaryformat"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    },
    {
      "extension" : [{
        "url" : "code",
        "valueCode" : "tabbed-snapshots"
      },
      {
        "url" : "value",
        "valueString" : "true"
      }],
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-contactpoint-purpose.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/contactpoint-purpose"
      },
      "name" : "A specific purpose for which this ContactPoint dataType would be used",
      "description" : "A specific purpose for which this ContactPoint dataType would be used. An example would be to indicate that this ContactPoint is used for video conferencing.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-acc-patient-occupation.html"
      }],
      "reference" : {
        "reference" : "ValueSet/acc-patient-occupation"
      },
      "name" : "ACC Patient Occupation",
      "description" : "ValueSet of codes for classifying patient occupations, drawn from the ACC codeset",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-acc-patient-occupation-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/acc-patient-occupation-code"
      },
      "name" : "ACC Patient Occupation CodeSystem",
      "description" : "Codes for classifying patient occupations, drawn from the ACC codeset",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-acc45-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/acc45-id"
      },
      "name" : "acc45-id",
      "description" : "ACC 45 number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-acc-patient-occupation.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/acc-patient-occupation"
      },
      "name" : "AccPatientOccupation",
      "description" : "Codes to describe a patient's occupation, using ACC's patient occupation codeset. \r\n\r\nNote that the current ValueSet binding contains codes from NZSC099. ACC are planning to update this ValueSet to base the codes on ANZSCO at the request of Stats NZ (Timing TBC), so the binding strength has been left as 'example'.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-practitioner-additional-authorisation.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/practitioner-additional-authorisation"
      },
      "name" : "Additional Authorisation",
      "description" : "Additional authorisations that a practitioner is authorised to practice or prescribe.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-practitioner-additional-authorisation-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/practitioner-additional-authorisation-code"
      },
      "name" : "Additional Practitioner authorisations",
      "description" : "A coded type for additional authorisations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-additional-authorisation.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/additional-authorisation"
      },
      "name" : "AdditionalAuthorisation",
      "description" : "Additional authorisations that a practitioner is authorised to perform in addition to their registration and scope of practice. Examples include:\r\n* Prescribing authorisation for a nurse practitioner\r\n* Authorisation to administer immunisations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-org-and-location-alias-type.html"
      }],
      "reference" : {
        "reference" : "ValueSet/org-and-location-alias-type"
      },
      "name" : "Alias types",
      "description" : "The complete set of alias types that apply to Locations and Organizations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-alias-type.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/alias-type"
      },
      "name" : "AliasType",
      "description" : "Used to indicate what sort of alias is being used in a Location or Organization - eg that it is a legal name.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-building-name.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/building-name"
      },
      "name" : "Building Name",
      "description" : "The name of a building cited in an address.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-chiropractic-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/chiropractic-board-id"
      },
      "name" : "chiropractic-board-id",
      "description" : "Chiropractic Board Register number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzAddress.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzAddress"
      },
      "name" : "Common NZ Address datatype",
      "description" : "Adds building name, suburb, domicile code and geocode to the Address datatype",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzContactPoint.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzContactPoint"
      },
      "name" : "Common NZ ContactPoint datatype",
      "description" : "This profile adds the Contact Point Purpose and EDI address extensions to the standard data type",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzCondition.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzCondition"
      },
      "name" : "Condition resource for use in NZ",
      "description" : "This profile adds the Long-Term Condition extension to the base Condition resource",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Condition"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Condition-condition-long-term-condition.html"
      }],
      "reference" : {
        "reference" : "Condition/condition-long-term-condition"
      },
      "name" : "condition-long-term-condition",
      "description" : "Example of long term condition",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-condition-on-practice.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/condition-on-practice"
      },
      "name" : "ConditionOnPractice",
      "description" : "A full description of the conditions the health practitioner is subject to in relation to their scope of practice.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-contact-point-purpose.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/contact-point-purpose"
      },
      "name" : "ContactPoint purpose",
      "description" : "The purpose of a ContactPoint - what it is used for.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-contact-point-purpose.html"
      }],
      "reference" : {
        "reference" : "ValueSet/contact-point-purpose"
      },
      "name" : "ContactPoint purpose",
      "description" : "The purpose of a ContactPoint - what it is used for.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-country-name.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/country-name"
      },
      "name" : "Country Name",
      "description" : "The display name for a country in an address.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-coverage-category.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/coverage-category"
      },
      "name" : "Coverage category",
      "description" : "New Zealand codes for Coverage category types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-coverage-category.html"
      }],
      "reference" : {
        "reference" : "ValueSet/coverage-category"
      },
      "name" : "Coverage Category",
      "description" : "New Zealand codes for Coverage category types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzCoverage.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzCoverage"
      },
      "name" : "Coverage resource for use in NZ (Trial use)",
      "description" : "Coverage resource for use in NZ (Trial use)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-coverage-type.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/coverage-type"
      },
      "name" : "Coverage type",
      "description" : "New Zealand codes for Coverage Types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-coverage-type-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/coverage-type-code"
      },
      "name" : "Coverage Type",
      "description" : "New Zealand codes for Coverage Types",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Coverage"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Coverage-CoverageCSC.html"
      }],
      "reference" : {
        "reference" : "Coverage/CoverageCSC"
      },
      "name" : "CoverageCSC",
      "description" : "CSC Coverage example",
      "exampleCanonical" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Coverage"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Coverage-CoverageGMS.html"
      }],
      "reference" : {
        "reference" : "Coverage/CoverageGMS"
      },
      "name" : "CoverageGMS",
      "description" : "GMS Coverage example",
      "exampleCanonical" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Coverage"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Coverage-CoverageHUHC.html"
      }],
      "reference" : {
        "reference" : "Coverage/CoverageHUHC"
      },
      "name" : "CoverageHUHC",
      "description" : "HUHC Coverage example",
      "exampleCanonical" : "http://hl7.org.nz/fhir/StructureDefinition/NzCoverage"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-death-date.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/death-date"
      },
      "name" : "Date of death",
      "description" : "The date of death of the individual, plus the source of that information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-datumCode.html"
      }],
      "reference" : {
        "reference" : "ValueSet/datumCode"
      },
      "name" : "Datum code",
      "description" : "Datum codes used",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-datum-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/datum-code"
      },
      "name" : "Datum codes",
      "description" : "Possible datum codes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-dod-information-source-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/dod-information-source-code"
      },
      "name" : "Death date Information Source",
      "description" : "The source from where the date of death was sourced.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-dental-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/dental-council-id"
      },
      "name" : "dental-council-id",
      "description" : "Dental Council Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-dietitians-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/dietitians-board-id"
      },
      "name" : "dietitians-board-id",
      "description" : "Dietitians Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-dhb.html"
      }],
      "reference" : {
        "reference" : "ValueSet/dhb"
      },
      "name" : "District Health Board Identifer",
      "description" : "District Health Board Identifer. Assigned by the HPI.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-dhb.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/dhb"
      },
      "name" : "District Health Board linked to a NZ Healthcare Service, Location or Patient",
      "description" : "District Health Board relating to a NZ Healthcare Service, Location (Facility) or Patient (primary, physical home address).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-domicile-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/domicile-code"
      },
      "name" : "Domicile Code",
      "description" : "Domicile codes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-domicile-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/domicile-code"
      },
      "name" : "Domicile Code",
      "description" : "Domicile Code",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-edi-address.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/edi-address"
      },
      "name" : "EDI Address",
      "description" : "Represents an Electronic Data Interchange (EDI) address. It is intended as an extension on ContactPoint.system, with the system value being 'other'. The value of the extension is the EDI supplier, the actual EDI address is the value element. Note that a new extension 'messaging address' is preferred.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-educational-qualification.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/educational-qualification"
      },
      "name" : "EducationalQualification",
      "description" : "Educational qualifications a practitioner has. These may or may not be related to registration information.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-established.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/established"
      },
      "name" : "Established",
      "description" : "The period over which the location or Organization is open",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-Ethnicityfull.html"
      }],
      "reference" : {
        "reference" : "ValueSet/Ethnicityfull"
      },
      "name" : "Ethnicity of a person (full)",
      "description" : "Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to. This ValueSet contains all levels of classification.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-ethnicity.html"
      }],
      "reference" : {
        "reference" : "ValueSet/ethnicity"
      },
      "name" : "Ethnicity of a person (L4)",
      "description" : "Codes to record a person's ethnicity, drawn from [Level 4 of the Ethnicity code system](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-funded-programme.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/funded-programme"
      },
      "name" : "Funded Healthcare Programme",
      "description" : "Funded NZ Healthcare Programmes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-funded-programme.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/funded-programme"
      },
      "name" : "Funded Programme",
      "description" : "Codes to describe NZ-specific types of funded programmes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-funded-programme.html"
      }],
      "reference" : {
        "reference" : "ValueSet/funded-programme"
      },
      "name" : "Funded Programme",
      "description" : "Codes to describe NZ-specific types of funded programmes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-gender-original-text.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/gender-original-text"
      },
      "name" : "GenderOriginalText",
      "description" : "Text provided by the person with the choice of 'Another gender' (The FHIR AdministrativeGender CodeSystem codes this as '[other](https://hl7.org/fhir/R4/codesystem-administrative-gender.html)').",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzHealthcareService.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzHealthcareService"
      },
      "name" : "HealthcareService resource for use in NZ",
      "description" : "HealthcareService resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-hpi-facility-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/hpi-facility-id"
      },
      "name" : "hpi-facility-id",
      "description" : "HPI facilities",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-hpi-nzbn.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/hpi-nzbn"
      },
      "name" : "hpi-nzbn",
      "description" : "New Zealand Business Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-hpi-organisation-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/hpi-organisation-id"
      },
      "name" : "hpi-organisation-id",
      "description" : "HPI organizations",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-hpi-person-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/hpi-person-id"
      },
      "name" : "hpi-person-id",
      "description" : "HPI providers",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-information-source.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/information-source"
      },
      "name" : "Information Source",
      "description" : "The official source of information held about a patient.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-information-source.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/information-source"
      },
      "name" : "Information Source",
      "description" : "All possible sources of information",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-information-source.html"
      }],
      "reference" : {
        "reference" : "ValueSet/information-source"
      },
      "name" : "Information Source",
      "description" : "The source from where the value of this item was sourced",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-iwi.html"
      }],
      "reference" : {
        "reference" : "ValueSet/iwi"
      },
      "name" : "Iwi",
      "description" : "New Zealand iwi codes. The 2 digit codes are abstract codes and provided in the expansion for navigational purposes. Users should not select an abstract code directly as a proper value.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-ethnicityL4.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/ethnicityL4"
      },
      "name" : "Level 4 ethnicity codes",
      "description" : "Codes to record a person’s ethnicity, drawn from Level 4 of the Ethnicity code system \ndescribed [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17)",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzLocation.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzLocation"
      },
      "name" : "Location resource for use in NZ",
      "description" : "Location resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Location"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Location-location-alias-type.html"
      }],
      "reference" : {
        "reference" : "Location/location-alias-type"
      },
      "name" : "location-alias-type",
      "description" : "A location with an alias type against the alias.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Location"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Location-location-established.html"
      }],
      "reference" : {
        "reference" : "Location/location-established"
      },
      "name" : "location-established",
      "description" : "A location with the date established",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-long-term-condition.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/long-term-condition"
      },
      "name" : "Long Term Condition Indicator",
      "description" : "Long Term Condition Indicator. A long term condition can be defined as any ongoing, long term or recurring conditions that can have a significant impact on people’s lives.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-maori-descent.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/maori-descent"
      },
      "name" : "MaoriDescent",
      "description" : "Code indicating whether the person is of Māori descent",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-medical-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/medical-council-id"
      },
      "name" : "medical-council-id",
      "description" : "Medical Council of New Zealand Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-medical-radiation-technologists-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/medical-radiation-technologists-board-id"
      },
      "name" : "medical-radiation-technologists-board-id",
      "description" : "Medical Radiation Technologists Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-medical-sciences-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/medical-sciences-council-id"
      },
      "name" : "medical-sciences-council-id",
      "description" : "Medical Sciences Council Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzMedicationDispense.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzMedicationDispense"
      },
      "name" : "Medication Dispense resource for use in NZ",
      "description" : "Medication Dispense resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzMedication.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzMedication"
      },
      "name" : "Medication resource for use in NZ",
      "description" : "Medication resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzMedicationRequest.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzMedicationRequest"
      },
      "name" : "MedicationRequest resource for use in NZ",
      "description" : "MedicationRequest resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationRequest"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "MedicationRequest-medicationrequest-nzeps-long-term-medication.html"
      }],
      "reference" : {
        "reference" : "MedicationRequest/medicationrequest-nzeps-long-term-medication"
      },
      "name" : "medicationrequest-nzeps-long-term-medication",
      "description" : "Example of long term medication",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationRequest"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "MedicationRequest-medicationrequest-nzeps-supply-period-reason.html"
      }],
      "reference" : {
        "reference" : "MedicationRequest/medicationrequest-nzeps-supply-period-reason"
      },
      "name" : "medicationrequest-nzeps-supply-period-reason",
      "description" : "Example of supply period reason",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicationRequest"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.html"
      }],
      "reference" : {
        "reference" : "MedicationRequest/medicationrequest-nzeps-unusual-dose-quantity"
      },
      "name" : "medicationrequest-nzeps-unusual-dose-quantity",
      "description" : "Example of sunusual does quantity",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzMedicationStatement.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzMedicationStatement"
      },
      "name" : "MedicationStatement resource for use in NZ",
      "description" : "MedicationStatement resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-messaging-address.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/messaging-address"
      },
      "name" : "Messaging Address",
      "description" : "The address to where electronic communications might be sent. For historical reasons, there is an overlap with edi-address.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-midwifery-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/midwifery-council-id"
      },
      "name" : "midwifery-council-id",
      "description" : "Midwifery Council Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-moe-facility-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/moe-facility-id"
      },
      "name" : "moe-facility-id",
      "description" : "This identifier, known as the 'MoE Number' or 'School Number', is used by the education sector to identify an NZ education institution. These identifiers can be looked up at the \\[[educationcounts.govt.nz](http://educationcounts.govt.nz)\\]([https://www.educationcounts.govt.nz/directories/list-of-nz-schools](https://www.educationcounts.govt.nz/directories/list-of-nz-schools)) website.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-MaoriDescentValueset.html"
      }],
      "reference" : {
        "reference" : "ValueSet/MaoriDescentValueset"
      },
      "name" : "Māori descent",
      "description" : "Codes indicating whether a person is of Māori descent",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-maoridescentcode.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/maoridescentcode"
      },
      "name" : "Māori descent codes",
      "description" : "Codes for classifying Māori descent. Defined by Stats NZ - Māori descent v1.0.0",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-nhi-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/nhi-id"
      },
      "name" : "nhi-id",
      "description" : "NHI number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-nursing-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/nursing-council-id"
      },
      "name" : "nursing-council-id",
      "description" : "Nursing Council of New Zealand Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nz-citizenship.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nz-citizenship"
      },
      "name" : "NZ Citizenship",
      "description" : "New Zealand citizenship",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-citizenship-status.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/citizenship-status"
      },
      "name" : "NZ Citizenship status",
      "description" : "Is this person a NZ Citizen",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-nz-citizenship-status-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/nz-citizenship-status-code"
      },
      "name" : "NZ Citizenship status",
      "description" : "Citizenship status",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-dhb-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/dhb-code"
      },
      "name" : "NZ DHB",
      "description" : "NZ District Health Board (HPI-ORG) Codes",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-domicile-code.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/domicile-code"
      },
      "name" : "NZ Domicile Code",
      "description" : "NZ Domicile Code. Derived from a patient's primary physical, home address.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-Ethnicity.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/Ethnicity"
      },
      "name" : "NZ ethnic group codes",
      "description" : "Ethnicity New Zealand Standard Classification 2005. Ethnicity is the ethnic group or groups that people identify with or feel they belong to.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nz-ethnicity.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nz-ethnicity"
      },
      "name" : "NZ Ethnicity",
      "description" : "The ethnic group or groups that a person identifies with or feels they belong to.  Ethnicity is a measure of cultural affiliation as opposed to race, ancestry, nationality or citizen.  Ethnicity is self-perceived and a person can belong to more than one group.\n\nThe Stats New Zealand standard can be found [here](http://aria.stats.govt.nz/aria/#ClassificationView:uri=http://stats.govt.nz/cms/ClassificationVersion/YVqOcFHSlguKkT17).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nz-geocode.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nz-geocode"
      },
      "name" : "NZ Geocode",
      "description" : "New Zealand Geocode. This uses a different datum from that defined in the HL7 FHIR specification for a Geocode.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-iwi-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/iwi-code"
      },
      "name" : "NZ Iwi",
      "description" : "NZ iwi and iwi-related groups statistical classification",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzPatient.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzPatient"
      },
      "name" : "NZ Patient",
      "description" : "The base New Zealand Patient profile",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzRelatedPerson.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzRelatedPerson"
      },
      "name" : "NZ RelatedPerson",
      "description" : "The base New Zealand RelatedPerson profile",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-nz-relationship-type.html"
      }],
      "reference" : {
        "reference" : "ValueSet/nz-relationship-type"
      },
      "name" : "NZ Relationship Type",
      "description" : "New Zealand relationship types, extending the HL7 related person relationship types with Māori concepts.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-nz-relationship-codes.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/nz-relationship-codes"
      },
      "name" : "NZ Relationship Type Code System",
      "description" : "Code system for NZ relationship type codes.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-nz-residency.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/nz-residency"
      },
      "name" : "NZ Residency status",
      "description" : "NZ Residency status",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-nz-residency-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/nz-residency-code"
      },
      "name" : "NZ Residency status",
      "description" : "Is the person a NZ resident",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-suburb.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/suburb"
      },
      "name" : "NZ Suburb",
      "description" : "Suburb element of a NZ Address.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-nz-address-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/nz-address-id"
      },
      "name" : "nz-address-id",
      "description" : "New Zealand Street Address Mapping Identifier",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nzeps-long-term-medication.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nzeps-long-term-medication"
      },
      "name" : "NZePS Long Term Medication Indicator",
      "description" : "NZePS Long Term Medication Indicator",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nzeps-supply-period-reason.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nzeps-supply-period-reason"
      },
      "name" : "NZePS Supply Period Reason",
      "description" : "The reason for a non-standard Supply Period.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nzeps-unusual-dose-quantity.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nzeps-unusual-dose-quantity"
      },
      "name" : "NZePS Unusual Dose Quantity Indicator",
      "description" : "NZePS Unusual Dose Quantity Indicator",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nzf-atc.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nzf-atc"
      },
      "name" : "Nzf_atc",
      "description" : "Anatomical Therapeutic Chemical (ATC) Classification - see https://www.who.int/tools/atc-ddd-toolkit/atc-classification",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nzf-nzmt-type.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nzf-nzmt-type"
      },
      "name" : "Nzf_nzmt_type",
      "description" : "The NZ Medicines Terminology (NZMT) Data Class – MP (Medicinal Product), MPUU (Medicinal Product Unit of Use), MPP (Medicinal Product Pack), TP (Trade Product), TPUU (Trade Product Unit of Use), TPP (Trade Product Pack) or CTPP (Containered Trade Product Pack) – that the Medication is a member of.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nz-residency.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nz-residency"
      },
      "name" : "NZResidency",
      "description" : "NZ Residency status",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-nz-iwi.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/nz-iwi"
      },
      "name" : "Nz_iwi",
      "description" : "Persons Iwi affiliation",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-occupational-therapy-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/occupational-therapy-board-id"
      },
      "name" : "occupational-therapy-board-id",
      "description" : "Occupational Therapy Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-optometrists-dispensing-opticians-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/optometrists-dispensing-opticians-board-id"
      },
      "name" : "optometrists-dispensing-opticians-board-id",
      "description" : "Optometrists & Dispensing Opticians Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzOrganization.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzOrganization"
      },
      "name" : "Organization resource for use in NZ",
      "description" : "Organization resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Organization-organization-edi-address.html"
      }],
      "reference" : {
        "reference" : "Organization/organization-edi-address"
      },
      "name" : "organization-edi-address",
      "description" : "Example of edi address extension",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Organization-organization-funded-programme.html"
      }],
      "reference" : {
        "reference" : "Organization/organization-funded-programme"
      },
      "name" : "organization-funded-programme",
      "description" : "Example of Funded programme",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Organization"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Organization-organization-moh.html"
      }],
      "reference" : {
        "reference" : "Organization/organization-moh"
      },
      "name" : "organization-moh",
      "description" : "Ministrt Of Health",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-osteopathic-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/osteopathic-council-id"
      },
      "name" : "osteopathic-council-id",
      "description" : "Osteopathic Council Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-paramedic-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/paramedic-council-id"
      },
      "name" : "paramedic-council-id",
      "description" : "Paramedic Council Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-address-building-name.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-address-building-name"
      },
      "name" : "patient-address-building-name",
      "description" : "Patient with building name in the address",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-address-suburb.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-address-suburb"
      },
      "name" : "patient-address-suburb",
      "description" : "Patient with building name and suburb in the address",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-building-name.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-building-name"
      },
      "name" : "patient-building-name",
      "description" : "Example of building name extension",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-deceased-information-source.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-deceased-information-source"
      },
      "name" : "patient-deceased-information-source",
      "description" : "Example of information source",
      "exampleCanonical" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-dhb.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-dhb"
      },
      "name" : "patient-dhb",
      "description" : "Patient1",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-domicile-code.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-domicile-code"
      },
      "name" : "patient-domicile-code",
      "description" : "Example of Domicile code",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-information-source.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-information-source"
      },
      "name" : "patient-information-source",
      "description" : "Example of information source",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-messaging-address.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-messaging-address"
      },
      "name" : "patient-messaging-address",
      "description" : "Patient1",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-nhi.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-nhi"
      },
      "name" : "patient-nhi",
      "description" : "Example of PHO",
      "exampleCanonical" : "http://hl7.org.nz/fhir/StructureDefinition/NzPatient"
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-nz-citizenship.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-nz-citizenship"
      },
      "name" : "patient-nz-citizenship",
      "description" : "Example of citizenship",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-nz-ethnicity.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-nz-ethnicity"
      },
      "name" : "patient-nz-ethnicity",
      "description" : "Example of ethnicity",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-nz-geocode.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-nz-geocode"
      },
      "name" : "patient-nz-geocode",
      "description" : "Example of geocode",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-nz-residency.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-nz-residency"
      },
      "name" : "patient-nz-residency",
      "description" : "Example of citizenship",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-pho.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-pho"
      },
      "name" : "patient-pho",
      "description" : "Example of PHO",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-sex-at-birth.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-sex-at-birth"
      },
      "name" : "patient-sex-at-birth",
      "description" : "Example of a Patient with the sex at birth extension",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Patient"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Patient-patient-suburb.html"
      }],
      "reference" : {
        "reference" : "Patient/patient-suburb"
      },
      "name" : "patient-suburb",
      "description" : "Example of suburb",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-pharmacy-council-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/pharmacy-council-id"
      },
      "name" : "pharmacy-council-id",
      "description" : "Pharmacy Council of New Zealand Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-pho.html"
      }],
      "reference" : {
        "reference" : "ValueSet/pho"
      },
      "name" : "PHO",
      "description" : "Primary Healthcare Organization",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-pho-status.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/pho-status"
      },
      "name" : "PHO",
      "description" : "Primary Healthcare Organization",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-physiotherapy-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/physiotherapy-board-id"
      },
      "name" : "physiotherapy-board-id",
      "description" : "Physiotherapy Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-podiatrists-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/podiatrists-board-id"
      },
      "name" : "podiatrists-board-id",
      "description" : "Podiatrists Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzPractitioner.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzPractitioner"
      },
      "name" : "Practitioner resource for use in NZ",
      "description" : "Practitioner resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-additional-authorisation.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-additional-authorisation"
      },
      "name" : "practitioner-additional-authorisation",
      "description" : "Additional authorisation example - to give immunizations in 2021",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-condition-on-practice.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-condition-on-practice"
      },
      "name" : "practitioner-condition-on-practice",
      "description" : "Example of Condition on practice",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-death-date.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-death-date"
      },
      "name" : "practitioner-death-date",
      "description" : "Example of Practitioner with detah date",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-edi-address.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-edi-address"
      },
      "name" : "practitioner-edi-address",
      "description" : "Example of Condition on practice",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-educational-qualification.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-educational-qualification"
      },
      "name" : "practitioner-educational-qualification",
      "description" : "Example of educational qualification",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-registration-initial-date.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-registration-initial-date"
      },
      "name" : "practitioner-registration-initial-date",
      "description" : "Example of Initial date of registration",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-registration-status-code.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-registration-status-code"
      },
      "name" : "practitioner-registration-status-code",
      "description" : "Example of registration status",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Practitioner"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "Practitioner-practitioner-scope-of-practice.html"
      }],
      "reference" : {
        "reference" : "Practitioner/practitioner-scope-of-practice"
      },
      "name" : "practitioner-scope-of-practice",
      "description" : "Example of scope of practice",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-NzPractitionerRole.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/NzPractitionerRole"
      },
      "name" : "PractitionerRole resource for use in NZ",
      "description" : "PractitionerRole resource for use in NZ",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-hpi-practitionerRole-status-reason.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/hpi-practitionerRole-status-reason"
      },
      "name" : "PractitionerRole status reason",
      "description" : "The reason for the current status of PractitionerRole",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-hpi-practitionerrole-status-reason.html"
      }],
      "reference" : {
        "reference" : "ValueSet/hpi-practitionerrole-status-reason"
      },
      "name" : "PractitionerRole status reason",
      "description" : "The reason for the current status of PractitionerRole",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "PractitionerRole-practitionerRole-creator.html"
      }],
      "reference" : {
        "reference" : "PractitionerRole/practitionerRole-creator"
      },
      "name" : "practitionerRole-creator",
      "description" : "The creator of a practitioner role. Uses a contained resource.",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "PractitionerRole-practitionerRole-messaging-address.html"
      }],
      "reference" : {
        "reference" : "PractitionerRole/practitionerRole-messaging-address"
      },
      "name" : "practitionerRole-messaging-address",
      "description" : "Example of status reason",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PractitionerRole"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "PractitionerRole-practitionerRole-status-reason.html"
      }],
      "reference" : {
        "reference" : "PractitionerRole/practitionerRole-status-reason"
      },
      "name" : "practitionerRole-status-reason",
      "description" : "Example of status reason",
      "exampleBoolean" : true
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-practitionerRole-creator.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/practitionerRole-creator"
      },
      "name" : "PractitionerRoleCreator",
      "description" : "The organisation and person that created this role",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-practitionerRole-status-reason.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/practitionerRole-status-reason"
      },
      "name" : "PractitionerRoleStatusReason",
      "description" : "The reason for the status. Generally only used for inactive resources.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-pho.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/pho"
      },
      "name" : "Primary Healthcare Organisation",
      "description" : "Primary Healthcare Organisation associated with a General Practice linked to a NZ Healthcare Service, Location (Facility) or Patient (GP).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-psychologists-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/psychologists-board-id"
      },
      "name" : "psychologists-board-id",
      "description" : "Psychologists Board Register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-psychotherapists-board-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/psychotherapists-board-id"
      },
      "name" : "psychotherapists-board-id",
      "description" : "Psychotherapists Board register Number",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-practitioner-registration-status-code.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/practitioner-registration-status-code"
      },
      "name" : "Registration Status of Practitioners",
      "description" : "The code list represents the current practicing status of the Provider Person as per their registration with an RA.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-practitioner-registration-status-code.html"
      }],
      "reference" : {
        "reference" : "ValueSet/practitioner-registration-status-code"
      },
      "name" : "Registration Status of Practitioners",
      "description" : "The code list represents the current practicing status of the Provider Person as per their registration with an RA.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-registration-initial-date.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/registration-initial-date"
      },
      "name" : "RegistrationInitialDate",
      "description" : "The date the practitioner first became registered with the Responsible Authority or professional body",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-registration-status-code.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/registration-status-code"
      },
      "name" : "RegistrationStatusCode",
      "description" : "An indicator of the practicing status of the practitioner as supplied by their Responsible Authority or professional body.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-rheumatic-fever-ccs-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/rheumatic-fever-ccs-id"
      },
      "name" : "rheumatic-fever-ccs-id",
      "description" : "Identifier assigned by the Rheumatic Fever Care Coordination System, used on CarePlan, Condition, CareTeam, and Observation resources.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-practitioner-scope-of-practice.html"
      }],
      "reference" : {
        "reference" : "ValueSet/practitioner-scope-of-practice"
      },
      "name" : "Scope of practice",
      "description" : "A coded type for professional scope of practice.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-scopeOfPractice.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/scopeOfPractice"
      },
      "name" : "Scope of practice",
      "description" : "A classification of the type or range of health services that a practitioner is authorised to provide, as determined by the Responsible Authority or other statutory authority (e.g. PHARMAC), that is, what the practitioner can or cannot do. It includes Scope of Practice as defined by the Health Practitioners Competence Assurance Act 2003, any special authorisations granted, and any conditions or limitations imposed by the Responsible Authority.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-scope-of-practice.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/scope-of-practice"
      },
      "name" : "ScopeOfPractice",
      "description" : "The type or range of health services a practitioner is authorised to perform, as determined by the Responsible Authority or professional body.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "NamingSystem-sdhr-id.html"
      }],
      "reference" : {
        "reference" : "NamingSystem/sdhr-id"
      },
      "name" : "sdhr-id",
      "description" : "Identifier namespace for SDHR-assigned resource identifiers.",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "StructureDefinition-sex-at-birth.html"
      }],
      "reference" : {
        "reference" : "StructureDefinition/sex-at-birth"
      },
      "name" : "Sex At Birth",
      "description" : "A person’s sex at the time of their birth (considered to be immutable).",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "CodeSystem-alias-type.html"
      }],
      "reference" : {
        "reference" : "CodeSystem/alias-type"
      },
      "name" : "Type of Alias",
      "description" : "Used in Organization and Location to indicate what is the type of Alias",
      "exampleBoolean" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      },
      {
        "url" : "http://hl7.org/fhir/StructureDefinition/implementationguide-page",
        "valueUri" : "ValueSet-nhi-use.html"
      }],
      "reference" : {
        "reference" : "ValueSet/nhi-use"
      },
      "name" : "Valid use values for NHI",
      "description" : "NHI Use codes",
      "exampleBoolean" : false
    }],
    "page" : {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
        "valueUrl" : "toc.html"
      }],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "index.html"
        }],
        "nameUrl" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "extensions.html"
        }],
        "nameUrl" : "extensions.html",
        "title" : "Extensions",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "namingSystems.html"
        }],
        "nameUrl" : "namingSystems.html",
        "title" : "Naming Systems",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "profiles.html"
        }],
        "nameUrl" : "profiles.html",
        "title" : "Profiles",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "StructureDefinition-nzpatient-summary.html"
        }],
        "nameUrl" : "StructureDefinition-nzpatient-summary.html",
        "title" : "Structure Definition Nzpatient Summary",
        "generation" : "markdown"
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "terminology.html"
        }],
        "nameUrl" : "terminology.html",
        "title" : "Terminology",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : "path-resource",
      "value" : "input/capabilities"
    },
    {
      "code" : "path-resource",
      "value" : "input/examples"
    },
    {
      "code" : "path-resource",
      "value" : "input/extensions"
    },
    {
      "code" : "path-resource",
      "value" : "input/models"
    },
    {
      "code" : "path-resource",
      "value" : "input/operations"
    },
    {
      "code" : "path-resource",
      "value" : "input/profiles"
    },
    {
      "code" : "path-resource",
      "value" : "input/resources"
    },
    {
      "code" : "path-resource",
      "value" : "input/vocabulary"
    },
    {
      "code" : "path-resource",
      "value" : "input/maps"
    },
    {
      "code" : "path-resource",
      "value" : "input/testing"
    },
    {
      "code" : "path-resource",
      "value" : "input/history"
    },
    {
      "code" : "path-resource",
      "value" : "fsh-generated/resources"
    },
    {
      "code" : "path-pages",
      "value" : "template/config"
    },
    {
      "code" : "path-pages",
      "value" : "input/images"
    },
    {
      "code" : "path-tx-cache",
      "value" : "input-cache/txcache"
    }]
  }
}

```
