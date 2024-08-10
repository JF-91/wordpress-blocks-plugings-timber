# install
 1. npm install @wordpress/scripts --save-dev
 2. npm i @wordpress/blocks
 3. npm install @wordpress/block-editor
 
# commands
 1. npx wp-scripts build  (this is a command for build the pluging) after mus it  delete index.js in main path and index.asset.php
 and rename path in block.json for editorScript -> route to build/index.js

 2. npx wp-scripts start  (this is a runtime compiler for your plugin)

 3. npx @wordpress/create-block boilerplate  (create a block)
