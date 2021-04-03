<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Report</title>
    <style>
    #emp{
font-family: Arial,Helvetica,sans-serif;
border-collapse:collapse;
width:100%;

    }

    #emp td,#emp th{
border:1px solid #ddd;
padding:0px;

    }
    #emp tr:nth-child(even){
      background-color:#0bfdfd;
    }

    #emp th{
      padding-top:3px;
      padding-bottom:3px;
      text-align:left;
      background-color:#4cAF50;
      color:#fff;

    }
    
    </style>
</head>
<body>

<!-- <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" type='get' action="{{url('/search')}}">
      <input class="form-control me-2" name='query' type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button> -->
      <!-- <div class="modal-body">
                    <div class="form-group">
                        <label>Expire Date</label><br>
                        <input type="date" class="form-control" name="Expire_date" placeholder="Enter expire date">
                    </div>
                </div> -->
</br></br>
    </form>
  </div>
</nav>


<a href="http://127.0.0.1:8000/download-pdf" class="btn btn-dark" role="button" aria-pressed="true"> PDF</a>
<table id="emp">

<tr>
    
    <th>product_Name</th>
    <th>cost_price</th>
    <th>sales_price</th>
    <th>weight</th>
    <th>Expire date</th>
     
  </tr>
  @foreach($dat as $item)
  <tr> 
   
    
    <td>{{$item->product_Name}}</td>
    <td>{{$item->cost_price}}</td>
    <td>{{$item->sales_price}}</td>
    <td>{{$item->Expire_date}}</td> 
    <td>{{$item->weight}}</td>

  </tr>
  @endforeach
</table>
</body>