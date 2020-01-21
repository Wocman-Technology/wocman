import React from "react";
import { VerifyEmailWrapper, VerifyButton } from "./verify-email.styles";
import VerifyImage from "../../assets/verifyemail.svg";

export const Verifyemail = () => {
  return (
    <VerifyEmailWrapper>
      <div>
        <img src={VerifyImage} alt="verify your email" />
      </div>
      <div>
        <h2>Verify your email to proceed</h2>
        <p>
          We just sent an email to the address: blah@gmail.com Please check your
          email and click on the link provided to verify your address.
        </p>
        <div>
          <small>Change Email</small>
        </div>
      </div>
      <VerifyButton>Resend Verification Mail</VerifyButton>
    </VerifyEmailWrapper>
  );
};
