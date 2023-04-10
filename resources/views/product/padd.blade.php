@include('partials.header')
 <center><img src="logo.png" width="250" height="150" > </center>

<h5>Fill out the form to add new product</h5>
<form action="/saveProduct" method="POST">
    @csrf

    <div class="mb-3">
      <label for="prodName" class="form-label">Product Name</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="prodName">
    </div>


    <div class="mb-3">
      <label for="prodQuantity" class="form-label">Product Quantity</label>
      <input
      type="text"
      class="form-control"
      aria-describedby="emailHelp"
      name="prodQuantity">
    </div>



    <div class="mb-3">
      <label for="prodPrice" class="form-label">Product Price</label>
      <input
      type="text"
      class="form-control"
      id="exampleInputEmail1"
      aria-describedby="emailHelp"
      name="prodPrice">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
    <a href={{"/product"}} class="btn btn-info">Back</a>
  </form>
  <style>
     body{
        padding:2%;
        margin:0%;
        background: rgb(222,199,51);
        background: linear-gradient(180deg, rgba(222,199,51,1) 0%, rgba(190,179,179,1) 52%, rgba(203,0,0,0.6946068548387097) 100%);
    }
    form{
        padding:5%;
    }
</style>
