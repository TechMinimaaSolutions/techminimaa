<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="version" content="{{ time() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Roboto', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body>
    @include('partials.header')

    <div class="">
        @yield('content')
    </div>

    @include('partials.footer')

    <script src="{{ asset('js/app.js') }}?v={{ time() }}" defer></script>
</body>
</html>