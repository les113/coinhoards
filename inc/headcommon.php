    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap-3.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css" >

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css">

    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Hind:600,300' rel='stylesheet' type='text/css'>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- jqueryUI --->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <!-- Bootstrap JavaScript plugins -->
    <script src="bootstrap-3.3.1/js/bootstrap.min.js"></script>

    <!-- jqueryui map date slider -->
      <script>
      $(function() {
        $( "#slider" ).slider({
          value:100,
          min: -500,
          max: 500,
          step: 100,
          slide: function( event, ui ) {
            $( "#year" ).val( "AD" + ui.value );
          }
        });
        $( "#year" ).val( "AD" + $( "#slider" ).slider( "value" ) );
      });
      </script>

    <!-- jqueryui range slider -->
      <script>
      $(function() {
        $( "#slider-range" ).slider({
          range: true,
          min: -500,
          max: 500,
          values: [ 75, 300 ],
          slide: function( event, ui ) {
            $( "#range" ).val( "BC" + ui.values[ 0 ] + " - AD" + ui.values[ 1 ] );
          }
        });
        $( "#range" ).val( "BC" + $( "#slider-range" ).slider( "values", 0 ) +
          " - AD" + $( "#slider-range" ).slider( "values", 1 ) );
      });
      </script>

    <!--- jqueryui tabs -->
      <script>
      $(function() {
        $( "#tabs, #tabs2, #tabs3" ).tabs();
      });
      </script>
