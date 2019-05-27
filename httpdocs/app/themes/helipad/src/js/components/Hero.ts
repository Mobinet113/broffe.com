import {TweenMax} from 'gsap';
import $ from 'jquery';

export default class Hero {

  private hero: JQuery = $('#hero');
  private inner: JQuery = this.hero.find('.inner');
  private band: JQuery = this.hero.find('.strap .band');
  private footer: JQuery = this.hero.find('footer');

  constructor() {
    this.onLoad();
  }

  onLoad = (): void => {
    this.hero.addClass('loaded');

    this.animateHero();
    this.animateStrap();
    this.animateFooter();

    $(window).on('scroll', this.onScroll);
  };

  animateHero = (): void => {
    TweenMax.to(this.inner, 1, {
      opacity: 1,
      delay: 0.5
    })
  };

  animateStrap = (): void => {
    TweenMax.to(this.band, 1, {
      opacity: 1,
      width: "100%",
      delay: 1.25
    });
  };

  animateFooter = (): void => {
    TweenMax.to(this.footer, 1, {
      opacity: 1,
      delay: 3
    })
  };

  animateBand = (scrolled: number): void => {
    let width = 100 + (scrolled / 2); // New width of the band

    // We don't need the band to go too wide...
    if (width > 300){
      width = 300;
    }

    TweenMax.to(this.band, 1, {
      width: `${width}%`
    })

  };

  onScroll = (): number => {
    let scrolled = window.scrollY;

    this.animateBand(scrolled);

    return scrolled;
  }

}