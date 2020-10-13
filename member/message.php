<?php session_start();
if(!isset($_SESSION['logged'])){
    header("Location:../login.php");
}
$id = $_SESSION['logged'];
?>
<?php include "../includes/head.php";?>
<?php include "../includes/count.php";?>
<title> Member | Message </title>
</head>
<body>
    <section>
        <div class="container-fluid">
               <!-- mobile nav -->
               <?php include "../includes/mobile.php";?>
           
            <div class="row area">
                <!-- side nav -->
                <?php include "../includes/side.php";?>

                <!-- top navigation/header -->
                <div class="col-md-10">
                    <header class="row topnav">
                        <div class="col-md-12">
                            <ul class="inline topnav--content">
                                <li class="topnav--link"><i class="fa fa-user mr-2 text-comp"></i><span class="text-comp">Admin</span></li>
                            </ul>
                        </div>
                    </header>

    
                    
                    <div class="row mt-2 mb-1">
                        <!-- top kpis -->
                        <div class="col-md-4 offset-md-8">
                            <div class="card  kpi">
                                <div class="card-body">
                                  <h5 class="card-title text-comp">Messages</h5>
                                  <span><?php countMessages();?></span>
                                  <i class="fa fa-envelope kpi--icons"></i>
                                </div>
                              </div>
                        </div>
                    </div>
                    

                    <div class="row mt-5">
                        <!-- table -->
                        <div class="col-md-12 mb-2 ">
                            <div class="card">
                                <div class="card-header bg-brand--sec">
                                    <h4 class="text-white">Messages<i class="fa fa-envelope kpi--icons kpi--icons-light"></i></h4>
                                   
                                  </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-stripped">
                                            <thead>
                                                <th></th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Date</th>
                                            </thead>
                                            <tbody>
                                            <?php
                
                $sql= " SELECT * FROM message WHERE message_status ='published'";
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $n=1;
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                $msg_id = $row['message_id'];
                                $msg_title = $row['message_title'];
                                $msg_date = $row['message_date'];
                                $msg_body = $row['message_body'];
                            
                                ?>
                                
                                <tr>
                                    <td><?php echo $n;?></td>
                                    <td><?php echo $msg_title;?></td>
                                    <td><?php echo $msg_body;?></td>
                                    <td><?php echo $msg_date;?></td>             
                                </tr>
                                
                            <?php  
                            $n++;    
                        }
                        }   
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    } 

            
            ?>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    


    
</body>
</html>