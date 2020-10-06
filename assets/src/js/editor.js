wp.domReady( () => {

  const { __ } = wp.i18n;
  const { registerBlockStyle, unregisterBlockStyle } = wp.blocks;

  unregisterBlockStyle( 'core/button', 'outline' );
  unregisterBlockStyle( 'core/button', 'fill' );

  registerBlockStyle( 'core/button', {
    name: 'default',
    label: 'Default',
    isDefault: true,
  } );

} )
