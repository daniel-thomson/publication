<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.html');
else 
  Redirect('http://fhir.org.nz/ig/base/3.1.0/MedicationRequest-medicationrequest-nzeps-unusual-dose-quantity.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
