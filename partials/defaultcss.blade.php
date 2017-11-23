{{favicon()}}   

{{generate_theme_css('fashionis/assets/css/bootstrap.min.css')}}   
@if($tema->isiCss=='')	
{{generate_theme_css('fashionis/assets/css/styles.css?v=002')}}
@else 	
{{generate_theme_css('fashionis/assets/css/editstyles.css?v=002')}}
@endif	
{{generate_theme_css('fashionis/assets/css/jquery.bxslider.css')}} 
{{generate_theme_css('fashionis/assets/css/font-awesome.min.css')}}    
{{generate_theme_css('fashionis/assets/css/fonts.css')}}   
{{generate_theme_css('fashionis/assets/css/animate.css')}} 
