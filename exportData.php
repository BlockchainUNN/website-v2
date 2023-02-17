<?php 
 
// Load the database configuration file 
include_once("db-manager.php");
 
// Fetch records from database 
$sql = "SELECT * FROM `attendees`";
$result = mysqli_query($cxn, $sql) or die(mysqli_error($cxn));
$total_rows = mysqli_num_rows($result);
 
if($total_rows > 0){ 
    $delimiter = ","; 
    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('ID', 'FIRST NAME', 'LAST NAME', 'EMAIL', 'PHONE', 'CAREER', 'STATE'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = mysqli_fetch_assoc($result)){ 
        $lineData = array($row['id'], $row['firstname'], $row['lastname'], $row['email'], $row['phone'], $row['career'], $row['state']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>