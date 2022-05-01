<?php
$msg = array();

if (isset($_POST['imgsend'])) {
    $files = array_filter($_FILES['images']['name']);
    $imgcount = count($files);
    $file = $_FILES['images'];

    for ($i = 0; $i < $imgcount; $i++) {
        if ($file['error'][$i] == 4) {
            # no file has been uploaded
        } elseif (!in_array($file['type'][$i], $ALLOWED_PICTYPES)) {
            $msg[] = " Unsupported format: " . $file['name'][$i];
        } elseif ($file['error'][$i] == 1 or $file['error'][$i] == 2 or $file['size'][$i] > $MAXPICSIZE) {
            $msg[] = " Image size too large: " . $file['name'][$i];
        } else {
            $finalloc = $PICFOLDER . strtolower($file['name'][$i]);
            if (file_exists($finalloc)) {
                $msg[] = " File already exists: " . $file['name'][$i];
            } else {
                move_uploaded_file($file['tmp_name'][$i], $finalloc);
                $msg[] = " Image successfully uploaded: " . $file['name'][$i];
            }
        }
    }
}
?>
<div class="homepage">
<?php
if (!empty($msg)) {
    echo '<ul>';
    foreach ($msg as $u) {
        echo "<li>$u</li>";
    }
    echo '</ul>';
}
?>

<article class="post">
    <header>
        <h2>Upload images to the Gallery</h2>
    </header>
    
        <p>Max allowed resolution: 1024*1024</p>
        <p>Allowed formats:</p>
        <ul>
            <?php foreach ($FORMATS as $picformat) {
                echo '<li>' . $picformat . '</li>';
            }
            ?>
        </ul>

        <form action="?page=gallery" method="post" enctype="multipart/form-data">
            <label>Select Images: <input type="file" name="images[]" multiple required></label>
            <br>
            <input type="submit" name="imgsend" value="Upload">
        </form>
    
</article>
</div>

<div class="homepage">
<article class="post">
    <header>
        <h2>Uploaded Pictures</h2>
    </header>
    <div>
        <?php
        arsort($pics);

        foreach ($pics as $file => $imgdate) { ?>
            <div class="responsive">
                <div class="gallery">
                    <a href="<?php echo $PICFOLDER . $file ?>">
                        <img src="<?php echo $PICFOLDER . $file ?>" height="600">
                    </a>
                    <div class="pic-info">File name: <?php echo $file ?> - Date: <?php echo date($DATEFORMAT, $imgdate) ?></div>
                </div>
            </div>
        <?php } ?>
        <div class="clearfix">
        </div>
        <div id="pic-instructions">
            <p>You can upload images on top of the page.</p>
        </div>
    </div>
</article>
</div>