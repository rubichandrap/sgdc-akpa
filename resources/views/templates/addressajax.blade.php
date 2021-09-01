<script type="text/javascript">
    $(document).ready(function() {
      $('select[name="address_province"]').on('change', function(){
        var provinceId = $(this).val();
        if(provinceId) {
            $.ajax({
                url: '/regencies/get/'+provinceId,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $('select[name="address_regency"]').empty();
                    $('select[name="address_regency"]').append('<option value="0" disable="true" selected="true">Pilih Kotamadya/Kabupaten</option>');
                    
                    $('select[name="address_district"]').empty();
                    $('select[name="address_district"]').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');
                    
                    $.each(data, function(key, value){
                        $('select[name="address_regency"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                }
            });
        } 
        else {
            $('select[name="address_regency"]').empty();
        }
      }); 
       $('select[name="address_regency"]').on('change', function(){
        var regencyId = $(this).val();
        if(regencyId) {
            $.ajax({
                url: '/districts/get/'+regencyId,
                type:"GET",
                dataType:"json",
                success:function(data) {
                    $('select[name="address_district"]').empty();
                    $('select[name="address_district"]').append('<option value="0" disable="true" selected="true">Pilih Kecamatan</option>');
                    $.each(data, function(key, value){
                        $('select[name="address_district"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                }
            });
        } 
        else {
            $('select[name="address_district"]').empty();
        }
      });
    });      
</script>