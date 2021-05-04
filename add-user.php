

<?php include('header.php');?>
<?php include('sidebar.php');?>


<div id="layoutSidenav_content" style="margin-top: 20px;">
                <main>
                    <div class="container-fluid">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-user-plus mr-1"></i>
                                Register Form
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" id="AddUser">
                               
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="username">Username:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="username" placeholder="Enter username.." name="username" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">Email:</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email.." name="email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="password">Password:</label>
                                    <div class="col-sm-9">          
                                        <input type="password" class="form-control" id="password" placeholder="Enter password.." name="password" required="">
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="accexpiredate">Account Expire Date:</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="accexpiredate" placeholder="Enter account expire date.." name="accexpiredate" required="">
                                    </div>
                                </div>
                             
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-info" name="register">Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>       
<script>
jQuery(document).on('submit','#AddUser',function(e){

        e.preventDefault();
        $.ajax({
        
        type:'POST',
        url:'adduser.php',
        data:new FormData(this),
        contentType:false,
        cache:false,
        processData:false,
        dataType:'json',

        beforeSend:function(){
      
            $(".spinner").show();
            $('#AddUser').css("opacity",".5");



        },
        success:function(json){

            if(json=='success')
            {
                $(".spinner").hide();
                $('#AddUser').css("opacity","1");
                $('#AddUser')[0].reset();

            $message="Successfully Added";
            $type="success";
            shownoti($type,$message);

            }
            else
            {
               $message=json;
               $type="warning";
               shownoti($type,$message);
               $(".spinner").hide();
               $('#AddUser').css("opacity","1");
              

            }
          
        }

        })

})
</script>                

<?php include('footer.php');?>