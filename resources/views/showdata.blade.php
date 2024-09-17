<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
     <a href="{{url('/add_data')}}" class="btn btn-primary my-3">showdata</a>
           @if(Session::has('msg'))
               <p class='alert alert-success'>{{session::get('msg')}}</p>
           @endif
    
    <table class="table">
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
     </tr>
     </thead>
         <tbody>
           @foreach($showdata as $key=>$data)
             <tr>
   
              <td>{{$key+1}}</td>
               <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td><a href="{{url('/editdata/'.$data->id)}}"class='btn btn-success'>edit</a></td>
                 <td><a href="{{url('/delect_data/'.$data->id)}}" onclick="return confirm('are you sure to delect')"class='btn btn-danger'>delect</a></td>
    
      
             </tr>
            @endforeach
      </tbody>
   </table>

       {{$showdata->links()}}
 
  </body>
</html>