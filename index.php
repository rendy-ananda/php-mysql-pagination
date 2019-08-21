<?php
// connection
$conn = new mysqli('localhost', 'root', '', 'pagination_db');

// calculation preparation for pagination
$data_per_page    = 2; // the amount of data you want to display per page
$amount_of_data   = ($conn->query("SELECT * FROM items"))->num_rows; // calculate the amount of data
$number_of_page   = ceil($amount_of_data / $data_per_page); // ceil : rounding up value
$active_page      = ( isset($_GET['page']) ) ? $_GET['page'] : 1; // if else
$initial_data     = ($data_per_page * $active_page) - $data_per_page;



// the beginning of the pagination

// go to the previous link
if ( $active_page > 1 ) {
    echo '<a href="?page='.( $active_page - 1 ).'">&lt;</a> '; 
}

// pagination
for ($i=1; $i <= $number_of_page; $i++) { 
    // validation for active page
    if ( $i == $active_page ) {
        $link = '<a href="?page='.$i.'" style="color:red">'.$i.'</a> ';
    }
    else {
        $link =  '<a href="?page='.$i.'">'.$i.'</a> ';
    }

    echo $link;
}

// go to the next link
if ( $active_page <> $number_of_page ) {
    echo '<a href="?page='.( $active_page + 1 ).'">&gt;</a> '; 
}
// end of pagination



// result data using LIMIT
$result = $conn->query("SELECT * FROM items LIMIT $initial_data, $data_per_page");
echo '
<table>
    <th>Id</th>
    <th>Item</th>
    <th>Price</th>
';
while( $x = $result->fetch_object() ) {
    echo '
    <tr>
        <td>'.$x->id.'</td>
        <td>'.$x->item.'</td>
        <td>'.$x->price.'</td>
    </tr>
    ';
}
echo '</table>';
