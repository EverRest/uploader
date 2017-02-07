</main>
<footer id="footer">
    <div class="container">
        <div class="row">
            &copy; <script>var year = new Date();document.write(year.getFullYear());</script>
        </div>
    </div>
</footer>


<!-- Modal Upload Form -->
<div id="upload" class="modal fade" role="dialog">
    <form id="upload-form" enctype="multipart/form-data" method="POST" action="file/add" class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload your file</h4>
            </div>
            <div class="modal-body">
                <input type="file" id="file" name="file" class="btn btn-lg" />
            </div>
            <div class="modal-footer">
                <input id="add-sbmt" type="submit" class="btn btn-lg btn-success" value="Submit" />
                <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>

    </form>
</div>


<!-- Modal Edit Form -->
<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit this file</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!-- Modal Delete Form -->
<div id="delete" class="modal fade delete-form" role="dialog">
    <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you really want to remove this file?</h4>
                </div>
    <!--            <div class="modal-body">-->
    <!--                <p>Some text in the modal.</p>-->
    <!--            </div>-->
                <div class="modal-footer">
                    <button type="button" id="delete-btn" class="btn btn-lg btn-success" data-dismiss="modal">YES</button>
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">NO</button>
                </div>
            </div>

    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo URL; ?>vendor/components/jquery/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo URL; ?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>public/js/custom.js"></script>
</body>
</html>