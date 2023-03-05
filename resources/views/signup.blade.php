<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div style="text-align:center; justify-content:center ">
    <form action="" method="post">
        <h1>SignUp </h1>
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('failure'))
      <div class="alert alert-danger">{{Session::get('failure')}}</div>
    @endif
        @csrf
        @error('name')
            <span class="alert alert-danger">{{$message}}</span>
        @enderror
        <br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
      <br>
      @error('email')
      <span class="alert alert-danger">{{$message}}</span>
  @enderror
  <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
      <br>
      @error('number')
      <span class="alert alert-danger">{{$message}}</span>
  @enderror
  <br>
      <label for="number">Mobile:</label>
      <input type="number" id="number" name="number" >
    <br>
    @error('gender')
      <span class="alert alert-danger">{{$message}}</span>
  @enderror
  <br>
        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
<br>
@error('state')
<span class="alert alert-danger">{{$message}}</span>
@enderror
<br>
        <label for="state">State:</label>
        <select name="state" id="state" class="state">
            <option value="Select your state">Select your state</option>
            <option value="punjab">punjab</option>
            <option value="delhi">delhi</option>
            <option value="mumbai">mumbai</option>
        </select>
       <br>
       @error('Dob')
       <span class="alert alert-danger">{{$message}}</span>
   @enderror
   <br>
        <label for="Dob">Dob:</label>
        <input type="date" name="Dob" ><br>
        <label for="Address">Address:</label>
        <textarea id="Address" name="Address"></textarea>
      <br>
      @error('password')
      <span class="alert alert-danger">{{$message}}</span>
  @enderror
  <br>
      <label for="password">password:</label>
      <input type="password" id="password" name="password">
      <br>
      @error('Cpassword')
      <span class="alert alert-danger">{{$message}}</span>
  @enderror
  <br>
      <label for="Cpassword">Cpassword:</label>
      <input type="password" id="Cpassword" name="Cpassword" >
      <br>
        <button type="submit">Submit</button>
      </form>
      <a href="login">LOGIN!!!!</a>
     
      </div>
      
      
      
      
      
  </body>
</html>