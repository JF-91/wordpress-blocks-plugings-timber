var registerBlockType = wp.blocks.registerBlockType;

registerBlockType("blocks-course/firstblock", {
  edit: function () {
    return "Edit block";
  },
  save: function () {
    return "Save";
  },
});