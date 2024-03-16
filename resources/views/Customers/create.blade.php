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
    <form action="{{route('customers.store')}}" method="POST" class="w-75 mx-auto mt-5 border-2 bg-dark text-white rounded-3 p-4">
        @csrf
        <div class="mb-3 mt-3">
          <label for="firstname" class="form-label">First Name:</label>
          <input type="text" class="form-control" id="firstname" placeholder="Enter your First name" name="firstName">
        </div>
        <div class="mb-3 mt-3">
          <label for="lastNmae" class="form-label">Last Name:</label>
          <input type="text" class="form-control" id="lastNmae" placeholder="Enter your First name" name="lastName">
        </div>
        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="mb-3 mt-3">
          <label for="tel" class="form-label">Phone Number:</label>
          <input type="tel" class="form-control" id="tel" placeholder="Enter your phone number" name="phone">
        </div>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</body>
</html>