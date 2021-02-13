<?php include('header.php');?>
<?php include('sidebar.php');?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-folder-plus mr-1"></i>
                                Movie Insert Form
                            </div>
                            <div class="card-body">
                            <form class="form-horizontal" action="/action_page.php">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="mname">Movie Name:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="mname" placeholder="Enter movie name.." name="mname" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="genre">Genres:</label>
                                    <div class="col-sm-9"> 
                                        <select id="genre" class="form-control" name="genre" required="">
                                            <option value="">--Select Genre</option>
                                            <option value="action">Action</option>
                                            <option value="comedy">Comedy</option>
                                            <option value="drama">Drama</option>
                                            <option value="fantasy">Fantasy</option>
                                            <option value="horror">Horror</option>
                                            <option value="mystery">Mystery</option>
                                            <option value="romance">Romance</option>
                                            <option value="thriller">Thriller</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="release">Release Year:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="release" placeholder="Enter Release Year.." name="release" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="rtime">Runtime:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="rtime" placeholder="Enter Runtime.." name="rtime" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="desc">Description:</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" rows="10" name="desc" placeholder="Enter Description.." style="height: 250px;"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="image">Upload Image:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="video">Upload Video:</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="video" id="video">
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