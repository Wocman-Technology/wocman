import React from "react";
import { HeadingWrapper } from "./heading.styles";

export const SectionHeader = ({ children, ...props }) => (
  <HeadingWrapper {...props}>{children}</HeadingWrapper>
);
