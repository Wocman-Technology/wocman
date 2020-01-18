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
    <div className="container">
      <div classname="row">
        <div className="col-md-6 col-sm-12 text-white text-break">
          <h2 className="pb-4">
            Sign Up to start earning by solving real life problems
          </h2>
          <small>
            Wocman lets customers find available artisans and workmen around
            their location
          </small>
        </div>
        <div className="col-md-6 col-sm-12">
          <FormWrapper>
            <h2>Sign in</h2>
            <small>Kindly sign into your workstation</small>
            <SignUpButton />
          <form className=""></form>
        </FormWrapper>
      </div>
      </div>
    </div>
  </Loginwrapper>
);
