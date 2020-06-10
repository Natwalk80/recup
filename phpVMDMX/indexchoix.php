<html>
      <head>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link href="Css/index.css" rel="stylesheet">
            
      </head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
<body>
<div class="container">
	<div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="material-button-anim">
          <ul class="list-inline" id="options">
            <li class="option">
              <button class="material-button option1" type="button">
                <span class="fa fa-globe-asia" aria-hidden="true"></span>
                
              </button>
            </li>
            <li class="option">
              <button class="material-button option2" type="button">
                <span class="fa fa-globe-asia" aria-hidden="true"></span>
              </button>
            </li>
            <li class="option">
              <button class="material-button option3" type="button">
                <span class="fa fa-pencil" aria-hidden="true"></span>
              </button>
            </li>
          </ul>
          <button class="material-button material-button-toggle" type="button">
            <span class="fa fa-plus" aria-hidden="true"></span>
          </button>
        </div>
      </div>
	</div>
</div>

      <script>
            $(document).ready(function () {
              $('.material-button-toggle').on("click", function () {
                  $(this).toggleClass('open');
                  $('.option').toggleClass('scale-on');
              });
          });
      </script>

</body>
</html>