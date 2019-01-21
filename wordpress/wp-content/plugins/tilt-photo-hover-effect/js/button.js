
(function() {
	
    tinymce.PluginManager.add('tphe_TcButton', function( editor, url ) {
        editor.addButton( 'tphe_TcButton', {
            title: 'INSERT HOVER EFFECT',
            image: url +  '/icon.png',
            onclick: function() {
			editor.windowManager.open( {
				title: 'INSERT HOVER EFFECT - FREE version.',
				width:800,
				height: 360,
				 body: [{
				 layout: 'flow',
				 name: 'align',
				 type: 'form',
				 direction: 'column',
				 items: [
						 {
							type   : 'container',
							name   : 'container',
							html   : '<p style="background-color: #FFFF00; color: black;">More effects (effects 2 and 3) are only available in PRO version of the plugin. Check them out and download them <a href="http://scarab13.com/tilteffect" target="new" style="font-weight:bold;">Here</a></p>'
						 }
						  ,
						 {
							 label: 'Image URL',
							 type: 'textbox',
							 name: 'url',
							 id:'url',                                 
						 },
						 {
							 type: 'button',
							 name: 'bgimage',
							 icon: 'browse',
							 onclick: function(e) {
							 if (this.window === undefined) {
								 this.window = wp.media({
										 title: 'Insert a media',
										 library: {type: 'image'},
										 multiple: false,
										 button: {text: 'Insert'}
									 });
						 
								 var self = this; // Needed to retrieve our variable in the anonymous function below
								 this.window.on('select', function(e) {
										 var first = self.window.state().get('selection').first().toJSON();
										  jQuery('#url').val(first.url);
									 });
									 
							 }
							 
								 this.window.open();
								 return false;
							 }                                 
						 },
						 {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'textbox',
						  name: 'opacity',
						  label: 'Opacity',
						  value: '0.4'
						  },
						  {
						  type: 'textbox',
						  name: 'border',
						  label: 'Border',
						  value: '0'
						  },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'textbox',
						  name: 'alink',
						  label: 'Link',
						  value: '#'
						  },
						  {
						  type: 'textbox',
						  name: 'width',
						  label: 'Width',
						  id:'width'
						  },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						   {
						  type: 'textbox',
						  name: 'height',
						  label: 'Height',
						  id:'height'
						  },
						  {
						  type: 'textbox',
						  name: 'move_x',
						  label: 'X move',
						  value: '20'
						  },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'textbox',
						  name: 'move_y',
						  label: 'Y move',
						  value: '-15'
						  },
						  
						  {
						  type: 'textbox',
						  name: 'move_z',
						  label: 'Z move',
						  value: '-8'
						  },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'textbox',
						  name: 'rotate_x',
						  label: 'X rotate',
						  value: '-13'
						  },
						  {
						  type: 'textbox',
						  name: 'rotate_y',
						  label: 'Y rotate',
						  value: '19'
						  },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'textbox',
						  name: 'rotate_z',
						  label: 'Z rotate',
						  value: '8'
						  },
						  
						 {
						 type: 'listbox',
						 name: 'level',
						 label: 'Effect Number',
						 minWidth: 170,
						  'values': [
							{text: 'one', value: 'one'},
							 {text: 'two - (full version)', value: ''},
							 {text: 'three  - (full version)', value: ''}
						 ]	
						 },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						 {
						 type: 'listbox',
						 name: 'grayscale',
						 label: 'Grayscale',
						 minWidth: 170,
						 'values': [
							 {text: 'no', value: 'no'},
							 {text: 'yes', value: 'yes'}
						 ]
						 },
						 {
						  type: 'listbox',
						  name: 'extra_imgs',
						  label: 'Extra Images',
						  minWidth: 170,
						  'values': [
							  {text: '3', value: '3'},
							  {text: '1', value: '1'},
							  {text: '2', value: '2'},
							  {text: '4', value: '4'},
							  {text: '5', value: '5'}
						  ]
						 },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						   type: 'listbox',
						   name: 'fitscreen',
						   label: 'Fitscreen',
						   minWidth: 170,
						   'values': [
							 {text: 'Yes', value: 'yes'},
							   {text: 'No', value: 'no'}
						   ]
						  },
						  {
						  type: 'listbox',
						  name: 'target',
						  label: 'Target',
						  minWidth: 170,
						  'values': [
							  {text: '_blank', value: '_blank'},
							  {text: '_parent', value: '_parent'},
							  {text: '_self', value: '_self'},
							  {text: '_top', value: '_top'},
							  {text: '_new', value: '_new'}
						  ]
						 },
						   {
							type   : 'container',
							name   : 'container',
							html   : '<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h1>'
						 },
						  {
						  type: 'listbox',
						  name: 'overflow',
						  label: 'Overflow',
						  minWidth: 170,
						  'values': [
							  {text: 'hidden', value: 'hidden'},
							  {text: 'visible', value: 'visible'} 
						  ]
						  }
					 ],
				 
				 },
				
				 ],
			 
			 onsubmit: function( e ) {
				 if(e.data.url === '') {
					jQuery('#url').css('border-color', 'red');
					editor.windowManager.alert('Please image url.');
			 		return false;
					}
				  editor.insertContent('[wpdp_effect ' + 'url="' + e.data.url + '"' + ' effect= "one"' + 
				  ' grayscale="' + e.data.grayscale + '"' + ' move_x="' + e.data.move_x + '"' +
				  ' move_y="' + e.data.move_y + '"' + ' move_z="' + e.data.move_z + '"' +
				  ' rotate_x="' + e.data.rotate_x + '"' + ' rotate_y="' + e.data.rotate_y + '"' + ' rotate_z="' + e.data.rotate_z + '"' +
				  ' opacity="' + e.data.opacity + '"' + ' width="' + e.data.width + 'px"' + ' height="' + e.data.height + 'px"' +
				  ' border="' + e.data.border + 'px"' + ' link="' + e.data.alink + '"' + ' overflow="' + e.data.overflow + '"' +
				  ' extra_imgs="' + e.data.extra_imgs + '"' + ' fitscreen="' + e.data.fitscreen + '"' + ' target="' + e.data.target + '"' +
				 ']');
			 }
		 });
			
	 }
        });
    });
})();
