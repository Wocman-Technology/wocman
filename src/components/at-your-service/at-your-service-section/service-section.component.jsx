import React from "react";

import { atYourService } from "../../../Pages/HomePage/data";
import { ServiceArticle } from "../at-your-service-article/service-article.component";
import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";
import { ServiceSectionWrapper } from "./service-section.styles";

export const ServiceSection = () => (
  <>
    <SectionHeader regular>At Your Service</SectionHeader>
    <ServiceSectionWrapper>
      {atYourService.map(service => (
        <ServiceArticle key={service.id} {...service} />
      ))}
    </ServiceSectionWrapper>
  </>
);
