<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<h1 class="jumbotron text-center">Hello YAYAYA</h1>
<button class="btn-primary"><a href="/life/muumy_huub.html" style="text-decoration: none; color: white;">The Muumy Huub</a></button>
<br>
<button class="btn-primary"><a href="/games/index.html" style="text-decoration: none; color: white;">Games</a></button>
<div id='mum'></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
  $.ajax({
    type: 'GET',
    url: '/test/ajax_test.txt',
    success: function(data) {
      $('#mum').text(data)
    }
  });
  $.ajax({
    type: 'POST',
    url: '/response.php',
    data: {
      stuff: 'hello'
    },
    success: function(data) {
      
    }
  });
</script>
</body>
