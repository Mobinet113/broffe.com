import { TweenMax, Expo } from 'gsap';
import scrollTo from 'gsap/all'
import $ from 'jquery';

export default class NextButton {

  private button: JQuery = $('.next-section');

  constructor(){
    this.onButtonPress();
  }

  onButtonPress = (): void => {
    this.button.on('click', (evt): void => {
      let target = $(evt.target);
      let currentSection = target.closest('section');
      let nextSection = this.getNextSection(currentSection);

      this.scrollToNextSection(nextSection);
    })
  };

  getNextSection = (currentSection: JQuery): JQuery => {
    return currentSection.next('section');
  }

  scrollToNextSection = (nextSection: JQuery): void => {
    let nextSectionID = nextSection.attr('id');

    window.ScrollToPlugin = scrollTo;

    TweenMax.to( window, 1.25, {
      scrollTo: `#${nextSectionID}`,
      ease: Expo.easeOut
    } )
  }
}