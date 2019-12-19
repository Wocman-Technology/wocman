import React from "react";

import {
  RegistrationPanelWrapper,
  DivWrapper,
  ButtonWrapper
} from "./registration-panel.styles";

export const RegistrationPanel = () => (
  <RegistrationPanelWrapper>
    <DivWrapper customer>
      <div>
        <h3>I am a Customer</h3>
        <p>
          Join our waiting list to enjoy wholesome discount as our pioneer
          customers. At wocman, we have the best people for your projects.
        </p>
      </div>
      <ButtonWrapper regular>Register</ButtonWrapper>
    </DivWrapper>
    <DivWrapper>
      <div>
        <h3>I am a Wocman</h3>
        <p>
          Are you a skilled tradesmen or a professional? Then register with
          wocman as a work-partner to earn about 50,000 naira weekly.
        </p>
        <ButtonWrapper>Join</ButtonWrapper>
      </div>
    </DivWrapper>
  </RegistrationPanelWrapper>
);
