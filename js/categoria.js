$("document").ready(
                     function(){
						
                        $("#genero").change(
                            function(){
                               listarTimes();
                            }
                        ); 
                
                     }
             );
     
			 
                    function listarTimes(){
                             
                             $("#categoria").children("option").remove();
                             $("#categoria").append("<option value='0'>::AGUARDE::</option>");
                             var nome = $("#genero").val();
                             var dados = {dado:nome};
                             
                             if( nome != "0"){ 
                              $.ajax({
                                     type: "POST",
                                     url: "servidorCategoria.php",
                                     data: dados,
                                     dataType: "json",
                                     success: function(data){
                                            
                                            $("#categoria").children("option").remove();
                                            $.each( data, function( id, descricao ) {

                                                   $("#categoria").append("<option value='"+id+"'>"+descricao+"</option>");

                                            });
                                     }

                                   });
                               }

                    }