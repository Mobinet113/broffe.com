import $ from "jquery";
import {TweenMax} from "gsap";

export default class PortfolioSection{
  private container: JQuery = $('#portfolio');
  private scrollDist: number = 0;
  private elemPosY: number = this.container.position().top;
  private band: JQuery = this.container.find('.flourish');
  private piece: JQuery = this.container.find('.piece');


  onScroll = (): number => {
    this.scrollDist = window.scrollY;

    this.animateSection();
    //this.onItemHover();

    return this.scrollDist;
  };

  animateSection = (): void => {
    let width = this.scrollDist - this.elemPosY / 1.5;

    if (width < 140) {
      TweenMax.to(this.band, 1, {
        width: `${width}%`
      })
    }
  }

  onItemHover = ():void => {
    this.piece.on('mouseover', (evt) => {

      let target = evt.currentTarget;

      let x = Math.floor(Math.random() * 20) + 1;
      let y = Math.floor(Math.random() * 20) + 1;

      TweenMax.to(target, 0.25,{
        x: x,
        y: y
      });

      console.log(evt);


    });
  }
}