<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>My Magical  |  Myanmars</title>
  <meta name="description" content="My Magical Myanmar">
  <meta name="author" content="Aung Thein Naing">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

 

  <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.css">
 
  <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/swiper.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/dark.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/font-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/responsive.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="<?php echo url(); ?>/images/mymagicalmyanmar-web-favicon.png" type="image/png" sizes="16x16">

  <!--  notification message -->
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


   <script type="text/javascript">
  function replyon(fid){
   
                    var elem = document.getElementById(fid);
                    elem.style.display = 'block';
                    
             
          }
  </script>
    <script type="text/javascript">
  function addbook(bprice, vnum, inum, id){

     var getUrl = window.location;
    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/";


              $.ajax({
                type:'POST',
                url: baseUrl + 'makeorder',
                data: {
                  "_token": "{{ csrf_token() }}",
                  "id": id
                },
                datatype: "json",
                success:function(data){

                    if(data.msg == "success")
                    {
                     var e1 = document.getElementById('totalbox').innerHTML;
                   
                    if (e1 == "")e1 = 0;
                    document.getElementById('totalbox').innerHTML = parseInt(e1) + bprice;
                    document.getElementById('bookinfo').innerHTML  =  document.getElementById('bookinfo').innerHTML + '<br>' + 'vol' + vnum + ':' + inum + '  =   ' + bprice + 'ks';
                     // document.getElementById('bookids').innerHTML = document.getElementById('bookids').innerHTML + id + ";";
                    }
                    else
                    {
                        var elem = document.getElementById('nlabel');
                        var elem1 = document.getElementById('btnlogin');
                        elem.style.display = 'block';
                            elem1.style.display = 'block';
                    
                    }
                }
              });
   
                   
                    
             
          }


 
         
  </script>

