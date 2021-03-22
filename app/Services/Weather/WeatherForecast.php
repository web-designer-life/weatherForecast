<?php

namespace App\Services\Weather;

use App\Models\Forecast;

class WeatherForecast
{
    public function getWeather()
    {
        $data = curl_init();

        curl_setopt_array($data, [
            CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/forecast.json?q=Hrodna",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "x-rapidapi-host: weatherapi-com.p.rapidapi.com",
                "x-rapidapi-key: 7e9ed43aa9msh6e7860b589a0516p1adddejsn5b2258776574"
            ],
        ]);

        $response = curl_exec($data);
        $err = curl_error($data);

        curl_close($data);

        $responseJSON = json_decode($response, true);

        $forecast = new Forecast([
            'city' => $responseJSON['location']['name'],
            'country' => $responseJSON['location']['country'],
            'localtime' => $responseJSON['location']['localtime'],
            'temp_c' => $responseJSON['current']['temp_c'],
            'humidity' => $responseJSON['current']['humidity'],
            'cloud' => $responseJSON['current']['cloud'],
            'pressure_mb' => $responseJSON['current']['pressure_mb'],
            'gust_kph' => $responseJSON['current']['gust_kph'],
            'vis_km' => $responseJSON['current']['vis_km'],
            'wind_kph' => $responseJSON['current']['wind_kph'],
        ]);

        $forecast->save();
    }
}

