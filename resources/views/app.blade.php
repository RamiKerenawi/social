<!DOCTYPE html>
<html>
    <head>
        <title>Face2Book</title>

		<meta name="csrf-token" content="{{ csrf_token() }}" />

		
 		<link href="http://localhost/waha/assets/admin/css/bootstrap.min.css" rel="stylesheet"> 


		<!-- Link JQuery Library -->
 
		<script type="text/javascript" src="http://face2book.website/chk/assets/js/jquery-1.9.1.js"></script>

		
		
		 

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;     
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

			.postform {	
				border: solid 1px #CCC;
				-moz-box-shadow: 2px 2px 0px #999;
				-webkit-box-shadow: 2px 2px 0px #999;
				box-shadow: 2px 2px 0px #999;				
				
				margin-bottom:15px !important; 
			}
			.posttextarea {
				    /*padding: 4px 6px 4px 50px;*/
					width:100%;
			}
			.posthead li{				
				float: left;
				margin-left: 8px;
			}
			
			.wholepost {	
			
			}
			.post_content {
				margin: 15px;
				
			}
			
			.reply {
				
				margin-left:20px;
			}
			
			
            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 12px;
            }
			
			ul, li {
				list-style: none;
			}
			.comments {
				margin-left: 20px;
				margin-right: 20px;
				background-color: #cdced6;				
			}
			header {
				/*height: 40px;*/
				background-color: #6bc4d0;
				text-align: -webkit-center;
			}			
			aside {
				background-color: #6bc4d0;
				/*width: 20%;*/
				height: 100%;
				
				
			}
			.wrapper {
				border: 1px solid #cac3c3;
				/*width:45%;*/
				/*margin: 0px auto;*/
				/*padding-right: 0;*/
			}
			
			.rt {
				
				float: right;
			}
			.lt {
				
				float: left;
			}
        </style>
		<script>
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});		
		</script>
    </head>
    <body>
		<header>
			<div class="row">
				<h1>Face2Book</h1>
			</div>
		</header>
		<div class="row">
		<aside class="col-md-3 rt">
			Friends' List
		</aside>
		
		
		<aside class="col-md-3 lt">
			Action List
		</aside>
		<div class="col-md-6 wrapper">
			@yield("content")
		</div>
    </body>
</html>