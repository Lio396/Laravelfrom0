<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if (count($listings) == 0)
    <p> No listings found</p>
    @endif
    @if (count($listings) <= 10)
    <p> less then 10 listings found</p>
    @endif
    @if (count($listings) >= 10)
    <p> more then 10 listings found</p>
    @endif
        @foreach ($listings as $listing) 
            <div>
                <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
                <br>
                    {{$listing['id']}}
                <br>
                <p>{{$listing['text']}}</p>
                <br>
            </div>
        @endforeach
    </body>
</html>