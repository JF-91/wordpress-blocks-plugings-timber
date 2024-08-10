import { registerBlockType } from '@wordpress/blocks';
import Save from './save.js';
import Edit from './edit.js';
import "./index.scss"

registerBlockType( 'react/reactblock', {
	edit: Edit,
	save: Save,
} );
