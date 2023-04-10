@include('partials.header')
<x-nav/>
<h2>Products</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product </th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @if(Session::has('success'))
  <div class="alert alert-danger" role="alert">
  {{ Session::get('success') }}
</div>

  @endif
  @foreach($products as $product)

  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->prodName}}</td>
      <td>{{$product->prodQuantity}}</td>
      <td>{{$product->prodPrice}}</td>
      <td><a href="edit/{{$product->id}}" class="btn btn-primary">Edit</a></td>
      <td><a href="delete/{{$product->id}}" class="btn btn-danger">Delete</a></td>

    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')
<style>
    body{
        margin-top:2%;
        background: rgb(222,199,51);
        background: linear-gradient(180deg, rgba(222,199,51,1) 0%, rgba(190,179,179,1) 52%, rgba(203,0,0,0.6946068548387097) 100%);
    }
    th{
        font-size: 20px;
        text-align: center;
    }
   td{
    font-weight: 600;
    text-align: center;
   }
   footer{
    font-weight: 600;
   }
   h2{
    margin-top: 5px;
    border-style: dotted;
    padding:5px;
    text-align: center;
    border-radius: 5px;
   }
   nav{
    background: rgb(228,225,225);
    background: radial-gradient(circle, rgba(228,225,225,1) 0%, rgba(218,218,218,1) 100%);
    border-radius: 5px;
   }
   li{
    font-size: 18px;
   }
</style>
