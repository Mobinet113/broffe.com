import $ from "jquery";

import Hero from './components/Hero';
import NextButton from './components/NextButton';
import SkillsSection from './components/SkillsSection';
import PortfolioSection from "./components/PortfolioSection";

const heroSection = new Hero;
new NextButton;
const skillsSection = new SkillsSection;
const portfolioSection = new PortfolioSection();


$(window).on('scroll', (): void => {
  heroSection.onScroll();
  skillsSection.onScroll();
  portfolioSection.onScroll();
});
