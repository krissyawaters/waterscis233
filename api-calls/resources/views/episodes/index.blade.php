<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Episodes</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center mt-3">Episodes</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach($episodes as $episode)
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card h-100"> 
                        @if($episode->imageUrl)
                            <img src="{{ $episode->imageUrl }}" class="card-img-top" alt="Episode image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $episode->name }}</h5>
                            <p class="card-text">Season: {{ $episode->season }}, Episode: {{ $episode->episode }}</p>
                            <p class="card-text">{{ Illuminate\Support\Str::limit(strip_tags($episode->summary), 150) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
