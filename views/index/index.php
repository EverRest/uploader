<?php $files = Session::get('data'); ?>
    <div class="container">
        <div class="row">
            <h2>Your uploded files.</h2>
            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($files as $file): ?>
                <tr>
                    <th><?php echo $file[0]; ?></th>
                    <th><?php echo $file['file']; ?></th>
                    <th><?php echo $file['type']; ?></th>
                    <th><?php echo $file['size'] . ' KB'; ?></th>
                    <th><?php echo $file['uploaded']; ?></th>
                    <th>
                        <a href="#" class="remove-file" data-id="<?php echo $file[0]; ?>"  data-toggle="modal" data-target="#remove">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </th>
                    <th>
                        <a href="#" class="edit-file" data-id="<?php echo $file[0]; ?>" data-toggle="modal" data-target="#edit">
                            <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </th>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>