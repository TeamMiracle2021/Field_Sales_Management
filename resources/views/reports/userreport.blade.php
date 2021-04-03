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

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" type='get' action="{{url('/search')}}">
      <input class="form-control me-2" name='query' type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
     <div class="form-group row">
                                
 
    </form>
  </div>
</nav> 
</br></br>
<a href="http://127.0.0.1:8000/download-pdf-User" class="btn btn-dark" role="button" aria-pressed="true"> PDF</a>
<table id="emp"> 
 
<tr>
    
    <th>Full Name</th>
    
    <th>NIC</th>
    <th>Address</th>
    <th>Gender</th>
     <th>User Email</th>
    <th>branch</th>
     
     
  </tr>
  @foreach($data as $item)
  <tr> 
   
     
    <td>{{$item->first_name." ".$item->last_name}}</td>
    
    <td>{{$item->NIC}}</td>
    <td>{{$item->Address}}</td>
    <td>{{$item->Gender}}</td>
     
    <td>{{$item->email}}</td>
    <td>{{$item->branch_name}}</td>


  </tr>
  @endforeach
</table>
<!-- </body> -->