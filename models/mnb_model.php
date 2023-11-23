<?php
class Mnb_Model
{
    public function index()
    {
        $retData['eredmeny'] = "";
        $retData['penznemek'] = array(
            'AUD', 'BGN', 'BRL', 'CAD', 'CHF', 'CNY', 'CZK', 'DKK', 'EUR', 'GBP', 'HKD', 'HRK', 'IDR', 'ILS', 'INR',
            'ISK', 'JPY', 'KRW', 'MXN', 'MYR', 'NOK', 'NZD', 'PHP', 'PLN', 'RON', 'RSD', 'RUB', 'SEK',
            'SGD', 'THB', 'TRY', 'UAH', 'USD', 'ZAR'
        );
        try {
            $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
            // Egy adott devizapár (pl. Eur-Huf, Eur-Usd, …) adott napján mennyi volt az árfolyam?
            $mnb = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);

            $retData['osszegek'] = $mnb['Day']->Rate;
        } catch (SoapFault $e) {
            $retData['eredmény'] = "ERROR";
            $retData['uzenet'] = "SOAP hiba: " . $e->getMessage() . "!";
        }
        return $retData;
    }
}

?>

