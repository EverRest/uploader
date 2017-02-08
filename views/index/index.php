<?php $files = Session::get('data'); ?>
    <div class="container">
        <div class="row">
            <h2>Your uploded files.</h2>
            <br>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($files as $file): ?>
                <tr>
                    <th class="file-name"><?php echo $file['file']; ?></th>
                    <th class="file-type"><?php echo $file['type']; ?></th>
                    <th class="file-size"><?php echo $file['size'] . ' KB'; ?></th>
                    <th class="file-uploaded"><?php echo $file['uploaded']; ?></th>
                    <th>
                        <a href="#" class="store-file" data-name="<?php echo $file['file']; ?>" data-ext="<?php echo $file['extension']; ?>" data-id="<?php echo $file[0]; ?>"  data-toggle="modal" data-target="#store">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                        </a>
                    </th>
                    <th>
                        <a href="#" class="edit-file" data-ext="<?php echo $file['extension']; ?>" data-id="<?php echo $file[0]; ?>"  data-toggle="modal" data-target="#edit">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                    </th>
                    <th>
                        <a href="#" class="remove-file" data-name="<?php echo $file['file']; ?>" data-id="<?php echo $file[0]; ?>" data-toggle="modal" data-target="#delete">
                            <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </th>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>