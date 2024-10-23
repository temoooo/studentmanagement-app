<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Management project</title>



<style>
    /* The side navigation menu */
/* .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
} */

/* Sidebar links */
/* .sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
} */

/* Active/current link */
/* .sidebar a.active {
  background-color: #04AA6D;
  color: rgb(209, 10, 10);
} */

/* Links on mouse-over */
/* .sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
} */

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

.sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 15px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar li {
            padding: 10px;
            cursor: pointer;
        }
        .sidebar li:hover {
            background-color: #f74e4e; /* Change color on hover */
        }
        .sidebar li.active {
            background-color: #f01a1a; /* Selected item color */
            color: rgb(237, 2, 2); /* Text color for selected item */
        }


/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.sidebar a.menu-item:hover,
.sidebar a.menu-item.is-active{
  background-color: #ff0000;
}
.line{
  color: black;
 
}
</style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <h2>Student Management project</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                {{-- <div class="sidebar">
                    <a onclick="changeColor(this)" class="menu-item " href="{{url('/')}}">Home</a>
                    <a onclick="changeColor(this)" class="menu-item " href="{{url('/students')}}">Student</a>
                    <a onclick="changeColor(this)" class="menu-item " href="{{url('/teachers')}}">Teacher</a>
                    <a onclick="changeColor(this)" class="menu-item " href="{{url('/courses')}}">Cources</a>
                    <a onclick="changeColor(this)" class="menu-item " href="{{url('/batches')}}">Batches</a>
                    <a onclick="changeColor(this)" class="menu-item" href="{{url('/enrollments')}}">Enrollment</a>
                    <a onclick="changeColor(this)" class="menu-item" href="{{url('/payments')}}">Payment</a>
                </div> --}}
                <div class="sidebar">
                  <ul>
                      <li data-page="home" ><a href="{{url('/')}}" class="line"><h4>Home</h4></a> </li>
                      <li data-page="Student"><a href="{{url('/students')}}" class="line"><h4>Student</h4></a></li>
                      <li data-page="Teacher"><a href="{{url('/teachers')}}" class="line"><h4>Teacher</h4></a></li>
                      <li data-page="Cources"><a href="{{url('/courses')}}" class="line"><h4>Cources</h4></a></li>
                      <li data-page="Batches"><a href="{{url('/batches')}}" class="line"><h4>Batches</h4></a></li>
                      <li data-page="Enrollment"><a href="{{url('/enrollments')}}" class="line"><h4>Enrollment</h4></a></li>
                      <li data-page="Payment"><a href="{{url('/payments')}}" class="line"><h4>Payment</h4></a></li>

                  
                  </ul>
              </div>
            </div>
            <div class="col-md-9">
                 
              @yield('content')
           </div>
        </div>
    </div>

</body>

</html>


<script>
  const items = document.querySelectorAll('.sidebar li');

  // Load the active item from localStorage
  const activePage = localStorage.getItem('activePage');
  if (activePage) {
      items.forEach(item => {
          if (item.getAttribute('data-page') === activePage) {
              item.classList.add('active');
          }
      });
  }

  // Add click event listeners to each item
  items.forEach(item => {
      item.addEventListener('click', function() {
          // Remove 'active' class from all items
          items.forEach(i => i.classList.remove('active'));
          // Add 'active' class to the clicked item
          this.classList.add('active');
          // Save the active item in localStorage
          localStorage.setItem('activePage', this.getAttribute('data-page'));
      });
  });
</script>

{{-- <script>
  const items = document.querySelectorAll('.sidebar li');

  items.forEach(item => {
      item.addEventListener('click', function() {
          items.forEach(i => i.classList.remove('active'));
          this.classList.add('active');
      });
  });
</script> --}}
{{-- <script>
  function changeColor(e){
    document.querySelector("menu-item.is-active").classList.remove("is-active")
    e.classList.add("is-active")
  }
</script> --}}
