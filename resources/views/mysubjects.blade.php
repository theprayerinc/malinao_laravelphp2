@extends('layouts.app2')

@section("content")
<!DOCTYPE html>
<html>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9 col-md-offset-1">   
          <h3>Subject Information</h3>
              <div class="panel panel-default">
              	<table style="width:100%" border="1">
				  <tr>
				    <th>&nbsp;&nbsp;&nbsp;Subject Name</th>
				    <th>&nbsp;&nbsp;&nbsp;Day/s & Time</th> 
				    <th>&nbsp;&nbsp;&nbsp;Instructor</th>
				  </tr>
				  <tr>
				    <td>&nbsp;&nbsp;&nbsp;Projet Management</td>
				    <td>&nbsp;&nbsp;&nbsp;TTH - 8:00 - 9:30</td>
				    <td>&nbsp;&nbsp;&nbsp;Mr. Marvin Avegonzado</td>
				  </tr>
				  <tr>
				    <td>&nbsp;&nbsp;&nbsp;Practicum 41</td>
				    <td>&nbsp;&nbsp;&nbsp;MWF - 8:00- 5:00</td>
				    <td>&nbsp;&nbsp;&nbsp;Dr. Melvin M. Niñal</td>
				  </tr>
				   <tr>
				  <td>&nbsp;&nbsp;&nbsp;ITPHP2</td>
				  <td>&nbsp;&nbsp;&nbsp;MWF - 6:30 - 9:30 </td> 
				  <td>&nbsp;&nbsp;&nbsp;Mr. Gian Carlo Cataraja</td>
				  </tr>
				    <tr>
				    <td>&nbsp;&nbsp;&nbsp;Datastruc21</td>
				    <td>&nbsp;&nbsp;&nbsp;MWF - 2:30- 4:30</td>
				    <td>&nbsp;&nbsp;&nbsp;Ms. Amores</td>
				  </tr>
				</table>
              </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
@stop