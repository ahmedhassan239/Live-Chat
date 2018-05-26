<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<title>Documented</title>
	<style type="text/css">
		 .list-group{
			overflow-y: scroll;
			height: 100px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row" id="app">
		<div class="offset-4 col-md-4">	
			<li class="list-group-item active">Chat Room</li>
			<ul class="list-group" v-chat-scroll>
			  <message
			  v-for="value in chat.message"
			  :key=value.index
			  color	='success'
			  >
			  	@{{value}}	
			  </message>
			</ul>
			 <input type="text" class="form-control" placeholder="type your message hear..." v-model = "message" @keyup.enter = 'send'>
		</div>
	</div>
</div>

<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>