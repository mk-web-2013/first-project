<?php require_once 'data/country_data.php'; ?>

  <?php foreach ($countries[$current_country_key]['cities'] as $city_key => $city) { ?>          
    <option value="<?php echo $city_key; ?>"><?php echo $city; ?></option>
  <?php } ?>

