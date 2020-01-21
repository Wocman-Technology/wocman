import React from "react";
import {
  Loginwrapper,
  SignInWithGmail,
  SignInButton,
  FormWrapper
} from "./login.styles";
import { Link } from "react-router-dom";
import NavBarLogo from "../../assets/Logo.svg";

export const Login = () => (
  <Loginwrapper>
    <div className="img__div">
      <Link to="/">
        <img className="pl-3" src={NavBarLogo} alt="logo" />
      </Link>
    </div>
    <div className="custom-container">
      <div className="text-white text-break">
        <h2 className="pb-4">
          Sign in to start earning by solving real life problems
        </h2>
        <small>
          Wocman lets customers find available artisans and workmen around their
          location
        </small>
      </div>
      <div>
        <FormWrapper>
          <h4>Sign in</h4>
          <small>Kindly sign into your workstation</small>
          <div className="google">
            {/* <div><i className="fab fa-google"></i></div> */}
            <SignInWithGmail>
              <i className="fab fa-google"></i>
              <span>Sign in with Gmail</span>
            </SignInWithGmail>
          </div>{" "}
          <div className="divider">
            <span>OR</span>
          </div>
          <form className="sign-in-form">
            <div className="input-container">
              <label htmlFor="email" className="email">
                <small>Email Address</small>
              </label>
              <input
                type="email"
                className="email"
                id="email"
                placeholder="Email"
              />
            </div>
            <div className="input-container">
              <label htmlFor="email" className="email">
                <small>Password</small>
              </label>
              <input
                type="password"
                className="email"
                id="email"
                placeholder="Password"
              />
            </div>
            <SignInButton type="submit">Sign In</SignInButton>
          </form>
          <div className="signup">
            <p>Don't have an account ?</p>
            <Link to="/signup">
              <span>sign up</span>
            </Link>
          </div>
        </FormWrapper>
      </div>
    </div>
  </Loginwrapper>
);
