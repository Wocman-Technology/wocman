import React from "react";

import { SectionHeader } from "../../heading-wrapper/heading-wrapper.component";
import { WhyChooseUsArticle } from "../why-choose-us-article/why-choose-us-article.component";
import { WhyChooseUsWrapper } from "./why-choose-us.styles";
import { whyChooseUs } from "../../../Pages/HomePage/data";

export const WhyChooseUs = () => (
  <>
    <SectionHeader regular>Why Choose Us</SectionHeader>
    <WhyChooseUsWrapper>
      {whyChooseUs.map(choice => (
        <WhyChooseUsArticle key={choice.id} {...choice} />
      ))}
    </WhyChooseUsWrapper>
  </>
);
