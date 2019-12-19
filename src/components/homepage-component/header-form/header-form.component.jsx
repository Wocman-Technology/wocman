import React, { useState } from "react";

import {
  FormWrapper,
  FormOuterWrapper,
  JoinButton
} from "./header-form.styles";
import { FormInput } from "../../form-input/form-input.component";
import { CustomButton } from "../../custom-button/custom-button.component";

export const HeaderForm = () => {
  const [state, setState] = useState(false);
  return (
    <FormOuterWrapper>
      <div className="header-button">
        <CustomButton onClick={() => setState(false)}>customer</CustomButton>
        <CustomButton inverted onClick={() => setState(true)}>
          wocman
        </CustomButton>
      </div>
      {state ? (
        <FormWrapper>
          <FormInput placeholder="Full Name" />
          <FormInput placeholder="Phone Number" />
          <FormInput placeholder="Email" />
          <FormInput placeholder="Location" />
          <FormInput placeholder="SkillSet" />
          <JoinButton>Join</JoinButton>
        </FormWrapper>
      ) : (
        <FormWrapper customer>
          <FormInput placeholder="Full Name" />
          <FormInput placeholder="Phone Number" />
          <FormInput placeholder="Email" />
          <div></div>
          <JoinButton inverted>Submit</JoinButton>
          <div></div>
        </FormWrapper>
      )}
    </FormOuterWrapper>
  );
};
