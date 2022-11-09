$(document).ready(function(){
	$(".dynamic_select_box_param").change(function(){
		var load_select_box=$(this).attr('rel');
		var load_select_box_data=$("." + load_select_box).attr('rel');
		$('.' + load_select_box).load( load_select_box_data + '?qry=' + $(this).val() );
	});

    //alert(productid);

	 $("#Size_1").click(function(){
	     //alert(123);
	   if($('#Size_1').is(':checked')){
	
	   $('#FirstTextbox').show();
	    var SizeText  = $('#Size_1').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                           
                          
                        }
                    });
	 
	 }else{
	  var SizeText  = $('#Size_1').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 }
	 });
	 
	 
	  $("#Size_2").click(function(){
	   if($('#Size_2').is(':checked')){
	   $('#SecondTextbox').show();
	    var SizeText  = $('#Size_2').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 
	 }else{
	  var SizeText  = $('#Size_2').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 }
	 });
	 
	   $("#Size_3").click(function(){
	   if($('#Size_3').is(':checked')){
	   $('#ThirdTextbox').show();
	    var SizeText  = $('#Size_3').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                            
                            
                        }
                    });
	 
	 }else{
	  var SizeText  = $('#Size_3').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 }
	 });
	 
	   $("#Size_4").click(function(){
	   if($('#Size_4').is(':checked')){
	   $('#FourthTextbox').show();
	    var SizeText  = $('#Size_4').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                               
                          
                        }
                    });
	 
	 }else{
	  var SizeText  = $('#Size_4').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 }
	 });
	 
	 
	    $("#Size_5").click(function(){
	        
	   if($('#Size_5').is(':checked')){
	  $('#FifthTextbox').show();
	    var SizeText  = $('#Size_5').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 
	 }else{
	  var SizeText  = $('#Size_5').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	 }
	 });
	 
	 $("#Size_6").click(function(){
	   if($('#Size_6').is(':checked')){
	  $('#SixthTextbox').show();
	    var SizeText  = $('#Size_6').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_6').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 
	 	$("#Size_7").click(function(){
	   if($('#Size_7').is(':checked')){
	   $('#SeventhTextbox').show();
	    var SizeText  = $('#Size_7').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_7').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	  	$("#Size_8").click(function(){
	   if($('#Size_8').is(':checked')){
	   $('#EightthTextbox').show();
	    var SizeText  = $('#Size_8').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_8').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	  	$("#Size_9").click(function(){
	   if($('#Size_9').is(':checked')){
	   $('#NinethTextbox').show();
	    var SizeText  = $('#Size_9').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_9').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 	$("#Size_10").click(function(){
	   if($('#Size_10').is(':checked')){
	   $('#TenthTextbox').show();
	    var SizeText  = $('#Size_10').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_10').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 	$("#Size_11").click(function(){
	   if($('#Size_11').is(':checked')){
	   $('#EleventhTextbox').show();
	    var SizeText  = $('#Size_11').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_11').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 $("#Size_12").click(function(){
	   if($('#Size_12').is(':checked')){
	   $('#TwelvethTextbox').show();
	    var SizeText  = $('#Size_12').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_12').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 $("#Size_13").click(function(){
	   if($('#Size_13').is(':checked')){
	   $('#ThirrteenthTextbox').show();
	    var SizeText  = $('#Size_13').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_13').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 $("#Size_14").click(function(){
	   if($('#Size_14').is(':checked')){
	   $('#FourteenthTextbox').show();
	    var SizeText  = $('#Size_14').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_14').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 	 $("#Size_15").click(function(){
	   if($('#Size_15').is(':checked')){
	   $('#FifthteenthTextbox').show();
	    var SizeText  = $('#Size_15').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_15').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 	 $("#Size_16").click(function(){
	   if($('#Size_16').is(':checked')){
	   $('#SixteenthTextbox').show();
	    var SizeText  = $('#Size_16').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_16').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 $("#Size_17").click(function(){
	   if($('#Size_17').is(':checked')){
	   $('#SeventhteenTextbox').show();
	    var SizeText  = $('#Size_17').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_17').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 	 $("#Size_18").click(function(){
	   if($('#Size_18').is(':checked')){
	   $('#EighteenthTextbox').show();
	    var SizeText  = $('#Size_18').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_18').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 	 $("#Size_19").click(function(){
	   if($('#Size_19').is(':checked')){
	   $('#NineteenthTextbox').show();
	    var SizeText  = $('#Size_19').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_19').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	 
	 
	  $("#Size_20").click(function(){
	   if($('#Size_20').is(':checked')){
	   $('#twentythTextbox').show();
	    var SizeText  = $('#Size_20').val();   
	    //alert(123);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {                        
                            
                        }
                    });
	 }else{
	  var SizeText  = $('#Size_20').val();   
	           $.ajax({
                        "type": "POST",
                        "url": "js/server/product_size_delete_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid,
                        "success": function (response) {
                                                
                        }
                    });
	   }
	 });
	 
	 
	  $("#FirstTextbox").change(function(){
	   if($('#Size_1').is(':checked')){
	    var SizeText  = $('#Size_1').val();  
	    var firstTextbox  = $('#FirstTextbox').val();     
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + firstTextbox,
                        "success": function (response) {

                        }
                    });
	 
	 }
	 });
	 
	   
	  $("#SecondTextbox").change(function(){
	   if($('#Size_2').is(':checked')){
	    var SizeText  = $('#Size_2').val();  
	    var SecondTextbox= $('#SecondTextbox').val();   
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + SecondTextbox,
                        "success": function (response) {
                                                                   
                        }
                    });
	 
	 }
	 });
	 
	 
	   $("#ThirdTextbox").change(function(){
	   if($('#Size_3').is(':checked')){
	    var SizeText  = $('#Size_3').val();  
	    var ThirdTextbox= $('#ThirdTextbox').val();   
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + ThirdTextbox,
                        "success": function (response) {
                                                                              
                        }
                    });
	 
	 }
	 });
	 
	 
	    $("#FourthTextbox").change(function(){
	   if($('#Size_4').is(':checked')){
	    var SizeText  = $('#Size_4').val();  
	    var FourthTextbox= $('#FourthTextbox').val();   
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + FourthTextbox,
                        "success": function (response) {
                                                                                
                        }
                    });
	 
	 }
	 });
	 
	     $("#FifthTextbox").change(function(){
	         //alert(123);
	   if($('#Size_5').is(':checked')){
	    var SizeText  = $('#Size_5').val();  
	    var FifthTextbox= $('#FifthTextbox').val();   
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + FifthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 

	 
   	 $("#SixthTextbox").change(function(){
	   if($('#Size_6').is(':checked')){
	    var SizeText  = $('#Size_6').val();  
	    var SixthTextbox= $('#SixthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + SixthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 }); 
	 
	   $("#SeventhTextbox").change(function(){
	   if($('#Size_7').is(':checked')){
	    var SizeText  = $('#Size_7').val();  
	    var SeventhTextbox= $('#SeventhTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + SeventhTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 }); 
	 	$("#EightthTextbox").change(function(){
	   if($('#Size_8').is(':checked')){
	    var SizeText  = $('#Size_8').val();  
	    var EightthTextbox= $('#EightthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + EightthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 $("#NinethTextbox").change(function(){
	   if($('#Size_9').is(':checked')){
	    var SizeText  = $('#Size_9').val();  
	    var NinethTextbox= $('#NinethTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + NinethTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 	 $("#TenthTextbox").change(function(){
	   if($('#Size_10').is(':checked')){
	    var SizeText  = $('#Size_10').val();  
	    var TenthTextbox= $('#TenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + TenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 $("#EleventhTextbox").change(function(){
	   if($('#Size_11').is(':checked')){
	    var SizeText  = $('#Size_11').val();  
	    var EleventhTextbox= $('#EleventhTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + EleventhTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 
	 
	 	 $("#TwelvethTextbox").change(function(){
	   if($('#Size_12').is(':checked')){
	    var SizeText  = $('#Size_12').val();  
	    var TwelvethTextbox= $('#TwelvethTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + TwelvethTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 	 $("#ThirrteenthTextbox").change(function(){
	   if($('#Size_13').is(':checked')){
	    var SizeText  = $('#Size_13').val();  
	    var ThirrteenthTextbox= $('#ThirrteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + ThirrteenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	  	 $("#FourteenthTextbox").change(function(){
	   if($('#Size_14').is(':checked')){
	    var SizeText  = $('#Size_14').val();  
	    var FourteenthTextbox= $('#FourteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + FourteenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 
	 	 $("#FifthteenthTextbox").change(function(){
	   if($('#Size_15').is(':checked')){
	    var SizeText  = $('#Size_15').val();  
	    var FifthTextbox= $('#FifthteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + FifthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 	 $("#SixteenthTextbox").change(function(){
	   if($('#Size_16').is(':checked')){
	    var SizeText  = $('#Size_16').val();  
	    var SixteenthTextbox= $('#SixteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + SixteenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	  	 $("#SeventhteenTextbox").change(function(){
	   if($('#Size_17').is(':checked')){
	    var SizeText  = $('#Size_17').val();  
	    var SeventhTextbox= $('#SeventhteenTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + SeventhTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 	 $("#EighteenthTextbox").change(function(){
	   if($('#Size_18').is(':checked')){
	    var SizeText  = $('#Size_18').val();  
	    var EighteenthTextbox= $('#EighteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + EighteenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	  $("#NineteenthTextbox").change(function(){
	   if($('#Size_19').is(':checked')){
	    var SizeText  = $('#Size_19').val();  
	    var NineteenthTextbox= $('#NineteenthTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + NineteenthTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
	 
	 	$("#twentythTextbox").change(function(){
	   if($('#Size_20').is(':checked')){
	    var SizeText  = $('#Size_20').val();  
	    var twentythTextbox= $('#twentythTextbox').val();   
	    //alert(SixthTextbox);
	          $.ajax({
                        "type": "POST",
                        "url": "js/server/product_style_update_server.php",
                        "data": 'SizeText=' + SizeText + '&ProductId=' +productid + '&FirstTextbox=' + twentythTextbox,
                        "success": function (response) {
                                                                        
                        }
                    });
	 
	 }
	 });
});	

