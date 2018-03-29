<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>Name</th>
      <th>Course Type</th>
      <th>Course Id</th>
    </tr>
  </thead>
 

     @foreach ($course as $c) 
    
       <tr>
       <td>{{ $c->course_name  }}</td>
         <td>{{ $c->course_type  }}</td>
           <td>{{ $c->course_id }}</td>
        
         </tr>
         
  @endforeach   

</table>