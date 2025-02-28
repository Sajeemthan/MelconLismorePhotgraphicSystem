<style>
/* General body styling */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #e9ecef; /* Lighter background color */
}

/* Sidebar styling */
.sidebar {
    width: 250px; /* Fixed width */
    height: 100vh; /* Full viewport height */
    position: fixed; /* Stay in place */
    top: 0; /* Align at the top */
    right: 0; /* Align to the right */
    background-color: #343a40; /* Darker background color */
    padding-top: 20px;
    z-index: 1; /* Stay on top */
    overflow-y: auto; /* Allow scrolling if content overflows */
    box-shadow: -2px 0 5px rgba(0,0,0,0.5); /* Optional shadow for better separation */
    transition: all 0.3s ease; /* Smooth transition for any changes */
}

/* Sidebar header styling */
.sidebar .side-header {
    text-align: center;
    margin-bottom: 20px;
    color: #f8f9fa; /* Light text color */
}

/* Sidebar logo styling */
.sidebar img {
    display: block;
    margin: 0 auto 20px; /* Center the image horizontally and add space below */
    width: 80%; /* Responsive width */
    max-width: 200px; /* Maximum width to prevent stretching */
}

/* Sidebar links */
.sidebar a {
    display: flex;
    align-items: center;
    padding: 12px 20px; /* Improved padding for better click area */
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px; /* Adjusted font size */
    color: #f8f9fa; /* Light text color */
    transition: background-color 0.3s, color 0.3s;
    margin: 0 10px; /* Adjusted margins */
}

/* Hover effect */
.sidebar a:hover {
    background-color: #495057; /* Darker background color on hover */
    color: #f8f9fa; /* Light text color on hover */
}

/* Close button styling */
.sidebar .closebtn {
    position: absolute;
    top: 20px; /* Adjusted to match padding */
    left: 20px; /* Adjusted to align with left edge */
    font-size: 24px; /* Slightly smaller size */
    color: #f8f9fa; /* Light color */
    cursor: pointer; /* Indicate it's clickable */
}

/* Heading styling */
h5 {
    color: #f8f9fa; /* Light text color */
    margin: 0; /* Remove margin for alignment */
}


</style>

<div class="sidebar" id="mySidebar">
  <div class="side-header">
    <h5>Hello, Admin</h5>
  </div>

  <hr style="border:1px solid; background-color:#3FA2F6; border-color:#3B3131;">
  <a href="./admin.php"><i class="fa fa-home"></i> Dashboard</a>
  <a href="./ManageImage.php"><i class="fa fa-camera"></i> Manage Images</a>
</div>
