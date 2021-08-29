<!DOCTYPE html>
<html lang="{{  str_replace("_","-",app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=deveice-width, initial-scale=1">
	<meta name="CSRF-token" content="{{ csrf_token() }}">
	<title>{{ config("app.name","Vue Laravel SPA") }}</title>
	<link href="{{mix("/css/app.css")}}" rel="stylesheet">
</head>
<body>
<div id="app">
	<header-component></header-component>
	
	<router-view></router-view>
</div>
<script src="{{ mix('/js/app.js') }}" defer></script>
<script>
</script>
</body>
</head>
</html>