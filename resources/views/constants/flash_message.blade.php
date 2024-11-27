<head>
    <link rel="stylesheet" href="{{ asset('css/flash_message.css') }}">
</head>
<body>
@if(session()->has('message'))
<div class="alert alert-success" id="flash-message">

   <button class="close" id="close" type="button" data-dismiss="alert" aria-hidden="true" onclick="">x</button>

  <span style="font-size: 15px;"> {{ session()->get('message') }} </span>

 </div>
@endif
<script src="{{ asset('js/flash_message.js') }}"></script>
</body>