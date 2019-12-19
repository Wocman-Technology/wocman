import React from "react";

import { PopularCaregoryWrapper } from "./popular-category.styles";

export const PopularCategory = ({ id, title, desc }) => (
  <PopularCaregoryWrapper>
    <img src={id} alt={title} />
    <div>
      <h6>{title}</h6>
    </div>
    <small>{desc}</small>
  </PopularCaregoryWrapper>
);
