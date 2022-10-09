<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    .button1{
      margin-left: 650px;
    }
    .menubar{
      margin-left: -35px;
	  
    }
  </style>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<meta charset="utf-8">
	<!-- <title>E-Home's Services</title> -->
</head>
<body>


  <form action="dashboard2.php" method="post">
  <div class="container" style="margin-top:20px; margin-bottom: 60px;">


    <div class="row">
        <div class="form-group col-5">
            <!-- <label for="">City</label> -->
            <br>
            <br>
            <br>
            <br>
            <br>

            <select class="form-field  " style=" width:100%;height: 50px;" name="b_type" id="city">

                <option value="none">Select Business Type</option>
			<option value="Food & snacks">Food & snacks</option>
			<option value="Sweets">Sweets</option>
			<option value="Craft">Craft</option>
			<option value="Art">Art</option>
			<option value="Papads">Papads</option>
			<option value="Home decor">Home decor</option>
			<option value="Choclates">Choclates</option>
			<option value="mukhWas">mukhWas</option>
			<option value="Organic & Vegan">Organic & Vegan</option>
			<option value="Pickles,Masala & Chutneys">Pickles,Masala & Chutneys</option>
			<option value="Beauty & health">Beauty & health</option>
            </select>
        </div>
 
        <div class="form-group col-2">
            <!-- <label for="">Action</label> -->
            <!-- <button id="btnSearch" class="form-control btn btn-success" name = 'btnSearch' type="button">Search</button> -->
            <br>
            <br>
            <br>
            <br><br>
          <button class="btn" name="btnSearch">Search</button>
        </div>
    </div>
</form>


<div class="table-responsive">
    <br>
<?php

    if(isset($_POST['btnSearch']))
    {
        $b_type = $_POST["b_type"];
        $con = mysqli_connect('localhost','root','','hackathon');
        $query="SELECT * FROM `business` WHERE b_type='".$b_type."' ";
        
    

        $result = mysqli_query($con,$query);
        $row_count = mysqli_num_rows($result);
        // if($row_count==1)
        // {
        //     echo "<script> alert('Data got'); </script>";
        // }
        // else
        // {
        //     echo "<script> alert('Data not got'); </script>";
        // }
        if($result)
        {
            
             if ($row_count == 0)
                {
                    
                    echo "No record found!";
                
                }   
            else {

                echo "<table border='2' align='center' cellspacing='9' cellpadding='10' width='100%' margin-top= '40px'>";
        echo "<tr>
                <th> Business name </th>
                <th> Business owner </th>
                <th> Business info </th>
                <th> Business email </th>
                <th> business Bio </th>
                <th> business Type </th>
            </tr>";
                           
            while($row = mysqli_fetch_array($result))
            {
                
                   
               
                    echo "<tr>
                    <td> " . $row[1] . " </td>
                    <td> " . $row[2] . " </td>
                    <td> " . $row[3] . " </td>
                    <td> " . $row[4] . " </td>
                    <td> " . $row[6] . " </td>
                    <td> " . $row[7] . " </td>
                    <td><a href='contactus.php?id=".$row[4]."'><button  class='form-control btn btn-success' name='btnContact' type='button' width='50px'>Contact</button></a></td>
                    </tr>"; 
                    
                    
            }
        }
            
            

                
        }
        
        /*else 
        {   

            echo "No record found!";
        }*/
            
    }        
        ?>
</div>


</body>
</html>