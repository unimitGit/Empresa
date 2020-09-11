<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Pusher Test</title>
  
  <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" ></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('12334ab718b48b22d583', {
      cluster: 'us2'
    });

    var channel = pusher.subscribe('user.1');
    channel.bind('myevent', function(data) {
      alert(JSON.stringify(data));
    });
  </script>

  <!-- <script>
  var channel = Echo.channel('user.1');
  channel.listen('myevent', function(data) {
    alert(JSON.stringify(data));
  });
  </script> -->

</head>
<body>
  <h1>Pusher Test user.{{$user_id}}</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>