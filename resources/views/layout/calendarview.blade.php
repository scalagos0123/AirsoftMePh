<!DOCTYPE HTML>
<html>
    <head>
        <title>Demo Calendar</title>
        <link rel="stylesheet" href="css/app.css">
        <script src="js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar-default"></nav>

        @yield('calendar')

        </div>

        <script>
            $("#calendar").fullCalendar({
                eventSources: [
                    {
                        url: '/api/test-events' // use the `url` property
                    }
                ]
            });
        </script>
    </body>
</html>