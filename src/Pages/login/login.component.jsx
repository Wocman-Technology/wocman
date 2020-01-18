import React from "react";
import { Loginwrapper, SignUpButton, FormWrapper } from "./login.styles";
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
          Sign Up to start earning by solving real life problems
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
            <div><i className="fab fa-google"></i></div>
            <SignUpButton><span>Sign in with Gmail</span></SignUpButton>
          </div>{" "}
          <div>
            <span>OR</span>
          </div>
          <form className=""></form>
        </FormWrapper>
      </div>
    </div>
  </Loginwrapper>
);
