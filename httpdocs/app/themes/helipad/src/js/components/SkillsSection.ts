import $ from "jquery";
import {TweenMax} from 'gsap';

export default class SkillsSection {

  private container: JQuery = $('#skills');
  private scrollDist: number = 0;
  private elemPosY: number = this.container.position().top;
  private band: JQuery = this.container.find('.flourish');


  onScroll = (): number => {
    this.scrollDist = window.scrollY;

    this.animateSection();

    return this.scrollDist;
  };

  animateSection = (): void => {
    let width = this.scrollDist - this.elemPosY / 2;

    if (width < 140) {
      TweenMax.to(this.band, 1, {
        width: `${width}%`
      })
    }

  }

}