<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-contact-point-purpose.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
