<?php 

namespace soluwire\currencyapi;
use soluwire\currencyapi\api\Position;


Class Driver {
    /**
     * Calls our default driver, found in our config.
     *
     * @param String $ip
     * @return Position $position
     */
    public static function CallApi(String $ip): Position {
       
        // Get our config to find the default set.
        $api = config('currencyapi.default_api');

        $api = new $api($ip);
     
        $ch = curl_init();

         curl_setopt($ch, CURLOPT_URL, $api->url);
 
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
         $output = curl_exec($ch);

         curl_close($ch);     
         $data  = json_decode($output);

        // Depending on countrycode, set currency- this needs more countries.
        switch ($data->countryCode) {
            case 'GB':
                $currency = "£";
                break;
                case 'US':
                $currency = "$";
                break;
                case 'FR' :
                $currency = "€";
                break;
            default:
            if (strpos($data->timezone, 'Europe') !== false) {
                $currency = "€";
                break;
            }else if (strpos($data->timezone, 'Africa') !== false()){
                $currency = "R";
                break;
            }else if (strpos($data->timezone, 'Dubai') !== false()){
                $currency = "د.إ";
                break;

            }else if (strpos($data->timezone, 'Asia') !== false()){
                $currency = "¥";
                break;
                
            
            }else{
                $currency = config('currencyapi.default_currency');
                break;
            }
              
        }

        // Set our position.
        $position = new Position();
        $position->latitude = $data->lat;
        $position->longitude = $data->lon;
        $position->city = $data->city;
        $position->region = $data->region;
        $position->currency = $currency;
         // return position;
        return $position;
    }

}


?>