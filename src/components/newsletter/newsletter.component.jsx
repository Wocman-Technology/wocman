import React from "react";

import { NewsLetterWrapper, ButtonWrapper } from "./newsletter.styles";

export const NewsLetter = () => (
  <NewsLetterWrapper>
    <div>
      <h4>Sign up for our newsletters</h4>
      <p>
        You can sign up to receive regular updates on our affairs and dealings
      </p>
    </div>
    <div>
      <input type="text" placeholder="Email address" />
      <ButtonWrapper>Save Me</ButtonWrapper>
    </div>
  </NewsLetterWrapper>
);
