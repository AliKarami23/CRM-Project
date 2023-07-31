<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('bootstrap.css')}}" rel="stylesheet">

</head>
<body>
<div class="container">
<form action="{{route('register')}}" method="post">
 @csrf
    <div class="mb-3 mt-3">
        <label for="FirstName" class="form-label">FirstName:</label>
        <input type="text" class="form-control" id="fname" placeholder="first name" name="fname">
    </div>

    <div class="mb-3 mt-3">
        <label for="LastName" class="form-label">LastName:</label>
        <input type="text" class="form-control" id="lname" placeholder="last name" name="lname">
    </div>

    <div class="mb-3 mt-3">
        <label for="addres" class="form-label">Addres:</label>
        <input type="text" class="form-control" id="addres" placeholder="addres" name="addres">
    </div>

    <div class="mb-3 mt-3">
        <label for="phone" class="form-label">PhoneNumber:</label>
        <input type="text" class="form-control" id="phone" placeholder="phone number" name="phone">
    </div>

    <div class="mb-3 mt-3">
        <label for="City" class="form-label">City:</label>
        <input type="text" class="form-control" id="city" placeholder="city" name="city">
    </div>

    <div class="mb-3 mt-3">
        <label for="Country" class="form-label">Country:</label>
        <input type="text" class="form-control" id="country" placeholder="Countri" name="country">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   <br><br>


    <table class="mytabal">
        <tr class="trtabal">
            @foreach($array as $key => $value)
                <th class="tdtabal">{{ $key }}</th>
            @endforeach
        </tr>

        <tr class="trtabal">
            @foreach($array as $key => $value)
                <td class="tdtabal">{{ $value }}</td>
            @endforeach
        </tr>

    </table>




</div>
</body>
</html>
