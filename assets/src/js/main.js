const homePageSiteHeader = () => {

  const homePage = document.querySelector( 'body.home' );
  const pageHero = document.querySelector( '.home .page-hero' );

  if( !homePage && !pageHero ) return;

  homePage.classList.add( 'hide-header-elements' );

  if( window.scrollY > pageHero.offsetHeight - 100 ) {

    homePage.classList.remove( 'hide-header-elements' );

  } else {

    homePage.classList.add( 'hide-header-elements' );

  }

  // Add classs when menu is open
  const siteHeaderMenuToggle = document.querySelector( '.site-header .menu-toggle' );

  if( !siteHeaderMenuToggle ) return;

  const mutationConfig = { attributes: true, attributeOldValue: true };

  const mutationCallback = ( mutationsList, observer ) => {

    for( let mutation of mutationsList ) {

      if( mutation.type !== 'attributes' ) return;

      if( mutation.attributeName !== 'class' ) {

        if( mutation.target.classList.contains( 'activated' ) ) {

          homePage.classList.add( 'menu-is-activated' );


        } else {

          homePage.classList.remove( 'menu-is-activated' );

        }

      }

    }

  }

  const observer = new MutationObserver( mutationCallback );

  observer.observe( siteHeaderMenuToggle, mutationConfig );

}

const teamPageModals = () => {

  // Listen for click on all team members with bios
  const teamMembersWithBios = document.querySelectorAll( '.team-member .details.has-bio' );

  for( let i = 0; i < teamMembersWithBios.length; i++ ) {

    teamMembersWithBios[i].addEventListener( 'click', function(e) {
      // If clicked, display modal
      // Copy photo, name, and role from listing
      const photo = this.querySelector( '.photo' ).cloneNode( true );
      const name = this.querySelector( '.name' ).cloneNode( true );
      const role = this.querySelector( '.role' ).cloneNode( true );
      const bio = this.querySelector( '.bio' ).cloneNode( true );

      // Create modal
      const bioModal = document.createElement( 'div' );
      bioModal.classList.add( 'bio-modal' );

      const closeBtn = document.createElement( 'button' );
      closeBtn.innerText = 'Close';

      bioModal.appendChild( closeBtn );
      bioModal.appendChild( photo );
      bioModal.appendChild( bio );
      bio.insertBefore( role, bio.firstChild );
      bio.insertBefore( name, bio.firstChild );

      // Add modal to page
      const siteContainer = document.querySelector( '.site-container' );

      siteContainer.appendChild( bioModal );

      // Close modal if button is clicked
      closeBtn.addEventListener( 'click', function(e) {
        e.preventDefault();

        bioModal.remove();

      }, false );

    }, false );

  }

}

window.addEventListener( 'load', () => {

  homePageSiteHeader();
  teamPageModals();

} );

window.onscroll = homePageSiteHeader;
