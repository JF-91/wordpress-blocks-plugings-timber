import { useBlockProps } from '@wordpress/block-editor'

export default function save () {
    const blockProps = useBlockProps.save();
		return <p {...blockProps}>Edit JSX</p>;
}
