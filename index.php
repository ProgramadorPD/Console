<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Console Test</title>

		<link rel="stylesheet" type="text/css" href="./js/codemirror/lib/codemirror.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/addon/fold/foldgutter.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/addon/dialog/dialog.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/addon/hint/show-hint.css"/>

		<link rel="stylesheet" type="text/css" href="./js/codemirror/theme/monokai.css"/>
		<link rel="stylesheet" type="text/css" href="./js/codemirror/theme/mdn-like.css"/>


		<script type="text/javascript" src="./js/codemirror/lib/codemirror.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/jslint.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/jsonlint.js"></script>
		<script type="text/javascript" src="./js/codemirror/lib/lint/csslint.js"></script>
		
		<!-- MODES -->
		<script type="text/javascript" src="./js/codemirror/mode/xml/xml.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/javascript/javascript.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/css/css.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script type="text/javascript" src="./js/codemirror/mode/clike/clike.js"></script>

		<!-- ADDONS -->
		<script type="text/javascript" src="./js/codemirror/addon/fold/xml-fold.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/fold/foldcode.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/fold/brace-fold.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/comment/comment.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/dialog/dialog.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/display/placeholder.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/edit/closebrackets.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/edit/matchbrackets.js"></script>
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

		<script type="text/javascript" src="./js/codemirror/addon/mode/multiplex.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/search/searchcursor.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/search/search.js"></script>
		<script type="text/javascript" src="./js/codemirror/addon/search/match-highlighter.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/selection/active-line.js"></script>

		<script type="text/javascript" src="./js/codemirror/addon/wrap/hardwrap.js"></script>

		<!-- KEYMAPS -->
		<script type="text/javascript" src="./js/codemirror/keymap/sublime.js"></script>
		<script type="text/javascript" src="./js/codemirror/keymap/vim.js"></script>

		<style>
			.CodeMirror {
				display: block;
				margin: 0 auto;
				width: 70%;
				margin-top: 50px;
				/*border: 1px solid silver;*/
				border-top: 1px solid #eee;
				border-bottom: 1px solid #eee;
				line-height: 1.3;
				height: 500px;
			}

			.CodeMirror-focused .cm-matchhighlight {
        		background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAFklEQVQI12NgYGBgkKzc8x9CMDAwAAAmhwSbidEoSQAAAABJRU5ErkJggg==);
        		background-position: bottom;
        		background-repeat: repeat-x;
      		}

      		.CodeMirror-matchingtag {
      			background: rgba(255, 150, 0, .3);
      		}

      		.cm-delimit {
      			color: #fa4;
      		}

      		.CodeMirror-empty {
      			outline: 1px solid #c22;
      		}

      		.CodeMirror-empty.CodeMirror-focused {
      			outline: none;
      		}

      		.CodeMirror pre.CodeMirror-placeholder {
      			color: #999;
      		}

      		dt {
      			font-family: monospace;
      			color: #666;
      		}

      		.CodeMirror-linenumbers {
      			padding: 0 8px;
      		}
		</style>
	</head>
	<body>
		<div class="wrapper-console">
			<textarea name="console" id="console" cols="30" rows="10" placeholder="Code goes here...">
				<?php echo '<html>
				  <head>
				    <title>Test Console</title>
				  </head>
				  <body>
				    <p>
				      Texto para el contenido de mi consola.
				    </p>
				  </body>
				</html>

				function testConsole( that ) {
					alert( that );

					return( false );
				}

				* { text-align : center; }'; ?>
			</textarea>
		</div>
		<script type="text/javascript">
			/*CodeMirror.commands.autocomplete = function( cm ) {
		    	cm.showHint( { hint : CodeMirror.hint.anyword } );
		    }*/

		    var value = "// The bindings defined specifically in the Sublime Text mode\nvar bindings = {\n";
  			var map = CodeMirror.keyMap.sublime, mapK = CodeMirror.keyMap["sublime-Ctrl-K"];

  			for (var key in map) {
    			if (key != "Ctrl-K" && key != "fallthrough" && (!/find/.test(map[key]) || /findUnder/.test(map[key])))
      			value += "  \"" + key + "\": \"" + map[key] + "\",\n";
  			}

  			for (var key in mapK) {
    			if (key != "auto" && key != "nofallthrough")
      			value += "  \"Ctrl-K " + key + "\": \"" + mapK[key] + "\",\n";
  			}

  			value += "}\n\n// The implementation of joinLines\n";
  			value += CodeMirror.commands.joinLines.toString().replace(/^function\s*\(/, "function joinLines(").replace(/\n  /g, "\n") + "\n";

		    CodeMirror.defineMode( "multiplex", function( config ) {
			  	return CodeMirror.multiplexingMode(
			    	CodeMirror.getMode( config, "text/html" ),
		    		{
		    			open : "<<",
		    			close : ">>",
		    			mode : CodeMirror.getMode( config, "text/plain" ),
		     			delimStyle : "delimit"
		     		}
			  	);
			});

			var consoleBox = CodeMirror.fromTextArea( document.getElementById( "console" ), {
				value: value,
    			lineNumbers : true,
    			// mode: "javascript",
    			// mode: 'text/html',
    			// mode: 'multiplex',
    			// mode: 'text/x-csrc',
    			// vimMode: true,
        		autoCloseTags: true,
        		extraKeys : { "Ctrl-Space" : "autocomplete", "Ctrl-J" : "toMatchingTag" },
        		keymap : 'sublime',
        		mode : { name: "javascript", globalVars : true },
        		lineWrapping: true,
    			styleActiveLine : true,
    			matchBrackets : true,
    			autoCloseBrackets : true,
    			gutters: ["CodeMirror-lint-markers"],
    			lint: true,
    			highlightSelectionMatches : { showToken : /\w/ },
    			showCursorWhenSelecting: true,
    			matchTags : { bothTags : true },
    			theme : 'mdn-like'
  			});
      		
      		var charWidth = consoleBox.defaultCharWidth(), basePadding = 4;
      		consoleBox.on( "renderLine", function( cm, line, elt ) {
        		var off = CodeMirror.countColumn( line.text, null, cm.getOption( "tabSize" ) ) * charWidth;
        		elt.style.textIndent = "-" + off + "px";
        		elt.style.paddingLeft = ( basePadding + off ) + "px";
      		} );

      		consoleBox.on ( "keypress", function( event ) {
      			console.info( event );
      		} );

      		consoleBox.refresh();
		</script>
	</body>
</html>