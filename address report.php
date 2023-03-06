<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address report</title>
    <?php
      session_start();
      include("dataconnection (iwp project).php")
    ?>
    <style>
       h1 {
            margin: 30px 0 20px 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            text-align: center;
            font-size: 20px;
            color: 
        }

        th {
            background-color: rgb(244, 165, 165);
            color: black;
            text-align: center;
            padding: 10px 5px;
            font-size: 25px;
            text-transform: capitalize;
        }

        tr:nth-child(even) {
            background-color: rgb(252, 213, 219);
        }

        tr:hover {
            background-color: pink;
        }
        .print{
            background-color: #FA2A55; 
            color: white; border: none; 
            padding: 10px 20px; 
            border-radius: 5px; 
            font-size: 16px; 
            cursor: pointer;
            float:right; 
            margin-right: 30px;
        }
        .print:hover{
            opacity: 0.5;
        }
        .back{
            background-color: green; 
            color: white; 
            border: none; 
            padding: 10px 20px; 
            border-radius: 5px; 
            font-size: 16px; 
            cursor: pointer;
            float:right; 
            margin-right: 30px;
        }
        .back:hover{
            opacity: 0.5;
        } 
    </style>
    <script type="text/javascript">
        function printFunction() { 
            window.print(); 
        }
        function back(){
            window.location.href = "dashboard(admin).php";
        }
    </script>
</head>
<body>
    <form action="" method="post">
        <button onclick="printFunction()" class="print" >Print as PDF</button>
        <h1>List of address</h1>
        <table>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>contact number</th>
                <th>address</th>
                <th>city</th>
                <th>State</th>
                <th>postal code</th>
            </tr>
            <tr>
                <td>1</td>
                <td>CHEE ZHEN XIAN</td>
                <td>0167979789</td>
                <td>36, Jalan Setia 8/9, Taman Setia Indah</td>
                <td>Johor Bahru</td>
                <td>Johor</td>
                <td>81100</td>
            </tr>
            <?php
                $sql = "SELECT*FROM address";
                $result = $connect->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>". $row["User_Id"] . "</td>";
                        echo "<td>". $row["first_name"] . " " . $row["last_name"] . "</td>";
                        echo "<td>" .$row["contact_number"]. "</td>";
                        echo "<td>". $row["new_address"] . "</td>";
                        echo "<td>". $row["city"] . "</td>";
                        echo "<td>". $row["add_state"] . "</td>";
                        echo "<td>". $row["postal_code"] . "</td>";
                        echo "</tr>";
                    }
                }
            ?>
        </table>
    </form>
</body>
</html>