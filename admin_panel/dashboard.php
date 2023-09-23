
<?php
include('config.php');
$results = "SELECT * FROM `order`";
$result =  mysqli_query($conn,$results);
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>

    thead{
        border: 5px solid black;
    }
    tbody{
        border: 5px solid black;
    }
</style>
<body>
    <!-- =============== Navigation ================ -->
    <?php
    include('navbar.php')
    ?>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead >
                            <tr>
                              <td>id</td>
                              <td>name</td>
                              <td>email</td>
                              <td>number</td>
                              <td>method</td>
                              <td>flat</td>
                              <td>street</td>
                              <td>city</td>
                              <td>state</td>
                              <td>country</td>
                              <td>pin_code</td>
                              <td>total_products</td>
                              <td>total_price</td>
                              <td colspan="2">Action</td>
                            </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <tbody>
                              <tr>
                              <td> <?php echo $row['id']; ?> </td>
                              <td> <?php echo $row['name']; ?></td>
                              <td> <?php echo $row['email']; ?></td>
                              <td> <?php echo $row['number']; ?></td>
                              <td> <?php echo $row['method']; ?></td>
                              <td> <?php echo $row['flat']; ?></td>
                              <td> <?php echo $row['street']; ?></td>
                              <td> <?php echo $row['city']; ?></td>
                              <td> <?php echo $row['state']; ?></td>
                              <td> <?php echo $row['country']; ?></td>
                              <td> <?php echo $row['pin_code']; ?></td>
                              <td> <?php echo $row['total_products']; ?></td>
                              <td> <?php echo $row['total_price']; ?></td>
    
                            <td> <a href="order_delete.php?id=<?php echo $row['id']?>">Delete</td>
    
                             </tr>
                             <?php 
                             }
                             ?>
                         </tbody>
                    </table>
                </div>

                
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>