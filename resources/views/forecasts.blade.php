<html>
<head>
    <style>
        svg {
            display: none;
        }
        .data {
            max-width: 100%;
            border: 1px solid #000;
        }
        .data__list {
            display: flex;
            justify-content: space-around;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .data__item {
            list-style-type: none;
            text-align: center;
            border: 1px solid #000;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="data">
        <ul class="data__list">
            <li class="data__item">City</li>
            <li class="data__item">Country</li>
            <li class="data__item">Localtime</li>
            <li class="data__item">Temperature(c)</li>
            <li class="data__item">Humidity</li>
            <li class="data__item">Cloud</li>
            <li class="data__item">Pressure(mb)</li>
            <li class="data__item">Gust(kph)</li>
            <li class="data__item">Vis(km)</li>
            <li class="data__item">Wind(kph)</li>
        </ul>
        @foreach($data as $item)
            <ul class="data__list">
                <li class="data__item">{{$item->city}}</li>
                <li class="data__item">{{$item->country}}</li>
                <li class="data__item">{{$item->localtime}}</li>
                <li class="data__item">{{$item->temp_c}}</li>
                <li class="data__item">{{$item->humidity}}</li>
                <li class="data__item">{{$item->cloud}}</li>
                <li class="data__item">{{$item->pressure_mb}}</li>
                <li class="data__item">{{$item->gust_kph}}</li>
                <li class="data__item">{{$item->vis_km}}</li>
                <li class="data__item">{{$item->wind_kph}}</li>
            </ul>
        @endforeach
    </div>

    <div>
        {{$data->links()}}
    </div>
</body>
</html>
