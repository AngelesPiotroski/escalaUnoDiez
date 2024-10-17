{{-- @extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error')) --}}
{{-- resources/views/errors/500.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #e8e8e6;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        img {
            max-width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('assets/images/error500.png') }}" alt="Error 500">
    </div>
</body>
</html>
