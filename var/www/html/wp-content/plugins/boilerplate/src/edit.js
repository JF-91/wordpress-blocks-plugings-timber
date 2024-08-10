
import { __ } from '@wordpress/i18n';

import { useBlockProps, RichText } from '@wordpress/block-editor';

import './editor.scss';


export default function Edit( { attributes, setAttributes } ) {
	return (
		<RichText
			{ ...useBlockProps() }
			tagName="h2"
			value={ attributes.text }
			onChange={ ( value ) => setAttributes( { text:value } ) }
			placeholder={ __( 'Write heading…' ) }
			allowedFormats={['core/bold', 'core/italic']}
		/>
	);
}
