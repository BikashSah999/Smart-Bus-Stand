<html>
    <head>
        <title>  Bikash  </title>
        <link type='text/css' rel='stylesheet' href='template.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="Phoenix_logo.png" class="img-fluid" height=200px width=200px class="mx-auto d-block">         
            </div>
            <div class="col-sm-8">  
                 <h1 class="text-lg-center header"> SMART BUS STAND </h1>
            </div>
         </div>
         <div class="row">
            <div class="col"><hr></div>
            <div class="col-auto">  ABC </div>
            <div class="col"><hr></div>
        </div>
        <div class='row'>
            <div class="col-sm-4 information">
                <h5> Information </h5>
                <script type="text/javascript">
                document.write ('<p>Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
                if (document.getElementById) onload = function () {
                    setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
                }
                </script>
            </div>

            <div class="col-sm-8">
                <h4 class="text-center"> Available Buses in Another Bus Stand</h4>
                <div class="row">
                    <div class="col"><hr></div>
                    <div class="col"><hr></div>
                </div>
                <div class="row">
                   <div class='col-sm-6 bustime'>
                        <h4 class="text-center"> Buses</h4>
                        <h6>
                       
                        </h6>
                   </div>
                   <div class='col-sm-6'>
                        <h4 class="text-center"> Time</h4>
                        <h6>
                            
                        </h6>
                   </div> 
                </div>
            </div>
        </div>
    </div>
    </body>
</html>