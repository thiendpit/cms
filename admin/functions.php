<?php 

function insert_categories() {
    global $conn; 

    if(isset($_POST['submit'])) {
        $cat_title = $_POST['cat_title'];
        
        if($cat_title == "" || empty($cat_title)) {
            echo "This fiedld should not be empty";
        } else {
            $query = "INSERT INTO categories(cat_title) VALUES ('{$cat_title}')";

            $create_category_query = mysqli_query($conn, $query);

            if(!$create_category_query) {
                die('QUERY FAILED ' . mysqli_error($conn));
            }
        }
    }
    
}


function find_all_categories() {
    global $conn;

    $query = "SELECT * FROM categories";
    $select_all_categories = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($select_all_categories)) {
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];

    echo "<tr>";
    echo "<td>{$cat_id}</td>";
    echo "<td>{$cat_title}</td>";
    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
    echo "</tr>";

    }
}

function delete_categories() {
    global $conn;
    if(isset($_GET['delete'])) {
        $the_cat_id = $_GET['delete'];
        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id}";
        $delete_query = mysqli_query($conn, $query);
        header("Location: categories.php");
    }
}

function edit_categories() {
    global $conn;
    if(isset($_GET['edit'])) {
        $cat_id = $_GET['edit'];
        include("includes/update_categories.php");
    }
}
?>