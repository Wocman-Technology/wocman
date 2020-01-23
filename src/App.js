import React from "react";
import { HomePage } from "./Pages/HomePage/homepage.component";
import { AboutUs } from "./Pages/about-us/about-us.component";
import { Services } from "./Pages/services/services.component";
import { Contact } from "./Pages/contact/contact.component";
import { Login } from "./Pages/login/login.component";
import { SignUp } from "./Pages/signup/signup.component";
import { Verifyemail } from "./Pages/verify-email/verify-email.component"
import { AccountSetup } from "./Pages/account-setup/account-setup.component";
import { Switch, Route } from "react-router-dom";
import "./App.css";

const App = () => {
  return (
    <>
      <Switch>
        <Route exact path="/" component={HomePage} />
        <Route path="/about" component={AboutUs} />
        <Route path="/services" component={Services} />
        <Route path="/contact" component={Contact} />
        <Route path="/login" component={Login} />
        <Route path="/signup" component={SignUp} />
        <Route path="/verify-email" component={Verifyemail} />
        <Route path="/account-setup" component={AccountSetup} />
      </Switch>
    </>
  );
};

export default App;
