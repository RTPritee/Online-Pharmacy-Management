<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</head>
<body>
   
<div class="container-fluid">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="navbar-brand" href="/">Online Pharmacy</a>
  
  <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="adminDashboard">Dashboard</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="viewSupplier">Suppliers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="viewCustomers">Customers</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="viewMedicine">My Store</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout"><b>LogOut</b></a>
  </li>
  </ul>
</nav>
@yield('content')
</div>
   
</body>
</html>