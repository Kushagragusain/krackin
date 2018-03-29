
<?php  use App\Http\Controllers\MyController; ?>
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <a href="krackin_project/public/saved_courses">
      <button type="button" class="btn btn-danger" id="btn" >View Saved Courses</button></a>
      <th>Name</th>
      <th>Course Type</th>
      <th>Course Id</th>
    </tr>
  </thead>
 

     @foreach ($ele as $e) 
    
       <tr>
       <td>{{ $e['name']  }}</td>
         <td>{{ $e['courseType']  }}
           <td>{{ $e['id'] }}</td>
             <td>
              <a href="krackin_project/public/save/{{ $e['name'] }}/{{ $e['courseType'] }}/{{ $e['id'] }}"><button type="button" class="btn btn-danger" id="bt" value="$e">Save Course</button></a>
              </td>
         </tr>
         


    @endforeach   

</table>