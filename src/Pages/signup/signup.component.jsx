import React from "react";
import {
  Signupwrapper,
  FormWrapper,
  SignUpWithGmail,
  SignUpButton
} from "./signup.styles";
import { Link } from "react-router-dom";
import NavBarLogo from "../../assets/Logo.svg";

export const SignUp = () => {
  return (
    <Signupwrapper>
      <div className="img__div">
        <Link to="/">
          <img className="pl-3" src={NavBarLogo} alt="logo" />
        </Link>
      </div>
      <div>
        <FormWrapper>
          <h4>Sign up</h4>
          <small>Kindly sign into your wocstation</small>
          <div className="google">
            {/* <div><i className="fab fa-google"></i></div> */}
            <SignUpWithGmail>
              <i className="fab fa-google"></i>
              <span>Sign up with Gmail</span>
            </SignUpWithGmail>
          </div>{" "}
          <div className="divider">
            <span>OR</span>
          </div>
          <form className="sign-in-form">
            <div className="input-container">
              <label htmlFor="email" className="email">
                <small>Email Address</small>
              </label>
              <div>
                <input
                  type="email"
                  className="email"
                  id="email"
                  placeholder="Email"
                />
                <SignUpButton type="submit">
                  <span>Sign Up</span>
                </SignUpButton>
              </div>
            </div>
          </form>
          <div className="signin">
            <p>Already have an account ?</p>
            <Link to="/login">
              <span>sign in</span>
            </Link>
          </div>
        </FormWrapper>
      </div>
    </Signupwrapper>
  );
};
