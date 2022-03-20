<?php include"components/navbar.php"?>
<div id="showcase">
            <div class="container">
                <div class="showcase-content">
                    <h1>
                        <span class="text-primary">Feel  </span>the <span class="text-primary"> 

                             Game  </span>
                    </h1>
                </div>
               <div class="controller">
                <p >
                   

                    </div>
                </p>
                
                <div class="container">
                    <div class="card">  
                        <div class="inner-box" id="card">
                            
                            <div class="card-front">
                                <h2><span class="text-primary">Registaration</span></h2>
                                <form action="actions/insert.php" method = "POST">
                                    <p>Name:
                                        <input type="text" class="input-box" name = "username" placeholder="First Name and last Name" required>
                                    </p> 
                                    <p>Contact number:
                                    <input type="text" class="input-box" name = "number" placeholder="+977" required></p>
                                    <p>Email:
                                    <input type="email" class="input-box" name = "email" placeholder="Your Email" required>
                                   </p>
                                   <p>DATE:
                                    <input type="date" class="input-box" name = "date" placeholder="mm:dd" required>
                                   </p>
                                   <p>Time:
                                    <input type="time" class="input-box" name = "time" placeholder="XX:XX" required>
                                   </p>
                                    <button type="submit" class="btn"> 
                                        Submit
                                    </button>
                                   
                                </form>
                                
                                
                                
                            </div>
                        </div>

<?php include once('components/footer.php');?>