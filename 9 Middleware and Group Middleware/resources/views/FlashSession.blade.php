<!DOCTYPE html>
<html>
<body>

<h2>Forms</h2>

@if(session('fname'))
<h1>User Add {{ session('fname')}}</h1>
@endif

<form action="{{ url('Flashsubmit') }}" method="POST">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>

  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>

  <input type="submit" value="Submit">
</form> 

</body>
</html>
