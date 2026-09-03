<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/PractitionerRole-practitionerRole-creator.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
