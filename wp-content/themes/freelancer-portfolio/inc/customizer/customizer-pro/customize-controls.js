( function( api ) {

	// Extends our custom "freelancer-portfolio" section.
	api.sectionConstructor['freelancer-portfolio'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );