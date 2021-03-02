<?php include('user-header.php');?>
<style>
    .vm-livemovie{
            background-image: linear-gradient(90deg, #000000, #001f4d);
            border-radius:20px;
            border-style:none;
            border-width:thin;
            margin: 10px 10px;
            padding: 10px 10px;
        }
        .vm-download{
            background-image: linear-gradient(90deg, #000000, #001f4d);
            border-radius:20px;
            border-style:none;
            border-width:thin;
            padding: 10px 10px;
        }
</style>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid bg-dark" style="padding:10px; background-image: linear-gradient(90deg, #000000, #001f4d);">
                        <h1 class="mt-5" style="color:#ffff00;">Movies Name</h1>
                        <div class="col-xl-12 col-md-12">
                                <div class="card bg-light text-black mb-4">
                                    <div class="card-header">
                                        <img class="card-img-top" src="dist/assets/img/ig-1.jpg" alt="Image" style="width:100% background-size:cover;">
                                    </div>
                                    <div class="card-body">
                                        <h2>Description</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset 
                                            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker 
                                            including versions of Lorem Ipsum
                                            </p>
                                            <div class="row align-items-center justify-content-center">
                                                <div class="livemovie">
                                                    <a href="#" data-toggle="modal" data-target="#liveModal"><button type="button" class="vm-livemovie text-white" ><i class="fas fa-film"></i>Live Movie</button></a>
                                                </div>
                                                <div class="download">
                                                    <a href="#" data-toggle="modal" data-target="#downloadModal"><button type="button" class="vm-download text-white" ><i class="fas fa-download"></i>Download</button></a>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- <div class="card-footer">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <video width="100%" height="auto" controls>
                                                    <source src="dist/assets/img/awmv.mp4" type="video/mp4">
                                                    <source src="dist/assets/img/awmv.ogg" type="video/ogg">
                                                </video>
                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <h3>Download Link</h3>
                                                <ul class="download" style="list-style:none;">
                                                    <li><a href="#">Download Link</a></li>
                                                    <li><a href="#">Download Link</a></li>
                                                    <li><a href="#">Download Link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

<!-- movie play modal form -->
<div class="modal fade" id="liveModal" tabindex="-1" aria-labelledby="liveModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="liveModalLabel">Movie Play</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="liveForm">
                <video width="100%" height="auto" controls>
                    <source src="dist/assets/img/awmv.mp4" type="video/mp4">
                    <source src="dist/assets/img/awmv.ogg" type="video/ogg">
                </video>
            </form>
        </div>
    </div>
  </div>
</div>
<script>
    $('#liveModal').on('shown.bs.modal', function () {
  $('#liveForm').trigger('focus')
})
</script>

<!-- download modal form -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">Download Links</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="downloadForm">
                <ul class="download" style="list-style:none;">
                    <li><a href="#">Download Link</a></li>
                    <li><a href="#">Download Link</a></li>
                    <li><a href="#">Download Link</a></li>
                </ul>
            </form>
        </div>
    </div>
  </div>
</div>
<script>
    $('#downloadModal').on('shown.bs.modal', function () {
  $('#downloadForm').trigger('focus')
})
</script>

<?php include('user-footer.php');?>

