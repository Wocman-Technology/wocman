import React from "react";
import { NavBar } from "../../components/navbar/navbar.component";
import { Footer } from "../../components/footer/footer.component";
import {
  AccountSetUpWrapper,
  AccountSetUpButton
} from "./account-setup.styles";

export const AccountSetup = () => {
  return (
    <>
      <NavBar />
      <AccountSetUpWrapper>
        <div>
          <h2>Complete Your Account Setup</h2>
          <p>blah@gmail.com</p>
        </div>
        <div>
          <form action="">
            <p>Profile</p>
            <div className="input-container">
              <input type="text" name="" id="" />
              <input type="text" name="" id="" />
              <input type="text" name="" id="" />
            </div>
            <p>Location</p>
            <div className="input-container">
              <input type="text" name="" id="" />
              <input type="text" name="" id="" />
            </div>
            <div className="terms">
              <small>
                Yes, I understand and agree to the Wocman Terms of service,
                including the User Agreement and Privacy Policy
              </small>
              <input type="checkbox" name="accept" id="" />
            </div>
            <AccountSetUpButton type="submit">Submit</AccountSetUpButton>
          </form>
        </div>
      </AccountSetUpWrapper>
      <Footer />
    </>
  );
};
