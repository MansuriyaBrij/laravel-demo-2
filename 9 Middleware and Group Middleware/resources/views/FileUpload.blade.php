<!DOCTYPE html>
<html>
<body>

<h2>Forms</h2>

<form action="{{ url('FileUploadsub') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <label for="fname">Image</label><br>
  <input type="file" id="fname" name="Image"><br><br>

 
  <input type="submit" value="Submit">
</form> 

</body>
</html>
