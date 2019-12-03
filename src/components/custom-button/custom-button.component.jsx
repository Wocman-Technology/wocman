import React from "react";

import { ButtonWrapper } from "./custom-button.styles";

export const CustomButton = ({ children, ...otherProps }) => (
  <ButtonWrapper {...otherProps}>{children}</ButtonWrapper>
);
