<a href="/quary12/?controller=pages&action=newNote"><button>Create New Note</button></a>

<p>There will be user notes here</p>

<?php
include 'user/user.php';

$reader = new user();
$tempID = -1;
if ($_SESSION['logged']) {
    $tempID = $_SESSION['ID'];
}

$notes = $reader->viewNoteList($tempID);
echo '<div>';

foreach ($notes as $cur) {

    echo '<div class="detail">';
    echo '<h2>' . $cur['Title'] . '</h2>';
    echo "<p>" . $cur['note'] . "</p>";
    echo '<p><strong>editted date</strong>:'. date('F d, Y h:mA', strtotime($cur['date'])) . '</p>';
    echo '<ul class="nav navbar-nav">';
    echo '<li><a href="/quary12/?controller=pages&action=viewNote&note=' . $cur['noteID'] . '">view</a></li>';
    if ($cur['uID'] == $tempID) {
        echo '<li><a href="/quary12/?controller=pages&action=editNote&note=' . $cur['noteID'] . '">edit</a></li>';
        echo '<li><a href="/quary12/?controller=pages&action=deleteNote&note=' . $cur['noteID'] . '">delete</a></li>';
    }
    echo '</ul>';
    echo '</div>';
    echo '<br/> <br/>';
}

echo '</div>';
