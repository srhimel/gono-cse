(function() {
	tinymce.PluginManager.add('srhedutheme_mce_button', function( editor, url ) {
		editor.addButton( 'srhedutheme_mce_button', {
			text: 'Short Code',
			icon: false,
			type: 'menubutton',
			menu: [
				
				{
					text: 'Faculty Member',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Type',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'teachersType',
                                    label: 'ধরন',
                                    'values': [
                                        {text: 'Faculty members', value: 'current'},
                                        {text: 'Lab Instructors', value: 'archive'}
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[teachers type="' + e.data.teachersType + '"]');
                            }
                        });
                    }
				},
				
				
				{
					text: 'Notices',
                    onclick: function() {
                        editor.insertContent( '[notices]');
                    }
				},
				
				{
					text: 'Routine',
                    onclick: function() {
                        editor.windowManager.open( {
                            title: 'Add Routine',
                            body: [
                                {
                                    type: 'listbox',
                                    name: 'routineType',
                                    label: 'ধরন',
                                    'values': [
                                        {text: 'Class Routine', value: 'class'},
                                        {text: 'Exam Routine', value: 'exam'}
                                    ]
                                }                                
                            ],
                            onsubmit: function( e ) {
                                editor.insertContent( '[routines type="' + e.data.routineType + '"]');
                            }
                        });
                    }
				},
				
				{
					text: 'Image Gallery',
                    onclick: function() {
                        editor.insertContent( '[photogallery]');
                    }
				}, 
				               
				{
					text: 'Results',
                    onclick: function() {
                        editor.insertContent( '[results]');
                    }
				},                
			]
		});
	});
})();