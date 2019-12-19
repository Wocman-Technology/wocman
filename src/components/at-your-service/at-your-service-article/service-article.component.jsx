import React from "react";

import { ServiceArticleWrapper } from "./service-article.styles";

export const ServiceArticle = ({ title, img, desc }) => (
  <ServiceArticleWrapper img={img}>
    <div>
      <div>
        <h2>{title}</h2>
        <small>{desc}</small>
      </div>
      <button>
        <p>Explore</p>
      </button>
    </div>
  </ServiceArticleWrapper>
);
