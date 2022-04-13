<?php


namespace App\Acme;

/**
 * Class OpenWeatherMap
 * @package App\Acme
 */
class OpenWeatherMap
{
    public const API_KEY = "a30fc526a3eddb84eee5da3d388c2bd6";
    public const API_OPEN_WEATHER_MAP_ORG = "api.openweathermap.org/data/2.5/weather";
    public const CITY_NAME = 'London';
    public const Q_PARaM = '?q=';
    public const APID = '&appid=';
    private const PROTOCOL = "https://";

    /**
     * @return string
     */
    public function getNameCity(): string
    {
        return self::CITY_NAME;
    }

    /**
     * @return string
     */
    private function getRequest(): string
    {
        return self::API_OPEN_WEATHER_MAP_ORG . self::Q_PARaM . self::CITY_NAME . self::APID . self::API_KEY;
    }

    /**
     * @return string
     */
    private function getResponseHttpRequest(): string
    {
        $url = self::PROTOCOL . $this->getRequest();

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: */*",
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;
    }

    /**
     * @return array
     */
    public function getWeatherArray(): array
    {
        $resp = $this->getResponseHttpRequest();

        $forCastArray = json_decode($resp, true);

        //object manipulete
        var_dump("forCastArray", $forCastArray);

        return $forCastArray;
    }
}