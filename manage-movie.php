<?php include('header.php');?>
<?php include('sidebar.php');?>

<div id="layoutSidenav_content" style="margin-top: 20px;">
                <main>
                    <div class="container-fluid">
                        <div class="card-header">
                            <i class="fas fa-film mr-1"></i>
                            Movies List
                            <a href="add-movie.php" class="btn btn-success">Add Movie</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Movie Name</th>
                                                <th>Genres</th>
                                                <th>Release Year</th>
                                                <th>Runtime</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Video</th>
                                                <th>Movie URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Movie Name</th>
                                                <th>Genres</th>
                                                <th>Release Year</th>
                                                <th>Runtime</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Video</th>
                                                <th>Movie URL</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                                         

<?php include('footer.php');?>