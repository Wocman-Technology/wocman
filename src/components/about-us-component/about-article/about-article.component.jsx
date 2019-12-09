import React from "react";
import { ArticleWrapper, DivWrapper } from "./about-article.styles";

export const AboutUsArticle = ({ title, img, desc }) => (
  <ArticleWrapper>
    <div>
      <h5>{title}</h5>
      <p>{desc}</p>
    </div>
    <DivWrapper img={`url(${img})`}></DivWrapper>
  </ArticleWrapper>
);
