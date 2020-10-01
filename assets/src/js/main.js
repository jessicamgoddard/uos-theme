const homePageSiteHeader = () => {

  const homePage = document.querySelector( 'body.home' );
  const pageHero = document.querySelector( '.page-hero' );

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

window.addEventListener( 'load', () => {

  homePageSiteHeader();

} );

window.onscroll = homePageSiteHeader;
