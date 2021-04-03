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
width:80%;
margin: 55px;

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
    <form class="d-flex" type='get' action="{{url('/searchroute')}}">
      <input class="form-control me-2" name='query' type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
     <div class="form-group row">
                                
</br></br>
    </form>
  </div>
</nav>   -->

<form  action="{{route('search')}}" method ="POST">
                @csrf
                <br>
                <div class="container">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="form-group row">
                                <label for="date" class="col-form-label col-sm-2">placed_date from</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" required/>
                                </div>
                                <label for="date" class="col-form-label col-sm-2">placed_date To</label>
                                <div class="col-sm-3">
                                    <input type="date" class="form-control input-sm" id="toDate" name="toDate" required/>
                                </div>
                            <!-- </div>
                            <div class="form-group row">
                                <label for="date" class="col-form-label col-sm-2">Other</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control input-sm" id="other" name="other"placeholder="Search other..." />
                                </div> -->
                                <div class="col-sm-2">
                                    <button type="submit" class="btn" name="search" title="Search"><img src="https://img.icons8.com/android/24/000000/search.png"/></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </form>


<!-- <a href="http://127.0.0.1:8000/download-pdfroute" class="btn btn-dark" role="button" aria-pressed="true"> PDF</a> -->
<table id="emp">

<tr>
    <th>Order ID </th>
   
    <th>Shop Name</th>
    <th>Place Date</th>
    <th>Bill value</th>
    <th>discount</th>
    
     
  </tr>
  @foreach($data as $item)
  <tr> 
   
    <td>{{$item->OrderID}}</td>
   
    <td>{{$item->shop_name}}</td>
    <td>{{$item->placed_date}}</td>
    <td>{{$item->bill_value}}</td>
    <td>{{$item->discount}}</td>
     

  </tr>
  @endforeach
</table>
</body>