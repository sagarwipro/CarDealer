
function remove() {
    if (isset($_POST['delete'])) {
        $delete = false;
        $id = $_POST['checkbox'];

        $sql = "DELETE FROM `events` WHERE ID ='";
        $sql1 = $id;
        $sql2 =
            $delete = mysql_query($sql + $sql1 + $sql2);
        $id = mysql_affected_rows();
        if ($delete) {
            alert(" ");
        }
        else
    }
}
