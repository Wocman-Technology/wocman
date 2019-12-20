import React from "react";

import { WorkOnDemandWrapper, ButtonWrapper } from "./work-on-demand.styles";

export const WorkOnDemand = ({ title, img, logo }) => (
  <WorkOnDemandWrapper img={`url(${img})`}>
    <img src={logo} alt={logo} />
    <ButtonWrapper>{title}</ButtonWrapper>
  </WorkOnDemandWrapper>
);
