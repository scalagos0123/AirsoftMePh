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
                events: [
                    {
                        title: 'sample event',
                        start:'2016-10-06'
                    },
                    {
                        title:'event #2',
                        start:'2016-10-06',
                        end: '2016-10-09'
                    }
                ]
            });
        </script>
    </body>
</html>