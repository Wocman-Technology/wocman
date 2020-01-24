import React from "react";
import { NavBar } from "../../components/navbar/navbar.component";
import { Footer } from "../../components/footer/footer.component";
import {
  AccountSetUpWrapper,
  AccountSetUpButton,
  TermsWrapper
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
              <div>
                <div>First Name</div>
                <input type="text" name="" id="" />
              </div>
              <div>
                <div>Last Name</div>
                <input type="text" name="" id="" />
              </div>
              <div>
                <div>Username</div>
                <input type="text" name="" id="" />
              </div>
            </div>
            <p>Location</p>
            <div className="input-container">
              <div>
                <div>Country</div>
                <input type="text" name="" id="" />
              </div>
              <div>
                <div>City</div>
                <input type="text" name="" id="" />
              </div>
            </div>
            <TermsWrapper>
              <small>
                Yes, I understand and agree to the{" "}
                <span>Wocman Terms of service</span>, including the{" "}
                <span>User Agreement and Privacy Policy</span>
              </small>
              <label class="container">
                <input type="checkbox" />
                <span class="checkmark"></span>
              </label>
            </TermsWrapper>

            <AccountSetUpButton type="submit">Submit</AccountSetUpButton>
          </form>
        </div>
      </AccountSetUpWrapper>
      <Footer />
    </>
  );
};
