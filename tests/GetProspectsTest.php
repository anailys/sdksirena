<?php

test('Send a message to the user through the WhatsApp channel', function () {
    
    $apiKey = "Yf9EkNsI4w5NFCo5r8w3r30F6P1oi2O7";
    $urlProspects = "https://api.getsirena.com/v1/prospects?api-key=".$apiKey;
    
    $sirena = new Sirena\Sirena();
    $result = $sirena->getProspects($urlProspects);
    
    $this->assertTrue(is_array($result));

});