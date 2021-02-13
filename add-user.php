<?php include('header.php');?>
<?php include('sidebar.php');?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user-plus mr-1"></i>
                                Register Form
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" action="/action_page.php">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="fname">First Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fname" placeholder="Enter first name.." name="fname" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="lname">Last Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="lname" placeholder="Enter last name.." name="lname" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email.." name="email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="pwd">Password:</label>
                                    <div class="col-sm-9">          
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password.." name="pwd" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="gender">Gender:</label>
                                    <div class="col-sm-9"> 
                                        <select id="gender" class="form-control" name="gender" required="">
                                            <option value="">--Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="dob">Date of Birth:</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="dob" placeholder="Enter birthday.." name="dob" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="phno">Phone Number:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phno" placeholder="Enter Phone No.." name="phno" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="address">Address:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="4" name="address" placeholder="Enter Address.." style="height: 120px;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>                       

<?php include('footer.php');?>