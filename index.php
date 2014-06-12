<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Console Test</title>

		<link rel="stylesheet" type="text/css" href="./js/codemirror/lib/codemirror.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/addon/hint/show-hint.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/addon/lint/lint.css"/>


		<script type="text/javascript" src="./js/codemirror/lib/codemirror.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/jslint.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/jsonlint.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/csslint.js"></script>

		<!-- ADDONS -->
		<script type="text/javascript" src="./js/codemirror/addon/fold/xml-fold.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/edit/closebrackets.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/edit/closetag.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/edit/matchtags.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/hint/show-hint.js"></script>
		<!-- <script type="text/javascript" src="./js/codemirror/addon/hint/anyword-hint.js"></script> -->
		<script type="text/javascript" src="./js/codemirror/addon/hint/xml-hint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/hint/javascript-hint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/hint/css-hint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/hint/html-hint.js"></script>
		<!-- <script type="text/javascript" src="./js/codemirror/addon/hint/sql-hint.js"></script> -->
		<script type="text/javascript" src="./js/codemirror/addon/lint/lint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/lint/javascript-lint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/lint/css-lint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/lint/json-lint.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/search/searchcursor.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/search/match-highlighter.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/selection/active-line.js"></script>

		<!-- MODES -->
		<script type="text/javascript" src="./js/codemirror/mode/xml/xml.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/javascript/javascript.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/css/css.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/htmlmixed/htmlmixed.js"></script>

		<style>
			.CodeMirror {
				width: 300px;
				border: 1px solid silver;
			}

			.CodeMirror-focused .cm-matchhighlight {
        		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAFklEQVQI12NgYGBgkKzc8x9CMDAwAAAmhwSbidEoSQAAAABJRU5ErkJggg==);
        		background-position: bottom;
        		background-repeat: repeat-x;
      		}

      		.CodeMirror-matchingtag {
      			background: rgba(255, 150, 0, .3);
      		}
		</style>
	</head>
	<body>
		<div class="wrapper-console">
			<textarea name="console" id="console" cols="30" rows="10"></textarea>
		</div>
		<script type="text/javascript">
			/*CodeMirror.commands.autocomplete = function( cm ) {
		    	cm.showHint( { hint : CodeMirror.hint.anyword } );
		    }*/

			var console = CodeMirror.fromTextArea( document.getElementById( "console" ), {
    			lineNumbers : true,
    			// mode: "javascript",
    			mode: 'text/html',
        		autoCloseTags: true,
        		extraKeys : { "Ctrl-Space" : "autocomplete", "Ctrl-J" : "toMatchingTag" },
        		// mode : { name: "html", globalVars : true },
        		lineWrapping: true,
    			styleActiveLine : true,
    			matchBrackets : true,
    			autoCloseBrackets : true,
    			// gutters: ["CodeMirror-lint-markers"],
    			// lint: true,
    			highlightSelectionMatches : { showToken : /\w/ },
    			matchTags : { bothTags : true }
  			});
      		
      		var charWidth = console.defaultCharWidth(), basePadding = 4;
      		console.on( "renderLine", function( cm, line, elt ) {
        		var off = CodeMirror.countColumn( line.text, null, cm.getOption( "tabSize" ) ) * charWidth;
        		elt.style.textIndent = "-" + off + "px";
        		elt.style.paddingLeft = ( basePadding + off ) + "px";
      		} );
      		console.refresh();
		</script>
	</body>
</html>