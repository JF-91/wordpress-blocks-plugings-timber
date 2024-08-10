wp.blocks.registerBlockType('custom/my-custom-block', {
    title: 'My Custom Block',
    icon: 'smiley',
    category: 'common',
    edit: function() {
        return wp.element.createElement(
            'p',
            null,
            'Hello from my custom block!'
        );
    },
    save: function() {
        return wp.element.createElement(
            'p',
            null,
            'Hello from my custom block!'
        );
    },
});
