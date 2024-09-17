<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Link to external CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">


</head>
<body>

    <div class="form-container">
     <a href="{{url('/showdata')}}" class="btn btn-primary my-3">updatedata</a>
    
        <h2>Register</h2>
          <form action="{{url('/updatedata/' .$editdata->id)}}" method="get">
                  @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value ="{{$editdata->name}}" placeholder="Enter your username" required><br><br>
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror


            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value ="{{$editdata->email}}"placeholder="Enter your email" required><br><br>
            @error('name')
              <span class="text-danger">{{ $message }}</span>
            @enderror

            <button type="submit">submit</button>
          </form>
    </div>

</body>
</html>
