<?php

/**
 * Description of user
 *
 * @author Reed
 */
class user {

    //put your code here
    private $userName;
    private $passWrd;
    private $uID;
    private $eMail;
    private $dsn = 'mysql:host=localhost;dbname=dsuclass_quary12';
    private $username = 'dsuclass_quary12';
    private $password = 'dsuclass_quary12';

    function login($name, $pass) {
        $count = 0;
        $db = new PDO($this->dsn, $this->username, $this->password);
        $req = $db->query('select * from users where userName=\'' . $name . '\' and passWord=\'' . $pass . '\' LIMIT 1');
        foreach ($req as $user) {
            $count++;
            if ($count == 1) {
                $this->userName = $user['userName'];
                $this->passWrd = $user['passWord'];
                $this->uID = $user['ID'];
                $this->eMail = $user['email'];
            }
        }
        
        if ($count == 1) {
            echo '<p>You have logged in successfully</p>';
            return true;
        } else {
            $this->userName = NULL;
            $this->passWrd = NULL;
            $this->uID = NULL;
            $this->eMail = NULL;
            echo '<p>There were problems logging in, please try again</p><br>';
            echo '<a href="/quary12/?controller=pages&action=login">Try Again</a>';
            return false;
        }
    }

    function signUp($name, $pass, $email) {
        $db = new PDO($this->dsn, $this->username, $this->password);

        $add = 'INSERT INTO users(userName, passWord, email) VALUES (\'' . $name . '\',\'' . $pass . '\',\'' . $email . '\')';

        if ($db->query($add) == true) {
            echo '<p>You have created a new user</p>';
            if ($this->login($name, $pass)) {
                return true;
            } else {
                return false;
            }
        } else {
            echo '<p>Your user creation failed, please <a href="/quary12/?controller=pages&action=signUp">Try Again</a></p>';
            return false;
        }
    }

    function create($id, $title, $msg, $private) {
        $db = new PDO($this->dsn, $this->username, $this->password);

        if ($private == 'on') {
            $private = 1;
        }

        $add = 'INSERT INTO notes(uID, note, Title, private) VALUES (\'' . $id . '\',\'' . $msg . '\',\'' . $title . '\',\'' . $private . '\')';
        if ($db->query($add) == true) {
            return true;
        } else {
            echo '<p>Your user creation failed, please <a href="/quary12/?controller=pages&action=signUp">Try Again</a></p>';
            return false;
        }
    }

    function viewNoteList($userID = '-1') {
        $db = new PDO($this->dsn, $this->username, $this->password);
        $getNotes = null;
        if ($_SESSION['logged']) {
            $getNotes = 'SELECT * FROM notes WHERE (private != \'1\') OR (private = \'1\' AND uID = \'' . $userID . '\') ORDER by date DESC';
        } else {
            $getNotes = 'SELECT * FROM notes WHERE private != \'1\' ORDER by date DESC';
        }

        if ($db->query($getNotes) == true) {
            $notes = $db->query($getNotes);
            return $notes;
        } else {
            return NULL;
        }
    }
    
    function viewNoteSingle($userID = '-1', $noteID){
        $db = new PDO($this->dsn, $this->username, $this->password);
        $getNote = null;
        if ($_SESSION['logged']) {
            $getNote = 'SELECT * FROM notes WHERE (private != \'1\' AND noteID = \''.$noteID.'\') OR (private = \'1\' AND uID = \'' . $userID . '\' AND noteID = \''.$noteID.'\') LIMIT 1';
        } else {
            $getNote = 'SELECT * FROM notes WHERE (private != \'1\' AND noteID = \''.$noteID.'\') LIMIT 1';
        }
        if ($db->query($getNote) == true) {
            $note = $db->query($getNote);
            return $note;
        } else {
            return NULL;
        }
    }
    
    function deleteNote($noteID){
        $db = new PDO($this->dsn, $this->username, $this->password);
        $delNote = null;
        
        $delNote = 'DELETE FROM notes WHERE  noteID = \''.$noteID.'\'';
        
        if ($db->query($delNote) === true) {
            //$db->query($delNote);
            echo 'note deleted successfully';
            return TRUE;
        } else {
            echo 'note not deleted';
            return NULL;
        }
    }
    
    function updateNotes($id, $title, $msg, $private ,$noteID) {
        $db = new PDO($this->dsn, $this->username, $this->password);

        if ($private == 'on') {
            $private = 1;
        }

        $up = 'UPDATE notes SET note=\'' . $msg . '\', Title=\'' . $title . '\', private=\'' . $private . '\' WHERE (noteID=\''.$noteID.'\' AND uID=\''.$id.'\')';

        if ($db->query($up) == true) {
            return true;
        } else {
            echo '<p>Your note update failed, please <a href="/quary12/?controller=pages&action=viewNote&note='.$noteID.'">Try Again</a></p>';
            return false;
        }
    }

    //getters
    function getUserName() {
        return $this->userName;
    }

    function getUserID() {
        return $this->uID;
    }

    function getEmail() {
        return $this->eMail;
    }

}
