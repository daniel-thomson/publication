<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-practitionerRole-status-reason.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
