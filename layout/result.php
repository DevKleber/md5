<div class="result">

    <?php
    if (isset($_REQUEST['md5'])) {
        echo "<span id='result' onClick='selectText()'>".md5($_REQUEST['md5']).'</span>';
        echo "<p id='message'> <br />Text has been copied, now paste in the text-area </p>";
    }
    ?>
</div>