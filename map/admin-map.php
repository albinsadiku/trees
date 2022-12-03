<?php
    /* Template Name: Mapa per administrator */
   
    get_header();
?> 

<p class="text-center text-3xl py-2 w-auto">Informatat rreth Mapes</p>


<a href="http://localhost/map/mapa-per-administrator" target="_blank" class="pl-10"> <button type="button" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Konfirmo markat</button>
</a>


<table class="border-collapse w-4/5">
    <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Id</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Lat</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">LNG</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Pershkrimi</th>
            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Statusi</th>
        </tr>
    </thead>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$results_per_page = 10;  


$sql = "SELECT * FROM locations ORDER BY id DESC";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
  
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td class='w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static'>" . $row['id'] . "</td>";
                echo "<td class='w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static'>" . $row['lat'] . "</td>";
                echo "<td class='w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static'>" . $row['lng'] . "</td>";
                echo "<td class='w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static'>" . $row['description'] . "</td>";
                echo "<td class='w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static'>" . $row['location_status'] . "</td>";
            echo "</tr>";
      
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($conn);
?>




                 
                           
<?php 
    get_footer();
?>