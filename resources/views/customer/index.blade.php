@include('partials.header')
<x-nav/>
<h2>Employees</h2>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
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
  @foreach($customers as $customer)

  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="edit/{{$customer->id}}" class="btn btn-primary">Edit</a></td>
      <td><a href="delete/{{$customer->id}}" class="btn btn-danger">Delete</a></td>

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

