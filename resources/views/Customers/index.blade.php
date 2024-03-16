<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="{{url('bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-3">
        <h2 class="text-center m-4">Customers List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Phone</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer ->firstName}}</td>
                    <td>{{$customer ->lastName}}</td>
                    <td>{{$customer ->phone}}</td>
                    <td>{{$customer ->email}}</td>
                    <td>
                        <a href="{{route('customers.delete' , $customer->id)}}" class="btn btn-danger ">delete</a>
                        <a href="{{route('customers.edit' , $customer->id)}}" class="btn btn-success ">edit</a>
                        <a href="{{route('customers.show' , $customer->id)}}" class="btn btn-info text-white">details</a>
                    </td>
                  
                </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{route('customers.create')}}" class="btn btn-primary w-25 mb-4" >Add Customer</a>
      </div>
</body>
</html>