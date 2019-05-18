<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="welcome-text">
    <h1>Country Names With Pagination</h1>
</div>

<?php
foreach($data['country'] as $country){
    echo "<p>" . $country->country_name . "</p>";
}

echo $data['links'];


?>



<?php require APPROOT . '/views/inc/footer.php'; ?>