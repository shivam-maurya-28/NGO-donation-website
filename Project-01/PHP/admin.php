<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        .web_logo{
            width:100%;
            height:auto;
            display:flex;
            
            justify-content:center;
            align-items:center;
            gap:30px;
        }
        img{
                height:200px;
                width:300px;
        }
        .text1{
                position:relative;
                top:-25px;
                color:green;
        }
        </style>
</head>
<body>
    <div class="container">
       <div class="web_logo">
       <img src="../images/web_name_logo1.png" alt="Logo" class="logo">
       <div class="text1">
       <h5 >ADMIN PANEL</h5>
       </div>
       </div>
        <h3 class="text-center text-danger">Donation Details</h3>
        <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "empower_fund");
            $totalAmount = 0; 
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


            // SQL query to retrieve data
            $sql = "SELECT * FROM donation_amt";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table mt-5 table-hover table-responsive-sm table-bordered'>";
                echo "<thead class='table-info'><tr><th>ID</th><th>Name</th><th>Mobile Number</th><th>Email</th><th>Amount</th></tr></thead>";
                echo "<tbody>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["mobile_no"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["amount"] . "</td>";
                    echo "</tr>";
                    $totalAmount += $row["amount"];
                }
                echo "</tbody>";
                echo "<tfoot>";
                echo "<tr><td colspan='4 ' class='text-center table-success'>Total Amount</td><td class='table-success'>$totalAmount</td></tr>";
                echo "</tfoot>";
                echo "</table>";
            } else {
                echo "<p>No data found</p>";
            }

            // Close connection
            mysqli_close($conn);
        ?>

</div>
</body>
</html>