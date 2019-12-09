import React from "react";

import { SectionWrapper } from "./about-section.styles";
import {aboutUs} from '../../../Pages/HomePage/data'

import { AboutUsArticle } from "../about-article/about-article.component";

export const AboutUsSection = () => (
  <SectionWrapper>
    {aboutUs.map(about => <AboutUsArticle key={about['id']} {...about}/>)}
  </SectionWrapper>
);
