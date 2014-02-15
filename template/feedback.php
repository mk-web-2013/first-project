<?php require_once 'data/country_data.php'; ?>

<div id="feedback_form" class="box">
  <div class="box-header">Обратная связь</div>
  <div class="box-content" >
    <form method="post" enctype="multipart/form-data">
      <label for="country" class="requare">Страна:</label>
      <select id="country" name="country">
        ?>
        <?php foreach ($countries as $country_key => $country) { ?>          
          <option value="<?php echo $country_key; ?>" <?php if ($current_country_key == $country_key) { ?>selected="selected"<?php } ?>><?php echo $country['name'] ?></option>
        <?php } ?>
      </select>
      <label for="city" class="requare">Город:</label>
      <select id="city" name="city">
      <?php require_once 'template/cities.php'; ?>
      </select>
    </form>
  </div>
</div>
<script>
  var curr_country = document.getElementById('country');
  var xhr = new XMLHttpRequest();
  curr_country.onchange = function() {
//    xhr.open('get', 'ajax.php?ajax_file=template/cities.php&country=' + curr_country.value, true);
//    xhr.onreadystatechange = function(data) {
//      if (data.srcElement.readyState == 4) {
//        //document.getElementById('city').outerHTML = xhr.responseText;
//        document.getElementById('city').outerHTML = data.srcElement.responseText;
//      }
//    };
//    xhr.send();
  $.post('ajax.php?ajax_file=template/cities.php&country=' + curr_country.value,{'myname':'Vitaliy'},function(data){$('#city').html(data);},'html');
  };
  $.ajax({
    'method':'get',
    'url':'/',
    'data':{},
    success:function(data){
      
    },
    
  });
</script>

