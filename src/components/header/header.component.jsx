import React from "react";
import { HeaderWrapper } from "./header.styles";

export const Header = ({ children, ...props }) => (
  <HeaderWrapper {...props}>{children}</HeaderWrapper>
);
