/**
 * WordPress dependencies
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { InnerBlocks } = wp.blockEditor;

/**
 * Internal dependencies
 */
import metadata from './block.json';

/**
 * Block constants
 */
const { name, category, attributes } = metadata;
const title = __('Custom Container', 'developer-dojo');
const description = __('Provide custom container', 'developer-dojo');
const keywords = [
	__('container', 'developer-dojo'),
	__('wrapper', 'developer-dojo'),
	__('section', 'developer-dojo'),
];

registerBlockType(name, {
	title,

	description,

	keywords,

	supports: {
		align: ['wide', 'full'],
		anchor: true,
		html: false,
	},

	category,

	icon: 'editor-kitchensink',

	attributes,

	edit: () => {
		return null;
	},

	save: () => {
		return null;
	},
});