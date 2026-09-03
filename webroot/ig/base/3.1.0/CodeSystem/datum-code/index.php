<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/CodeSystem-datum-code.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
