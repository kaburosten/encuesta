var main = new function()
{
   this.init=function()
   {
         var that=this;
         
   }

    this.enviarMails = function(){
        
        $('#enviar-email').submit(function(){
            $.ajax({
                url : 'alumnos/email',
                type : 'POST',
                data : {periodo : 2014},
                success : function(data){
                    alert('ok');
                }
            });

            return false;
        });
    }

   

};