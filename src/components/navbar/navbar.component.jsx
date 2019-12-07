import React, { useState } from "react";
import { NavWrapper } from "./navbar.styles";
import { Link } from 'react-router-dom';
import {
  MDBNavbar,
  MDBBtn,
  MDBNavbarBrand,
  MDBNavbarNav,
  MDBNavItem,
  MDBNavLink,
  MDBNavbarToggler,
  MDBCollapse
} from "mdbreact";
import NavBarLogo from '../../assets/Logo.svg'

export const NavBar = () => {
  const [isOpen, setisOpen] = useState(false);

  return (
      <NavWrapper>
        <MDBNavbar color="default-color" dark expand="md">
          <MDBNavbarBrand>
            <Link to="/">
            <img src={NavBarLogo} title="wocman"></img>
            </Link>
          </MDBNavbarBrand>
          <MDBNavbarToggler onClick={() => setisOpen(!isOpen)} />
          <MDBCollapse id="navbarCollapse3" isOpen={isOpen} navbar>
            <MDBNavbarNav left>
              <MDBNavItem >
                <MDBNavLink to="/">Home</MDBNavLink>
              </MDBNavItem>
              <MDBNavItem>
                <MDBNavLink to="/about">About Us</MDBNavLink>
              </MDBNavItem>
              <MDBNavItem>
                <MDBNavLink to="#!">Product</MDBNavLink>
              </MDBNavItem>
              <MDBNavItem>
                <MDBNavLink to="#!">Services</MDBNavLink>
              </MDBNavItem>
              <MDBNavItem>
                <MDBNavLink to="#!">Contact Us</MDBNavLink>
              </MDBNavItem>
            </MDBNavbarNav>
            <MDBNavbarNav right>
              <MDBNavItem>
                <MDBNavLink className="waves-effect" to="#!">
                  <MDBBtn color="brown">Get Wocman</MDBBtn>
                </MDBNavLink>
              </MDBNavItem>
              <MDBNavItem>
                <MDBNavLink className="waves-effect" to="#!">
                  <MDBBtn color="brown">Become Wocman</MDBBtn>
                </MDBNavLink>
              </MDBNavItem>
            </MDBNavbarNav>
          </MDBCollapse>
        </MDBNavbar>
      </NavWrapper>
  );
};
