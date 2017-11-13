<!-- Data to show: # of planes in your fleet, # flights scheduled on any day, and the names of your base airport and those that you fly to.  -->
<h4><span class="glyphicon glyphicon-plane"></span> Number of Fleet: {fleetNum}</h4> 
<h4><span class="glyphicon glyphicon-time"></span> Flights per Day: {flightsNum}</h4> 


<div class="row">    
      <h3><span class="glyphicon glyphicon-map-marker"></span> Airports</h3>
      <div class="panel panel-default">
          <div class="panel-heading"><b>Base Airport</b></div>
          <div class="panel-body">{baseAirport}</div>        
      </div>
      <div class="panel panel-default">
          <div class="panel-heading"><b>Connecting Airports</b></div>
          <div classs="panel-body">
              <table class="table table-striped">
                <thead>
                    <tr>
                        <!-- table headers -->
                        <td><b>Code</b></td>
                        <td><b>Airport</b></td>
                    </tr>
                </thead>
                <tbody>
                    {airports}
                    <tr>
                        <!-- table content taken from FlightInfo model -->
                        <td>{id}</td>
                        <td>{airport}</td>
                    </tr>
                    {/airports}
                </tbody>
            </table>  
          </div>
      </div>    
</div>
<br>
<br>