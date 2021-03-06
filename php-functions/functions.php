<?php


$conn->query("SET NAMES 'utf8'");

function verify_login($username, $password, &$result)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $sql->bind_param('ss', $username, $password);
    $sql->execute();
    $rec = $sql->get_result();
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
        return 1;
    }
    return 0;
}


function getFeatureds(&$result)
{
    global $conn;
    $sql = "SELECT * FROM featureds WHERE id=1 OR id=2 OR id=3 OR id=4";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateFeatureds($id, $text, $link, $img)
{
    global $conn;
    $sql =
        "UPDATE featureds
            SET text='$text', link='$link', img='$img'
            WHERE id = '$id';
        ";
    $rec = $conn->query($sql);
}


function getSpecies(&$result)
{
    global $conn;
    $sql = "SELECT * FROM species ORDER BY year DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getSpeciesYears(&$result)
{
    global $conn;
    $sql = "SELECT DISTINCT year FROM species ORDER BY year DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getOneSpecies($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM species WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function insertSpecies($sci_name, $comm_name, $description, $month, $year, $img)
{
    global $conn;
    $sql =
        "INSERT INTO species (sci_name, comm_name, description, month, year, img)
            VALUES ('$sci_name', '$comm_name', '$description', '$month', '$year', '$img') 
        ";
    $rec = $conn->query($sql);
}

function updateSpecies($id, $sci_name, $comm_name, $description, $month, $year, $img)
{
    global $conn;
    $sql =
        "UPDATE species
            SET sci_name='$sci_name', comm_name='$comm_name', description='$description', month='$month', year='$year', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}


function getActivities($past, &$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE past='$past' ORDER BY date DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getActivity($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getFeaturedActivity(&$result)
{
    global $conn;
    $sql = "SELECT * FROM activities WHERE featured=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateActivity($id, $past, $title, $date, $ubication, $description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "UPDATE activities
            SET past='$past', title='$title', date='$date', ubication='$ubication', description='$description', img1='$img1', img2='$img2', img3='$img3', img4='$img4'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertActivity($past, $title, $date, $ubication, $description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "INSERT INTO activities (past, title, date, ubication, description, img1, img2, img3, img4)
            VALUES ('$past', '$title', '$date', '$ubication', '$description', '$img1', '$img2', '$img3', '$img4') 
        ";
    $rec = $conn->query($sql);
}


function getProjects(&$result)
{
    global $conn;
    $sql = "SELECT * FROM projects ORDER BY name";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getProject($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM projects WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateProject($id, $name, $description, $img, $bg)
{
    global $conn;
    $sql =
        "UPDATE projects
            SET name='$name', description='$description', img='$img', bg='$bg'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertProject($name, $description, $img, $bg)
{
    global $conn;
    $sql =
        "INSERT INTO projects (name, description, img, bg)
            VALUES ('$name', '$description', '$img', '$bg') 
        ";
    $rec = $conn->query($sql);
}


function getSectionsOfProject($idProj, &$result)
{
    global $conn;
    $sql = "SELECT * FROM sections WHERE id_proj='$idProj'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getSection($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM sections WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateSection($id, $title, $description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "UPDATE sections
            SET title='$title', description='$description', img1='$img1', img2='$img2', img3='$img3', img4='$img4'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertSection($projID, $title, $description, $img1, $img2, $img3, $img4)
{
    global $conn;
    $sql =
        "INSERT INTO sections (id_proj, title, description, img1, img2, img3, img4)
            VALUES ('$projID', '$title', '$description', '$img1', '$img2', '$img3', '$img4') 
        ";
    $rec = $conn->query($sql);
}


function getPeople($main, &$result)
{
    global $conn;
    $sql = "SELECT * FROM people WHERE main='$main'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getPerson($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM people WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updatePerson($id, $main, $name, $charge, $description, $img)
{
    global $conn;
    $sql =
        "UPDATE people
            SET main='$main', name='$name', charge='$charge', description='$description', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertPerson($main, $name, $charge, $description, $img)
{
    global $conn;
    $sql =
        "INSERT INTO people (main, name, charge, description, img)
            VALUES ('$main', '$name', '$charge', '$description', '$img') 
        ";
    $rec = $conn->query($sql);
}

function getColabsPhoto(&$result)
{
    global $conn;
    $sql = "SELECT * FROM colabsPhoto WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateColabsPhoto($img)
{
    global $conn;
    $sql =
        "UPDATE colabsPhoto
            SET img='$img'
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getFacilitiesInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM facilities WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateFacilities($img1, $img2, $img3, $img4, $description)
{
    global $conn;
    $sql =
        "UPDATE facilities
            SET img1='$img1', img2='$img2', img3='$img3', img4='$img4', description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getAboutUsInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM aboutUs WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateAboutUs($img1, $img2, $img3, $img4, $description)
{
    global $conn;
    $sql =
        "UPDATE aboutUs
            SET img1='$img1', img2='$img2', img3='$img3', img4='$img4', description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getNews(&$result)
{
    global $conn;
    $sql = "SELECT * FROM news ORDER BY date DESC";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function getNew($id, &$result)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE id='$id'";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function getFeaturedNew(&$result)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE featured=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateNew($id, $title, $date, $link, $description, $img)
{
    global $conn;
    $sql =
        "UPDATE news
            SET title='$title', date='$date', link='$link', description='$description', img='$img'
            WHERE id='$id'
        ";
    $rec = $conn->query($sql);
}

function insertNew($title, $date, $link, $description, $img)
{
    global $conn;
    $sql =
        "INSERT INTO news (title, date, link, description, img)
            VALUES ('$title', '$date', '$link', '$description', '$img') 
        ";
    $rec = $conn->query($sql);
}


function getContactInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM contact WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateContact($phone, $email, $hour, $address, $description)
{
    global $conn;
    $sql =
        "UPDATE contact
            SET phone='$phone', email='$email', hour='$hour', address='$address', description='$description' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getAccountInfo(&$result)
{
    global $conn;
    $sql = "SELECT * FROM users WHERE id=1";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $result = mysqli_fetch_object($rec);
    }
}

function updateAccount($username, $password)
{
    global $conn;
    $sql =
        "UPDATE users
            SET username='$username', password='$password' 
            WHERE id = 1;
        ";
    $rec = $conn->query($sql);
}


function getRRSS(&$result)
{
    global $conn;
    $sql = "SELECT * FROM rrss";
    $rec = $conn->query($sql);
    if ($rec->num_rows > 0) {
        $index = 0;
        while ($fila = $rec -> fetch_object()) {
            $result[$index] = $fila;
            $index++;
        }
    }
}

function updateRS($id, $link)
{
    global $conn;
    $sql =
        "UPDATE rrss
            SET link='$link' 
            WHERE id = $id;
        ";
    $rec = $conn->query($sql);
}