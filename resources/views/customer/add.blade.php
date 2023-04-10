@include('partials.header')
 <center><img src="logo.png" width="250" height="150" > </center>

<h5>Fill out the form to add new employee</h5>
<form action="/saveCustomer" method="POST">
    @csrf
<div class="mb-3">
      <label for="firstName" class="form-label">First Name</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="firstName">

    </div>


    <div class="mb-3">
      <label for="lastName" class="form-label">Last Name</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="lastName">

    </div>



    <div class="mb-3">
      <label for="contactNumber" class="form-label">Contact Number</label>
      <input
      type="text"
      class="form-control"
      id="exampleInputEmail1"
      aria-describedby="emailHelp"
      name="contactNumber">

    </div>


    <div class="mb-3">
      <label for="address" class="form-label">Address</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="address">

    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email Address</label>
      <input
      type="email"
      class="form-control"
      id="exampleInputEmail1"
      aria-describedby="emailHelp"
      name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
    <a href={{"/"}} class="btn btn-info">Back</a>
  </form>
  <style>
     body{
        padding:2%;
        background: rgb(222,199,51);
        background: linear-gradient(180deg, rgba(222,199,51,1) 0%, rgba(190,179,179,1) 52%, rgba(203,0,0,0.6946068548387097) 100%);
    }
    form{
        padding:5%;
    }
</style>

