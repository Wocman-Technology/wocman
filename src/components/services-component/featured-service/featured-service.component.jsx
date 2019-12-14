import React from "react";
import { FeaturedServiceWrapper } from "./featured-service.styles";

export const FeaturedService = ({ img, title }) => (
  <FeaturedServiceWrapper>
    <div className="img">
      <img src={img} alt={title} />
    </div>
    <div className="title">
      <h2>{title}</h2>
    </div>
  </FeaturedServiceWrapper>
);
