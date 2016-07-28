    <?php
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    include 'user/user.php';

    $reader = new user();
    $tempID = -1;
    $tempNote = $_GET['note'];
    $set = NULL;
    if ($_SESSION['logged']) {
        $tempID = $_SESSION['ID'];
    }

    echo '<form action="/quary12/?controller=pages&action=updateNote&note='.$tempNote.'" method="post">';
    
    $saught = $reader->viewNoteSingle($tempID, $tempNote);


    foreach ($saught as $cur) {

        echo '<label for="title" >Title</label>';
        echo '<input name="title" id="title" type="text" value="' . $cur['Title'] . '"/>';
        echo '<br/>';

        echo '<label for = "message">Content</label>';
        echo '<br />';
        echo '<textarea name ="message" id="message" rows="4" cols="50">' . $cur['note'] . '</textarea>';
        echo '<br/>';

        echo '<label for="private"> Private </label>';
        if ($cur['private'] == '1') {
            $set = 'checked';
        } else {
            $set = NULL;
        }
        echo '<input name="private" id="private" type="checkbox" ' . $set . '/>';
    }
    ?>
    <br/>

    <input name="sub" id="sub" type="submit" value="Post Note"/>
</form>