<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/StructureDefinition-nz-iwi.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
