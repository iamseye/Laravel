<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>

    <div class="container">
            <div class="content">
                <div class="title">
                    
                    @yield('content')

                </div>
            </div>
    </div>

        @yield('footer')
    </body>
</html>
