# NZ Base FHIR IG — publication workspace

Configuration and published output for the **HL7® FHIR® New Zealand Base Implementation
Guide** (`fhir.org.nz.ig.base`, canonical `http://fhir.org.nz/ig/base`), as produced by the
HL7 FHIR IG Publisher running in `-go-publish` mode.

**This is not the IG source.** Profiles, extensions and FSH live in
[HL7NZ/nzbase](https://github.com/HL7NZ/nzbase). This repository is just capturing the *publication* config:
the settings that control how a release is published to `fhir.org.nz`, the NZ-customised
page templates, and the resulting website.

## Published versions

| Version | FHIR | Date | Path |
|---|---|---|---|
| 3.1.0 | R4 (4.0.1) | 2026-07-24 | http://fhir.org.nz/ig/base/3.1.0 |
| 3.0.1 | R4 (4.0.1) | 2024-08-14 | http://fhir.org.nz/ig/base/3.0.1 |

The authoritative list — including the `current` CI build entry — is
`webroot/ig/base/package-list.json`, which the publisher maintains.

## Running a publication

A release is published by the IG Publisher in `-go-publish` mode, which builds the IG from
source, copies it into the web root, updates the version history and feeds, and rewrites the
publish-box banner on every previously published version.

Args used for the 3.1.0 release:

```
-go-publish
  -source    d:/publication/sources/nzbase
  -web       d:/publication/webroot
  -history   d:/publication/ig-history
  -registry  d:/publication/ig-registry/fhir-ig-list.json
  -temp      d:/publication/temp
  -templates d:/publication/templates
```

Paths there are absolute to this workspace; adjust them for your own checkout.

The publication request that drives a run is `publication-request.json` in the IG source; a worked example is kept here as `example-publication-request.json`.

Note that every run rewrites all the HTML in *previously* published version directories, to
update the "this version is superseded by…" banner. A release therefore produces a large
diff across older version folders where nothing but the banner has changed.

## What this repository tracks

| Path | What it is |
|---|---|
| `webroot/publish-setup.json` | Website settings — layout style, org, URL, feed names, and the layout rule mapping `fhir.org.nz.ig.*` to `/ig/{5}` |
| `webroot/package-registry.json` | Registry index tying the package id to its `package-list.json`, canonical URL and CI build |
| `webroot/package-feed.xml` | Package feed consumed by the FHIR package registry |
| `webroot/publication-feed.xml` | Publication announcement feed |
| `webroot/ig/base/package-list.json` | Version history for the IG — the source of the published-versions directory |
| `webroot/ig/base/3.0.1/`, `3.1.0/` | The published websites, exactly as deployed |
| `webroot/ig-build-zips/*.log` | Publisher run log per release — records the publisher and SUSHI versions and every resolved dependency version |
| `templates/` | NZ-customised publication page templates (header, index, preamble, postamble, search form, tech-correction, withdrawal) |
| `example-publication-request.json` | Reference copy of a publication request |

The templates are derived from [HL7/fhir-web-templates](https://github.com/HL7/fhir-web-templates)
but have been customised for NZ, so they are not reproducible by re-cloning upstream and must
be version controlled here. Needs fixing to update to the green NZ Base theme / HL7NZ Template. 

## What this repository does not track

Four working directories are clones of upstream repositories. They are ignored here so they
are not embedded as nested repos, and should be pulled fresh rather than tracked:

| Directory | Upstream |
|---|---|
| `sources/nzbase` | https://github.com/HL7NZ/nzbase |
| `fhir-web-templates` | https://github.com/HL7/fhir-web-templates |
| `ig-history` | https://github.com/HL7/fhir-ig-history-template |
| `ig-registry` | https://github.com/FHIR/ig-registry |

Also excluded:

- `temp/` — publisher scratch space, rebuilt every run.
- `webroot/ig-build-zips/*.zip` — see below.

### Build archives

Each run writes a snapshot of the whole build workspace to
`webroot/ig-build-zips/<package>#<version>.zip`. These are roughly 270 MB per release, so
they are **archived to object storage** rather than committed, and only the accompanying
`.log` is tracked here.

They are worth keeping. The build resolves several dependencies as `#latest` — for 3.1.0 that
was `hl7.terminology.r4` 7.2.0, `hl7.fhir.uv.extensions.r4` 5.3.0 and `hl7.fhir.uv.tools.r4`
1.1.2 — so a rebuild at a later date will not reproduce the same inputs. The zip is the only
byte-exact record of what was actually published.

Archived copy here of whole publication dir incl. zip here: https://drive.google.com/drive/folders/1ha5F4WwljxUO_nCcwDmVOkA3QU7ndJg4?usp=sharing

## Setting up a working copy

```sh
git clone https://github.com/daniel-thomson/publication.git
cd publication
git clone https://github.com/HL7NZ/nzbase.git                 sources/nzbase
git clone https://github.com/HL7/fhir-web-templates.git       fhir-web-templates
git clone https://github.com/HL7/fhir-ig-history-template.git ig-history
git clone https://github.com/FHIR/ig-registry.git             ig-registry
```

`temp/` is created by the publisher and needs no setup.

## Line endings

The publisher emits a mixture of LF, CRLF and mixed-ending files, and publication runs may
happen on Windows, WSL or Linux. `.gitattributes` therefore normalises all text to LF in the
repository and declares every binary type explicitly, so committed content is identical
regardless of who runs the publish or on which platform. This overrides each contributor's
`core.autocrlf`, so no local git configuration is required.

Byte-exact line endings of a given release are preserved in the archived build zip, not here.
