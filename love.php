<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src='tinymce/js/tinymce/tinymce.min.js'>
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#myTextarea',
    width: 600,
    height: 300,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'
  });
  </script>
</head>

<body>
  
  <form method="post">
  <textarea id="myTextarea"></textarea>
<br />
<input type="submit" name="save" value="Submit" />
<input type="reset" name="reset" value="Reset" />
</form>
</body>
<?php
/*
echo '<p>';
			echo "the answer of question number 6 is = "
		class Turing11{
				public $ello= 'ello';
				public $c;
				public $m;
				function _construct($y){
					$this->c = static function($f){
						//@@@@@@@@@@@@@@@@@@@@@@@@
					};
					$this->m = function(){
						return "h";
					};
				}
			}
			$x = new Turing11("h");
			$f = $x->c;
			echo $f($x->m);
*/

      class Turing11{
				public $x = 1;
				function _construct(){
					++$this->x;
				}
				function _invoke(){
					return ++$this->x;
				}
				function _toString(){
					return (string) --$this->x;
				}
			}
			$turings = new Turing11();
			return $turings();
      ?>
</html>