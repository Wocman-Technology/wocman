import React from "react";
import { WhyChooseUsArticleWrapper } from "./why-choose-us-article.styles";

export const WhyChooseUsArticle = ({ img, title, desc }) => (
  <WhyChooseUsArticleWrapper>
    <div>
      <img src={img} alt={title} />
    </div>
    <h2>{title}</h2>
    <p>{desc}</p>
  </WhyChooseUsArticleWrapper>
);
